<?php 

    session_start();

    include('../../lib/DataProvider.php');
    include('../../lib/ShoppingCart.php');

    if(isset($_SESSION['GioHang']))
    {
        $tongTien = 0;
        if(isset($_POST['cost']))
        {
            $tongTien = $_POST['cost'];
        }

        $gioHang = unserialize($_SESSION['GioHang']);
        $maTaiKhoan = $_SESSION['MaTaiKhoan'];

        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $ngayLap = date('Y-m-d H:i:s');
        $maTinhTrang = 1;

        $sql = "SELECT * FROM DonDatHang";
        $result = DataProvider::ExecuteQuery($sql);

        $maDonDatHang = "DH".date('d').date('m').date('Y').date('H').date('i').date('s').substr(date('s'),2);


        $sql = "INSERT INTO DonDatHang(MaDonDatHang, NgayLap, TongTien, MaTaiKhoan, MaTinhTrang) VALUES ('$maDonDatHang', '$ngayLap', $tongTien, $maTaiKhoan, $maTinhTrang)";
        $result =  DataProvider::ExecuteQuery($sql);
    
        $soLuongSanPham = count($gioHang->listProduct);

        for($i = 0; $i < $soLuongSanPham; $i ++)
        {
            $id = $gioHang->listProduct[$i]->id;
            $sl = $gioHang->listProduct[$i]->num;

            $ngayLap_2 = date('Y-m-d H:i:s');

            $sql = "SELECT GiaSanPham, SoLuongTon FROM SanPham WHERE MaSanPham = $id";
            $result = DataProvider::ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);

            $soLuongTonHienTai = $row['SoLuongTon'];
            $giaSanPham = $row['GiaSanPham'];

            $sql = "SELECT * FROM ChiTietDonDatHang";
            $result = DataProvider::ExecuteQuery($sql);

            $maChiTietDonDatHang = "CTDDH".date('d').date('m').date('Y').date('H').date('i').date('s').substr(date('s'),2).$i;

            $sql =  "INSERT INTO ChiTietDonDatHang VALUES ('$maChiTietDonDatHang', $sl, $giaSanPham, '$maDonDatHang', $id)";
            DataProvider::ExecuteQuery($sql);

            $soLuongTonMoi = $soLuongTonHienTai - $sl;

            $sql ="UPDATE SanPham SET SoLuongTon = $soLuongTonMoi WHERE MaSanPham = $id";
            DataProvider::ExecuteQuery($sql);
        }

        $gioHangMoi = new ShoppingCart();
        $_SESSION['GioHang'] = serialize($gioHangMoi); 
        $_SESSION['SoLuongTrongGioHang'] = 0;
        echo 1;
    }
    else 
    {
        echo 0;
    }

    
?>