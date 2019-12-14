<div class="box">
    <form action="./pages/qlLoaiSanPham/xlThemMoi.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data" class="frm">
        <div>
            <h3>Thêm loại sản phẩm</h3>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="txtTen">Tên loại sản phẩm</label>
                <input type="text" name="txtTen" class="form-control" id="txtTen">
                <i id="err" class="text-danger"></i>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="fHinh">Hình ảnh</label>
                <input type="file" class="form-control-file" name="fHinh" id="fHinh">
            </div>
        </div>
        <div class="submit-form">
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
            <a href="./index.php?c=2" class="ml-2">
                <button type="button" class="btn btn-danger">Hủy</button>
            </a>
        </div>

    </form>
</div>
<script>
    function KiemTra() {
        var ten = document.getElementById('txtTen');
        var err = document.getElementById('err');
        if (ten.value == '') {
            err.innerHTML = "Tên sản phẩm không được trống";
            ten.focus();
            return false;
        } 
       return true;
    }
</script>

