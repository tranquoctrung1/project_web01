<?php 
    include_once('./lib/DataProvider.php');

    // Lấy theo loại sản phẩm
    $sql_1 = "SELECT MaLoaiSanPham FROM SanPham WHERE MaSanPham = $id";
    $result_1 = DataProvider::ExecuteQuery($sql_1);
    $maLoaiSanPham =  mysqli_fetch_array($result_1)['MaLoaiSanPham'];

    $sql_1 = "SELECT * FROM SanPham WHERE BiXoa = 0 AND MaLoaiSanPham = $maLoaiSanPham  AND MaSanPham != $id LIMIT 0,5 ";
    $result_1 =  DataProvider::ExecuteQuery($sql_1);
    
    $sanPhamLienQuan = "";
    while($row_1 = mysqli_fetch_array($result_1))
    {
        $hinhURL_1 = $row_1['HinhURL'];
        $tenSanPham_1 = $row_1['TenSanPham'];
        $maSanPham_1 = $row_1['MaSanPham'];
        $giaSanPham_1 = $row_1['GiaSanPham'];
        $soLuotXem_1 = $row_1['SoLuongXem'];

        $sanPhamLienQuan .= " <div class='item'>
                                <figure>
                                    <div class='img-box'>
                                        <img src='./images/$hinhURL_1' alt='' srcset=''>
                                        <a href='./controller/xlChuaDangNhap.php'>
                                            <i class='fas fa-shopping-cart'></i>
                                        </a>
                                        <a href='./thongtinchitietsanpham.php?id=$maSanPham_1'>
                                            <i class='fas fa-eye'></i>
                                        </a>
                                    </div>
                                    <figcaption>
                                        <h4 class='text-center ten-san-pham'>$tenSanPham_1</h4>
                                        <div class='gia-luoc-xem'>
                                            <span class='gia'>$giaSanPham_1<sup>đ</sup></span><span class='luoc-xem'>Số lượt xem: $soLuotXem_1</span>
                                        </div>
                                        <div class='chi-tiet mt-2'>
                                            <a href='./thongtinchitietsanpham.php?id=$maSanPham_1'>Chi tiết
                                            </a>
                                            <a href='./controller/xlChuaDangNhap.php'>Thêm giỏ hàng
                                            </a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>";
    }
