<?php 

    include_once('./lib/DataProvider.php');

    $sql_2 = "SELECT * FROM HangSanXuat WHERE BiXoa = 0";
    $result_2 = DataProvider::ExecuteQuery($sql_2);

    $nutSanPhamTheoHang = "";
    while($row_2 = mysqli_fetch_array($result_2))
    {
        $maHangSanXuat_2 = $row_2['MaHangSanXuat'];
        $tenHangSanXuat_2 = $row_2['TenHangSanXuat'];
        $logoURL_2 = $row_2['LogoURL'];
        
        $nutSanPhamTheoHang .= "<li><a href='./hangsanxuat.php?p=$maHangSanXuat_2'> <img class='mr-2' src='./images/$logoURL_2' alt=''>$tenHangSanXuat_2</a></li>";
    }


?>