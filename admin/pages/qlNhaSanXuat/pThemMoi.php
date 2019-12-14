<div class="box">
    <form action="./pages/qlNhaSanXuat/xlThemMoi.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data" class="frm">
        <div>
            <h3>Thêm Hãng Sản Xuất</h3>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="txtTen">Tên hãng sản xuất</label>
                <input type="text" name="txtTen" class="form-control" id="txtTen">
                <i id="error" class="text-danger"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="fLogo">Hình ảnh</label>
            <input type="file" class="form-control-file" name="fLogo" id="fLogo">
        </div>
        <div class="submit-form">
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
            <a href="./index.php?c=3" class="ml-2">
                <button type="button" class="btn btn-danger">Hủy</button>
            </a>
        </div>
    </form>
</div>

<script type="text/javascript">
    function KiemTra()
    {
        var ten = document.getElementById("txtTen");
        var err = document.getElementById("error");
        if(ten.value == "")
        {
            err.innerHTML = "Tên hãng sản xuất không được rỗng";
            ten.focus();
            return false;
        }
        else
            err.innerHTML = "";

        return true;
    }
</script>