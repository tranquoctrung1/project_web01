<?php 

    $txtTenSanPham = "";
    if(isset($_GET['txtTenSanPham']))
    {
        $txtTenSanPham = $_GET['txtTenSanPham'];
    }
?>
<div class="container danh-sach-san-pham">
    <div class="row chuc-nang">
        <div class="col">
            <div id="timKiem">
                <form class="form-inline my-2 my-lg-0" method="GET" action="./index.php">
                    <input type="hidden" name="c" value="1">
                    <input type="hidden" name="a" value="4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên sản phẩm" aria-label="Nhập tên sản phẩm" name="txtTenSanPham">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Giá sản phẩm</th>
                        <th scope="col">Ngày nhập</th>
                        <th scope="col">Số lượng tồn</th>
                        <th scope="col">Số lượng bán</th>
                        <th scope="col">Số lượng xem</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Bị xóa</th>
                        <th scope="col">Loại sản phẩm</th>
                        <th scope="col">Hãng sản xuất</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT s.MaSanPham,s.TenSanPham,s.HinhURL,s.GiaSanPham,s.NgayNhap,s.SoLuongTon,s.SoLuongBan,s.SoLuongXem,s.MoTa,s.BiXoa,l.TenLoaiSanPham,h.TenHangSanXuat
        FROM sanpham s,loaisanpham l,hangsanxuat h 
        WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND h.MaHangSanXuat = s.MaHangSanXuat AND s.TenSanPham LIKE '%$txtTenSanPham%' ORDER BY s.MaSanPham ";
                    $result = DataProvider::ExecuteQuery($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['MaSanPham'] ?></td>
                            <td><?php echo $row['TenSanPham'] ?></td>
                            <td> <img src="../images/<?php echo $row['HinhURL'] ?>" alt="" height="50"> </td>
                            <td><?php echo $row['GiaSanPham'] ?></td>
                            <td><?php echo $row['NgayNhap'] ?></td>
                            <td><?php echo $row['SoLuongTon'] ?></td>
                            <td><?php echo $row['SoLuongBan'] ?></td>
                            <td><?php echo $row['SoLuongXem'] ?></td>
                            <td><?php
                                    if (strlen($row['MoTa']) > 20) {
                                        $MoTa = substr($row['MoTa'], 0, 20) . "...";
                                    } else {
                                        $MoTa = $row['MoTa'];
                                    }
                                    ?>
                                <div class="fullMoTa"><?php echo $row['MoTa'] ?></div>
                            </td>
                            <td><?php
                                    if ($row['BiXoa'] == 1) {
                                        echo "<img src='images/locked.png'";
                                    } else {
                                        echo "<img src='images/active.png'";
                                    }
                                    ?></td>
                            <td><?php echo $row['TenLoaiSanPham'] ?></td>
                            <td><?php echo $row['TenHangSanXuat'] ?></td>
                            <td>
                                <a href="./pages/qlSanPham/xlKhoa.php?id=<?php echo $row['MaSanPham']; ?>">
                                    <img src="images/lock.png" alt="">
                                </a>
                                <a href="index.php?c=1&a=2&id=<?php echo $row['MaSanPham']; ?>">
                                    <img src="images/edit.png" alt="">
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>