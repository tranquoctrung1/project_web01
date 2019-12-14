<?php

    include('../../../lib/DataProvider.php');

    if(isset($_POST['cmbMaSanPham']))
    {
        $maSanPham = $_POST['cmbMaSanPham'];
        $soLuong = $_POST['txtSoLuong'];
        $maDonDatHang = $_POST['cmbMaDonDatHang'];

        if(isset($_POST['cmbMaKhachHang']))
        {
            $cmbMaKhachHang = $_POST['cmbMaKhachHang'];
        }

        $tongTien = 0;

        if($maDonDatHang == '0')
        {
            // tạo ra thằng đơn đặt hàng mới
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $ngayLap = date('Y-m-d H:i:s');
            $maTinhTrang = 1;
    
            $sql = "SELECT * FROM SanPham WHERE MaSanPham = $maSanPham";
            $result = DataProvider::ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);

            $giaSanPham = $row['GiaSanPham'];
            $tongTien = $soLuong * $giaSanPham;
           
            $maDonDatHang = "DH".date('d').date('m').date('Y').date('H').date('i').date('s').substr(date('s'),2);
    
            $maChiTietDonDatHang = "CTDDH".date('d').date('m').date('Y').date('H').date('i').date('s').substr(date('s'),2).$soLuong;
    
            $sql = "INSERT INTO DonDatHang(MaDonDatHang, NgayLap, TongTien, MaTaiKhoan, MaTinhTrang) VALUES ('$maDonDatHang', '$ngayLap', $tongTien, $cmbMaKhachHang, $maTinhTrang)";
            $result =  DataProvider::ExecuteQuery($sql);

            // chèn vào chi tiết đơn đặt hàng
            $sql =  "INSERT INTO ChiTietDonDatHang VALUES ('$maChiTietDonDatHang', $soLuong, $giaSanPham, '$maDonDatHang', $maSanPham)";
            DataProvider::ExecuteQuery($sql);
        }
        else 
        {
            // sản phẩm chèn vào thuộc vào đơn hàng đã có trong database
            
            $maChiTietDonDatHang = "CTDDH".date('d').date('m').date('Y').date('H').date('i').date('s').substr(date('s'),2).$soLuong;

            $sql = "SELECT * FROM SanPham WHERE MaSanPham = $maSanPham";
            $result = DataProvider::ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);

            $giaSanPham = $row['GiaSanPham'];
            $tongTien = $soLuong * $giaSanPham;

            // chèn vào chi tiết đơn đặt hàng
            $sql =  "INSERT INTO ChiTietDonDatHang VALUES ('$maChiTietDonDatHang', $soLuong, $giaSanPham, '$maDonDatHang', $maSanPham)";
            DataProvider::ExecuteQuery($sql);

            $sql = "SELECT * FROM DonDatHang WHERE MaDonDatHang = '$maDonDatHang'";
            $result = DataProvider::ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);

            $tongTienCuaDonHang = $tongTien + intval($row['TongTien']);
            // update đơn giá của đơn đặt hàng
            $sql = "UPDATE DonDatHang SET TongTien = $tongTienCuaDonHang WHERE MaDonDatHang = '$maDonDatHang'";
            DataProvider::ExecuteQuery($sql);
        }

        // lấy số lượng bán của sản phẩm
        $sql = "SELECT * FROM SanPham WHERE MaSanPham = $maSanPham";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);

        $soLuongTonConLai = intval($row['SoLuongTon']) - $soLuong;


        // Cập nhật số lượng lại cho sản phẩm
        $sql = "UPDATE SanPham SET SoLuongTon = $soLuongTonConLai WHERE MaSanPham = $maSanPham";
        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL('./index.php?c=5');
?>
