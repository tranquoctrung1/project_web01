<h2>Quản lý nhà sản xuất</h2>

<div class="container danh-sach-san-pham">
    <div class="row chuc-nang">
        <div class="col">
            <div id="themSanPham">
                <a href="./index.php?c=3&a=3">
                    <button type="button" class="btn btn-primary">Thêm mới</button>
                </a>
            </div>
            <div id="timKiem">
                <form class="form-inline my-2 my-lg-0" method="GET" action="./index.php">
                    <input type="hidden" name="c" value="3">
                    <input type="hidden" name="a" value="4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên nhà sản xuất" aria-label="Nhập tên nhà sản xuất" name="txtTenNhaSanXuat">
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
                        <th scope="col">STT</th>
                        <th scope="col">Tên hãng sản xuất</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM HangSanXuat";
                    $result = DataProvider::ExecuteQuery($sql);
                    $stt = 1;
                    while ($row = mysqli_fetch_array($result)) {

                        ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $row['TenHangSanXuat'] ?></td>
                            <td>
                                <img src="../images/<?php echo $row['LogoURL'] ?>" height="50">
                            </td>
                            <td>
                                <?php
                                    if ($row['BiXoa'] == 1) {
                                        echo "<img src='images/locked.png'";
                                    } else {
                                        echo "<img src='images/active.png'";
                                    }
                                    ?>
                            </td>
                            <td>
                                <a href="pages/qlNhaSanXuat/xlKhoa.php?id=<?php echo $row['MaHangSanXuat']; ?>">
                                    <img src="images/lock.png">
                                </a>
                                <a href="index.php?c=3&a=2&id=<?php echo $row['MaHangSanXuat']; ?>">
                                    <img src="images/edit.png">
                                </a>
                            </td>
                        </tr>

                    <?php
                        $stt++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>