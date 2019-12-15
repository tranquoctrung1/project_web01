<?php 

    include_once('./lib/DataProvider.php');

    $sql_1 = "SELECT * FROM loaisanpham WHERE BiXoa = 0";
    $result_1 = DataProvider::ExecuteQuery($sql_1);

    $thanhSanPhamTheoLoai = "";
    while($row_1 = mysqli_fetch_array($result_1))
    {
        $maLoaiSanPham = $row_1['MaLoaiSanPham'];
        $tenLoaiSanPham = $row_1['TenLoaiSanPham'];
        $hinhURL = $row_1['HinhURL'];
        
        $thanhSanPhamTheoLoai .= "<li class='nav-item'><a class='nav-link' href='./loaisanpham.php?c=$maLoaiSanPham'> <img class='mr-2' src='./images/$hinhURL' alt=''>$tenLoaiSanPham</a></li>";
    }


?>