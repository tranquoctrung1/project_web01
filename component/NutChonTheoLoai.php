<?php 

    include_once('./lib/DataProvider.php');

    $sql_2 = "SELECT * FROM LoaiSanPham WHERE BiXoa = 0";
    $result_2 = DataProvider::ExecuteQuery($sql_2);

    $nutSanPhamTheoLoai = "";
    while($row_2 = mysqli_fetch_array($result_2))
    {
        $maLoaiSanPham_2 = $row_2['MaLoaiSanPham'];
        $tenLoaiSanPham_2 = $row_2['TenLoaiSanPham'];
        $hinhURL_2 = $row_2['HinhURL'];
        
        $nutSanPhamTheoLoai .= "<li><a href='./loaisanpham.php?p=$maLoaiSanPham_2'> <img class='mr-2' src='./images/$hinhURL_2' alt=''>$tenLoaiSanPham_2</a></li>";
    }


?>