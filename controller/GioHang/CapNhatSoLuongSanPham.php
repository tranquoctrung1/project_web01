<?php

    if(isset($_POST['s']))
    {
        include('../../lib/ShoppingCart.php');

        $s = $_POST['s'];
        $id = $_POST['id'];

        session_start();
        
        $gioHang =  unserialize($_SESSION['GioHang']);  

        $gioHang->update($id, $s);

        // lấy số lượng sau khi update

        for($i = 0; $i < count($gioHang->listProduct); $i++)
        {
            if($gioHang->listProduct[$i]->id == $id)
            {
                echo $gioHang->listProduct[$i]->num;
                break;
            }
        }

        $_SESSION['GioHang'] = serialize($gioHang);
    }
    else 
    {
        echo -1;
    }

?>