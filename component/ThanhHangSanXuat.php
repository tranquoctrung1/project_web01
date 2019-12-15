<?php 

    include_once('./lib/DataProvider.php');

    $sql_1 = "SELECT * FROM hangsanxuat WHERE BiXoa = 0";
    $result_1 = DataProvider::ExecuteQuery($sql_1);

    $thanhSanPhamTheoHang = "";
    while($row_1 = mysqli_fetch_array($result_1))
    {
        $maHangSanXuat = $row_1['MaHangSanXuat'];
        $tenHangSanXuat = $row_1['TenHangSanXuat'];
        $logoURL = $row_1['LogoURL'];
        
        $thanhSanPhamTheoHang .= "<li class='nav-item'><a class='nav-link' href='./hangsanxuat.php?p=$maHangSanXuat'> <img class='mr-2' src='./images/$logoURL' alt=''>$tenHangSanXuat</a></li>";
    }


?>