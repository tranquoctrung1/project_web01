<?php

include_once('../lib/DataProvider.php');

if (isset($_GET['q'])) {
    $q = $_GET['q'];
} else {
    header('Location: ../timkiemcoban.php');
}

$sql = "SELECT s.HinhURL, s.TenSanPham, s.MaSanPham, s.GiaSanPham, s.SoLuongXem FROM SanPham s JOIN LoaiSanPham l ON s.MaLoaiSanPham = l.MaLoaiSanPham JOIN HangSanXuat h ON h.MaHangSanXuat = s.MaHangSanXuat WHERE TenSanPham LIKE '%$q%' AND s.BiXoa = 0 AND h.BiXoa = 0 AND l.BiXoa = 0";
$result = DataProvider::ExecuteQuery($sql);

$sanPhamTimKiemCoBan = "";

while ($row = mysqli_fetch_array($result)) {
    $hinhURL = $row['HinhURL'];
    $tenSanPham = $row['TenSanPham'];
    $maSanPham = $row['MaSanPham'];
    $giaSanPham = $row['GiaSanPham'];
    $soLuotXem = $row['SoLuongXem'];

    $sanPhamTimKiemCoBan .= "
        <div class='col-lg-4 col-md-6'>
            <div class='item'>
                <figure>
                    <div class='img-box'>
                        <img src='./images/$hinhURL' alt='' srcset=''>
                        <a onclick='ThemHang(this)' data-maSanPham='$maSanPham' href='javascript:void(0)'>
                            <i class='fas fa-shopping-cart'></i>
                        </a>
                        <a href='./thongtinchitietsanpham.php?id=$maSanPham'>
                            <i class='fas fa-eye'></i>
                        </a>
                    </div>
                    <figcaption>
                        <h4 class='text-center ten-san-pham'>$tenSanPham</h4>
                        <div class='gia-luoc-xem'>
                            <span class='gia'>$giaSanPham<sup>đ</sup></span><span class='luoc-xem'> Số lượt xem: $soLuotXem</span>
                        </div>
                        <div class='chi-tiet mt-2'>
                            <a href='./thongtinchitietsanpham.php?id=$maSanPham'>Chi tiết
                            </a>
                            <a onclick='ThemHang(this)' data-maSanPham='$maSanPham' href='javascript:void(0)'>Thêm giỏ hàng
                            </a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>";
}

$noiDungTimKiemCoBan = " <div class='row'>
<div class='col'>
  <h2> <span>Sản Phẩm </span></h2>
</div>
</div>
<div class='row vi-tri'>
    $sanPhamTimKiemCoBan
</div>";

echo $noiDungTimKiemCoBan;

?>