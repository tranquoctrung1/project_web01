<?php 

    include('../../lib/ShoppingCart.php');

    session_start();

    $_SESSION['SoLuongTrongGioHang'] = 0;
    $gioHang =  new ShoppingCart();
    $_SESSION['GioHang'] = serialize($gioHang);

    if($_SESSION['MaLoaiTaiKhoan'] == 2)
    {
        header('Location: ../../admin/');
    }
    else
    {
        header('Location: ../../');
    }
?>