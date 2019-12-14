<?php 

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $sql = "SELECT * FROM TaiKhoan WHERE MaTaiKhoan = $id";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
    }

?>

<div class="box">
    <form action="./pages/qlTaiKhoanNguoiDung/xlCapNhat.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data" class="frm">
        <div>
            <h3>Cập nhật Tài Khoản</h3>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txthoten">Họ tên</label>
                <input type="text" name="txthoten" class="form-control" id="txthoten" value="<?php echo $row['TenHienThi']; ?>">
                <i id="errHoTen" class="text-danger"></i>
            </div>
            <div class="form-group col-md-6">
                <label for="datengaysinh">Ngày sinh</label>
                <input type="date" name="datengaysinh" class="form-control" id="datengaysinh" value="<?php echo $row['NgaySinh'] ?>">
                <i id="errNgaySinh" class="text-danger"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="txtnoisong">Tỉnh/Thành phố</label>
            <input type="text" class="form-control" name="txtnoisong" id="txtnoisong" value="<?php echo $row['ThanhPho'] ?>">
            <i id="errNoiSong" class="text-danger"></i>
        </div>
            <div class="form-group">
                <label for="txtTenDangNhap">Tên đăng nhập</label>
                <input type="text" name="txtTenDangNhap" class="form-control" id="txtTenDangNhap" value="<?php echo $row['TenDangNhap'] ?>" disabled>
                <i id="errTenDangNhap" class="text-danger"></i>
            </div>
            <div class="form-group">
                <label for="pass01">Mật khẩu củ</label>
                <input type="password" name="pass01" class="form-control" id="pass01">
                <input type="hidden" class="form-control" id="oldPass" value="<?php echo $row['MatKhau'] ?>">
                <i id="errPSS1" class="text-danger"></i>
            <div class="form-group">
                <label for="newPass">Mật khẩu mới</label>
                <input type="password" name="newPass" class="form-control" id="newPass">
                <i id="errNewPass" class="text-danger"></i>
        </div>
        <div class="form-group">
            <label for="cmbLoaiTaiKhoan">Loại tài khoản</label>
            <select class="form-control" id="cmbLoaiTaiKhoan" name="cmbLoaiTaiKhoan">
                <?php

                $sql = "SELECT * FROM LoaiTaiKhoan";
                $result = DataProvider::ExecuteQuery($sql);
                
                while ($row = mysqli_fetch_array($result)) {

                    if($row['MaLoaiTaiKhoan'] == 2)
                    {
                        $selected = "selected";
                    }
                    else
                    {
                        $selected = "";
                    }
                    ?>

                    <option value="<?php echo $row['MaLoaiTaiKhoan']; ?>" <?php echo $selected ?>><?php echo $row['TenLoaiTaiKhoan']; ?></option>

                <?php
                }
                ?>
            </select>
        </div>
        <div class="submit-form">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a href="./index.php?c=4" class="ml-2">
                <button type="button" class="btn btn-danger">Hủy</button>
            </a>
        </div>

    </form>
</div>


<script type="text/javascript">
    function KiemTra()
    {
        var ten = document.getElementById("txthoten");
        var err = document.getElementById("errHoTen");
        if(ten.value == "")
        {
            err.innerHTML = "(Họ Tên không được rỗng)";
            ten.focus();
            return false;
        }
        else
            err.innerHTML = "";

        var datengaysinh = document.getElementById("datengaysinh");
        var errNgaySinh = document.getElementById("errNgaySinh");
        if(datengaysinh.value == "")
        {
            errNgaySinh.innerHTML = "(Ngày sinh không được rỗng)";
            datengaysinh.focus();
            return false;
        }
        else
            errNgaySinh.innerHTML = "";

        var ten = document.getElementById("txtnoisong");
        var err = document.getElementById("errNoiSong");
        if(ten.value == "")
        {
            err.innerHTML = "(Nơi sống không được rỗng)";
            ten.focus();
            return false;
        }
        else
            err.innerHTML = "";

        var ten = document.getElementById("txtTenDangNhap");
        var err = document.getElementById("errTenDangNhap");
        if(ten.value == "")
        {
            err.innerHTML = "(Tên Đăng Nhập không được rỗng)";
            ten.focus();
            return false;
        }
        else
            err.innerHTML = "";

        var ten = document.getElementById("pass01");
        var ten3 = document.getElementById('oldPass');
        var err = document.getElementById("errPSS1");
        if(ten.value == "")
        {
            err.innerHTML = "(Password củ không được rỗng)";
            ten.focus();
            return false;
        }
        else if(ten.value != ten3.value)
        {
            err.innerHTML = "(Password củ không đúng)";
            ten.focus();
            return false;
        }
        else
            err.innerHTML = "";
        
        var ten2 = document.getElementById('newPass');
        var err = document.getElementById('errNewPass');
        if(ten2.value == '')
        {
            err.innerHTML = "(Password mới không được rỗng)";
            ten.focus();
            return false;
        }
        return true;
    }
</script>
