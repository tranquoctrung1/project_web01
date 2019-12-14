<?php 

    if(isset($_POST['id']))
    {
        include('../../lib/ShoppingCart.php');
        $id = $_POST['id'];

        session_start();

        $gioHang =  unserialize($_SESSION['GioHang']);

        $soLuongCu = count($gioHang->listProduct);

        for($i = 0; $i < $soLuongCu; $i++)
        {
            if($gioHang->listProduct[$i]->id == $id)
            {
                $num = $gioHang->listProduct[$i]->num;
                $_SESSION['SoLuongTrongGioHang'] -= $num;
            }
        }

        $gioHang->delete($id);

        $soLuongMoi = count($gioHang->listProduct);

        if($soLuongMoi < $soLuongCu)
        {
            if($_SESSION['SoLuongTrongGioHang'] <= 0)
            {
                echo 2;
            }
            else 
            {
                echo 1;
            }
            $_SESSION['GioHang'] = serialize($gioHang);
        }
        else 
        {
            echo 0;
        }

    }
    else
    {
        echo 0;
    }

?>