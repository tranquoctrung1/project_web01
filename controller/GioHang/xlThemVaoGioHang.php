<?php
    include('../../lib/ShoppingCart.php');
    
    session_start();

    if(!isset($_SESSION['MaLoaiTaiKhoan']))
    {
        echo 0;
    }
    else 
    {
        if(isset($_SESSION['SoLuongTrongGioHang']))
        {
            $_SESSION['SoLuongTrongGioHang'] += 1; 
        }

        if(isset($_SESSION['GioHang']) != null)
        {
            $gioHang = unserialize($_SESSION['GioHang']);
        }
        else 
        {
            $gioHang = new ShoppingCart();
        }

        $num = 1;
        if(isset($_POST['num']))
        {
            $num = $_POST['num'];
        }

        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            $gioHang->add($id, $num);

            $_SESSION['GioHang'] = serialize($gioHang);
        }

        $gioHang = unserialize($_SESSION['GioHang']);

        for($i = 0; $i < count($gioHang->listProduct); $i++)
        {
            $id_2 = $gioHang->listProduct[$i]->id;
            $num_2 = $gioHang->listProduct[$i]->num;
            echo " $id_2 - $num_2";
        }
    }

    
?>