<?php
include_once('./lib/DataProvider.php');

$sql = "SELECT * FROM SanPham WHERE BiXoa = 0 ORDER BY NgayNhap DESC LIMIT 0, 10";
$result = DataProvider::ExecuteQuery($sql);

$sanPhamMoiNhat = "";

while ($row = mysqli_fetch_array($result)) {
    $hinhURL = $row['HinhURL'];
    $tenSanPham = $row['TenSanPham'];
    $maSanPham = $row['MaSanPham'];
    $giaSanPham = $row['GiaSanPham'];
    $soLuotXem = $row['SoLuongXem'];

    $sanPhamMoiNhat .= "<div class='item'>
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
                        </div>";
}
