<?php

    $txtTenLoaiSanPham = "";
    if(isset($_GET['txtTenLoaiSanPham']))
    {
        $txtTenLoaiSanPham = $_GET['txtTenLoaiSanPham'];
    }    

?>

<h2>Quản lý loại sản phẩm</h2>
<div class="container danh-sach-san-pham">
    <div class="row chuc-nang">
        <div class="col">
            <div id="timKiem">
                <form class="form-inline my-2 my-lg-0" method="GET" action="./index.php">
                    <input type="hidden" name="c" value="2">
                    <input type="hidden" name="a" value="4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên loại sản phẩm" aria-label="Nhập tên loại sản phẩm" name="txtTenLoaiSanPham">
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
                        <th scope="col">Tên loại sản phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $stt = 1;
                        $sql = "SELECT * FROM LoaiSanPham WHERE TenLoaiSanPham LIKE '%$txtTenLoaiSanPham%'";
                        $result = DataProvider::ExecuteQuery($sql);
                        while ($row = mysqli_fetch_array($result))
                        {
                    ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $row['TenLoaiSanPham'] ?></td>
                                <td> <img src="../images/<?php echo $row['HinhURL'] ?>" alt="" height="50"> </td>
                                <td>
                                <?php
                                    if($row['BiXoa'] == 1)
                                    {
                                        echo "<img src='images/locked.png'";
                                    }
                                    else 
                                    {
                                        echo "<img src='images/active.png'";
                                    }
                                ?>
                                </td>
                                <td>
                                    <a href="pages/qlLoaiSanPham/xlKhoa.php?id=<?php echo $row['MaLoaiSanPham']; ?>">
                                        <img src="images/lock.png" alt="">
                                    </a>
                                    <a href="index.php?c=2&a=2&id=<?php echo $row['MaLoaiSanPham']; ?>">
                                        <img src="images/edit.png" alt="">
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