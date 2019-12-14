<?php

    include('../lib/DataProvider.php');

    if(isset($_POST['userdangnhap']))
    {
        $TenDangNhap = $_POST['userdangnhap'];
        $MatKhau  = $_POST['passworddangnhap'];
        $HoTen = $_POST['hoten'];
        $Ngay = $_POST['ngay'];
        $Thang = $_POST['thang'];
        $Nam = $_POST['nam'];
        $ThanhPho = $_POST['thanhpho'];

        $NgayThangNamSinh = "$Nam".'-'."$Thang".'-'."$Ngay";

        // sau khi form đăng ký chuyển dữ liệu qua chỉ cần thêm vào trong database mà thôi không cần phải check lại lần nữa
        $sql = "INSERT INTO TaiKhoan(TenDangNhap, MatKhau, TenHienThi, NgaySinh, ThanhPho, BiXoa, MaLoaiTaiKhoan) VALUES ('$TenDangNhap', '$MatKhau', '$HoTen', '$NgayThangNamSinh', '$ThanhPho', 0,1)";

        DataProvider::ExecuteQuery($sql);

        header('Location: ../dangnhap.php');
    }
    else 
    {
        header('Location: ../dangky.php?err=1');
    }

   
?>