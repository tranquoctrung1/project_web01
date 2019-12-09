<?php 

    session_start();

    if(!isset($_SESSION['MaLoaiTaiKhoan']))
    {
        header('Location: ../dangnhap.php');
    }
    else 
    {
        header('Location: ../giohang.php');
    }
?>