
<h2>Quản lý tài khoản người dùng</h2>
<div class="container danh-sach-san-pham">
    <div class="row chuc-nang">
        <div class="col">
            <div id="themSanPham">
                <a href="./index.php?c=4&a=3">
                    <button type="button" class="btn btn-primary">Thêm mới</button>
                </a>
            </div>
            <div id="timKiem">
                <form class="form-inline my-2 my-lg-0" method="GET" action="./index.php">
                    <input type="hidden" name="c" value="4">
                    <input type="hidden" name="a" value="4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên người dùng" aria-label="Nhập tên người dùng" name="txtTenNguoiDung">
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
                        <th scope="col">Mã tài khoản</th>
                        <th scope="col">Tên đăng nhập </th>
                        <th scope="col">Tên hiển thị</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Thành phố</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Loại tài khoản</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT t.MaTaiKhoan,t.TenDangNhap,t.TenHienThi,t.NgaySinh,t.ThanhPho,t.BiXoa,l.TenLoaiTaiKhoan
        FROM taikhoan t, loaitaikhoan l
        WHERE t.MaLoaiTaiKhoan= l.MaLoaiTaiKhoan";
                    $result = DataProvider::ExecuteQuery($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                            <td><?php echo $row['MaTaiKhoan'] ?></td>
                            <td><?php echo $row['TenDangNhap'] ?></td>
                            <td><?php echo $row['TenHienThi'] ?></td>
                            <td><?php echo $row['NgaySinh'] ?></td>
                            <td><?php echo $row['ThanhPho'] ?></td>
                            <td>
                                <?php
                                    if ($row['BiXoa'] == 1) {
                                        echo "<img src='images/locked.png'";
                                    } else {
                                        echo "<img src='images/active.png'";
                                    }
                                    ?>
                            </td>
                            <td><?php echo $row['TenLoaiTaiKhoan'] ?></td>
                            <td>
                                <a href="pages/qlTaiKhoanNguoiDung/xlKhoa.php?id=<?php echo $row['MaTaiKhoan'] ?>">
                                    <img src="./images/lock.png" alt="">
                                </a>
                                <a href="index.php?c=4&a=2&id=<?php echo $row['MaTaiKhoan'] ?>">
                                    <img src="./images/edit.png" alt="">
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