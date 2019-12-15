
<div class="box">
    <form action="./pages/qlSanPham/xlThemMoi.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data" class="frm">
        <div>
            <h3>Thêm sản phẩm</h3>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="txtTen">Tên sản phẩm</label>
                <input type="text" name="txtTen" class="form-control" id="txtTen">
            </div>
        </div>
        <div class="form-group">
            <label for="cmbLoai">Loại sản phẩm</label>
            <select class="form-control" id="cmbLoai" name="cmbLoai">
                <?php

                $sql = "SELECT * FROM loaisanpham WHERE BiXoa = 0";
                $result = DataProvider::ExecuteQuery($sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <option value="<?php echo $row['MaLoaiSanPham']; ?>"><?php echo $row['TenLoaiSanPham']; ?></option>

                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cmbHang">Hãng sản xuất</label>
            <select class="form-control" id="cmbHang" name="cmbHang">
                <?php
                $sql = "SELECT * FROM hangsanxuat WHERE BiXoa = 0";
                $result = DataProvider::ExecuteQuery($sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $row['MaHangSanXuat']; ?>"><?php echo $row['TenHangSanXuat']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txtGia">Giá sản phẩm</label>
                <input type="number" class="form-control" name="txtGia" id="txtGia" min="0" value="1"   >
                <i id="errGia"></i>
            </div>
            <div class="form-group col-md-6">
                <label for="txtTon">Số lượng tồn</label>
                <input type="number" class="form-control" name="txtTon" id="txtTon" min="0" value="1">
                <i id="errTon"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="fHinh">Hình ảnh</label>
            <input type="file" class="form-control-file" name="fHinh" id="fHinh">
        </div>
        <div class="form-group">
            <label for="txtMoTa">Mô tả</label>
            <textarea class="form-control" name="txtMoTa" id="txtMoTa"></textarea>
        </div>
        <div class="submit-form">
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
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
        return false;

    }
</script>