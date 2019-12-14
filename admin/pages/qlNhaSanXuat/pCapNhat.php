<?php
    if(!isset($_GET["id"]))
        DataProvider::ChangeURL("index.php?c=404");

    $id = $_GET["id"];
    $sql = "SELECT * FROM HangSanXuat WHERE MaHangSanXuat = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
?>

<div class="box">
    <form action="./pages/qlNhaSanXuat/xlCapNhat.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data" class="frm">
        <div>
            <h3 class="mb-2">Cập Nhật Hãng Sản Xuất</h3>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="txtTen">Tên hãng sản xuất</label>
                <input type="text" name="txtTen" class="form-control" id="txtTen" value="<?php echo $row["TenHangSanXuat"]; ?>">
                <i id="error" class="text-danger"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="fLogo">Hình ảnh</label>
            <input type="file" class="form-control-file" name="fLogo" id="fLogo">
            <img src="../images/<?php echo $row["LogoURL"]; ?>" width="75">
        </div>
        <div class="submit-form">
            <input type="hidden" name="id" value="<?php echo $row['MaHangSanXuat']; ?>">
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