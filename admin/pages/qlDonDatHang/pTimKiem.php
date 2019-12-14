

<?php

    $txtTenTaiKhoan = "";
    if(isset($_GET['txtTenTaiKhoan']))
    {
        $txtTenTaiKhoan = $_GET['txtTenTaiKhoan'];
    }

?>

<div class="container danh-sach-san-pham">
    <div class="row chuc-nang">
        <div class="col">
            <div id="timKiem">
                <form class="form-inline my-2 my-lg-0" method="GET" action="./index.php">
                    <input type="hidden" name="c" value="5">
                    <input type="hidden" name="a" value="4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên khách hàng" aria-label="Nhập tên khách hàng" name="txtTenTaiKhoan">
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
                    <th scope="col">Mã đơn đặt hàng </th>
                    <th scope="col">Ngày lập</th>
                    <th scope="col">Khách hàng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Tình trạng</th>
                    <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $stt = 1;
                        $sql ="SELECT d.MaDonDatHang, d.TongTien, d.NgayLap, t.TenHienThi, tt.TenTinhTrang, tt.MaTinhTrang
                        FROM dondathang d, taikhoan t, tinhtrang tt 
                        WHERE d.MaTaiKhoan = t.MaTaiKhoan AND d.MaTinhTrang = tt.MaTinhTrang AND t.TenHienThi LIKE '%$txtTenTaiKhoan%'";

                        $result = DataProvider::ExecuteQuery($sql);
                        while($row = mysqli_fetch_array($result))
        {
            ?>
                    <tr>
                    <td><?php echo $stt++; ?></td>
                    <td><?php echo $row['MaDonDatHang'] ?></td>
                    <td><?php echo $row['NgayLap'] ?></td>
                    <td><?php echo $row['TenHienThi'] ?></td>
                    <td><?php echo $row['TongTien'] ?></td>
                    <td><?php echo $row['TenTinhTrang'] ?></td>
                    <td>
                        <a href="./pages/qlDonDatHang/xlKhoa.php?id=<?php echo $row['MaDonDatHang']; ?>&idTinhTrang=<?php echo $row['MaTinhTrang'];?>">
                            <img src="images/lock.png" alt="">
                        </a>
                        <a href="index.php?c=5&a=2&id=<?php echo $row['MaDonDatHang']; ?>">
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