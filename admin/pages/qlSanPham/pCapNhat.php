<?php

if (!isset($_GET['id'])) {
    DataProvider::ChangeURL('index.php?c=404');
}

$id = $_GET['id'];

$sql = "SELECT s.MaSanPham, s.TenSanPham, s.HinhURL, s.GiaSanPham, s.NgayNhap, s.SoLuongTon, s.SoLuongBan, s.SoLuongXem, s.MoTa, s.BiXoa, l.TenLoaiSanPham, h.TenHangSanXuat, h.MaHangSanXuat, l.MaLoaiSanPham
        FROM loaisanpham l , sanpham s, hangsanxuat h 
        WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaHangSanXuat = h.MaHangSanXuat AND MaSanPham = $id";
$result = DataProvider::ExecuteQuery($sql);
$row = mysqli_fetch_array($result);
?>

<div class="box">
    <form action="./pages/qlSanPham/xlCapNhat.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data" class="frm">
        <div>
            <h3>Cập nhật thông tin sản phẩm</h3>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="txtTen">Tên sản phẩm</label>
                <input type="text" name="txtTen" class="form-control" id="txtTen" value="<?php echo $row['TenSanPham'] ?>">
                <i id="errTen" class="text-danger"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="cmbLoai">Loại sản phẩm</label>
            <select class="form-control" id="cmbLoai" name="cmbLoai">
                <?php
                $sql = "SELECT * FROM LoaiSanPham WHERE BiXoa = 0";
                $result = DataProvider::ExecuteQuery($sql);
                while ($row1 = mysqli_fetch_array($result)) {
                    ?>

                    <?php
                        if ($row['MaLoaiSanPham'] == $row1['MaLoaiSanPham']) {
                            $selected = "selected";
                        } else {
                            $selected = "";
                        }
                        ?>

                    <option value="<?php echo $row1['MaLoaiSanPham']; ?>" <?php echo $selected; ?>> <?php echo $row1['TenLoaiSanPham'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cmbHang">Hãng sản xuất</label>
            <select class="form-control" id="cmbHang" name="cmbHang">
                <?php

                $sql = "SELECT * FROM HangSanXuat WHERE BiXoa = 0";
                $result = DataProvider::ExecuteQuery($sql);
                while ($row1 = mysqli_fetch_array($result)) {
                    ?>
                    <?php
                        if ($row['MaHangSanXuat'] == $row1['MaHangSanXuat']) {
                            $selected = "selected";
                        } else {
                            $selected = "";
                        }
                        ?>
                    <option value="<?php echo $row1['MaHangSanXuat']; ?>" <?php echo $selected; ?>> <?php echo $row1['TenHangSanXuat'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txtGia">Giá sản phẩm</label>
                <input type="number" class="form-control" name="txtGia" id="txtGia" min="0" value="<?php echo $row['GiaSanPham'] ?>">
                <i id="errGia" class="text-danger"></i>
            </div>
            <div class="form-group col-md-6">
                <label for="txtTon">Số lượng tồn</label>
                <input type="number" class="form-control" name="txtTon" id="txtTon" min="0" value="<?php echo $row['SoLuongTon'] ?>">
                <i id="errTon" class="text-danger"></i>
            </div>
            <div class="form-group col-md-6">
                <label for="txtBan">Số lượng bán</label>
                <input type="number" class="form-control" name="txtBan" id="txtBan" min="0" value="<?php echo $row['SoLuongBan'] ?>">
                <i id="errBan" class="text-danger"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="fHinh">Hình ảnh</label>
            <input type="file" class="form-control-file" name="fHinh" id="fHinh">
            <div class="xlimg">
                <img src="../images/<?php echo $row['HinhURL']; ?>" alt="" width="75">
            </div>
        </div>
        <div class="form-group">
            <label for="txtMoTa">Mô tả</label>
            <textarea class="form-control" name="txtMoTa" id="txtMoTa"><?php echo $row['MoTa'] ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $row['MaSanPham']; ?>">
        <div class="submit-form">
            <button type="submit" class="btn btn-info">Cập Nhật</button>
            <a href="./index.php?c=1" class="ml-2">
                <button type="button" class="btn btn-danger">Hủy</button>
            </a>
        </div>

    </form>
</div>

<script>
    function KiemTra() {
        var ten = document.getElementById('txtTen');
        var err = document.getElementById('errTen');
        if (ten.value == '') {
            err.innerHTML = "Tên sản phẩm không được trống";
            ten.focus();
            return false;
        } else
            err.innerHTML = "";
        ten = document.getElementById('txtGia');
        err = document.getElementById('errGia');
        if (ten.value == '') {
            err.innerHTML = "Giá sản phẩm không được trống";
            ten.focus();
            return false;
        } else
            err.innerHTML = "";
        ten = document.getElementById('txtTon');
        err = document.getElementById('errTon');
        if (ten.value == '') {
            err.innerHTML = "Số lượng tồn không được trống";
            ten.focus();
            return false;
        } else
            err.innerHTML = "";
        ten = document.getElementById('txtBan');
        err = document.getElementById('errBan');
        if (ten.value == '') {
            err.innerHTML = "Số lượng bán không được trống";
            ten.focus();
            return false;
        } else
            err.innerHTML = "";
        return true;
    }
</script>