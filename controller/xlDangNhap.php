<?php 

    include('../lib/DataProvider.php');

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $TenDangNhap  = $_POST['username'];
        $MatKhau = $_POST['password'];

        $sql = "SELECT * FROM TaiKhoan WHERE TenDangNhap = '$TenDangNhap' AND MatKhau = '$MatKhau' AND BiXoa = 0";

       $result =  DataProvider::ExecuteQuery($sql);
       $row = mysqli_fetch_array($result);

       if($row != null)
       {
            session_start();
            $_SESSION['MaLoaiTaiKhoan'] = $row['MaLoaiTaiKhoan'];
            $_SESSION['TenHienThi'] = $row['TenHienThi'];
            header('Location: ../trangchu.php');
       }
       else
       {
            header('Location: ../dangnhap.php?err=1');
       }
    }


?>