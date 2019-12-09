<?php

    include('../lib/DataProvider.php');

    $queryString = "WHERE 1 = 1";

    if(isset($_GET['ten']))
    {
        $ten = $_GET['ten'];
        $queryString  .= " AND s.TenSanPham LIKE '%$ten%'";
    }
    if(isset($_GET['loai']))
    {
        $loai = $_GET['loai'];
        $queryString .= " AND l.TenLoaiSanPham LIKE '%$loai%'";
    }
    if(isset($_GET['nha']))
    {
        $nha = $_GET['nha'];
        $queryString .= " AND h.TenHangSanXuat LIKE '%$nha%'";
    }
    if(isset($_GET['gb']))
    {
        $gb = $_GET['gb'];
        $queryString .= " AND s.GiaSanPham >= $gb";
    }
    if(isset($_GET['gk']))
    {
        $gk = $_GET['gk'];
        $queryString .= " AND s.GiaSanPham <= $gk";
    }


    $sql = "SELECT s.TenSanPham, s.HinhURL, s.MaSanPham, s.SoLuongXem, s.GiaSanPham FROM SanPham s JOIN HangSanXuat h ON s.MaHangSanXuat = h.MaHangSanXuat JOIN LoaiSanPham l ON l.MaLoaiSanPham = s.MaLoaiSanPham $queryString";
    $result = DataProvider::ExecuteQuery($sql);

    $sanPhamTimKiemNangCao ="";
    while($row = mysqli_fetch_array($result))
    {
        $hinhURL = $row['HinhURL'];
        $tenSanPham = $row['TenSanPham'];
        $maSanPham = $row['MaSanPham'];
        $giaSanPham = $row['GiaSanPham'];
        $soLuotXem = $row['SoLuongXem'];

        $sanPhamTimKiemNangCao .= "
        <div class='col-lg-4 col-md-6'>
            <div class='item'>
                <figure>
                    <div class='img-box'>
                        <img src='./images/$hinhURL' alt='' srcset=''>
                        <a href='./controller/xlChuaDangNhap.php'>
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
                            <a href='./controller/xlChuaDangNhap.php'>Thêm giỏ hàng
                            </a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>";
    }

    echo $sanPhamTimKiemNangCao;
?>