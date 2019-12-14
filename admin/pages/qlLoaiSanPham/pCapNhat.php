<?php
    if(!isset($_GET["id"]))
        DataProvider::ChangeURL('../pError.php');
    $id = $_GET["id"];
    $sql = "SELECT * FROM loaisanpham WHERE MaLoaiSanPham = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
?>
<div class="box">
    <form action="./pages/qlLoaiSanPham/xlCapNhat.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data" class="frm">
        <div>
            <h3>Cập nhật thông tin loại sản phẩm</h3>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="txtTen">Tên loại sản phẩm</label>
                <input type="text" name="txtTenLoaiSanPham" class="form-control" id="txtTen" value="<?php echo $row["TenLoaiSanPham"]; ?>">
                <input type="hidden" name="id" value="<?php echo $row["MaLoaiSanPham"]; ?>">
                <i id="err" class="text-danger"></i>
            </div>
        </div>
            <div class="form-group">
                <label for="fHinh">Hình ảnh</label>
                <input type="file" class="form-control-file" name="fHinh" id="fHinh">
                <img src="../images/<?php echo $row["HinhURL"]; ?>" width="75">
            </div>
        <div class="submit-form">
            <button type="submit" class="btn btn-primary" name="btnUpdate" >Cập nhật</button>
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

