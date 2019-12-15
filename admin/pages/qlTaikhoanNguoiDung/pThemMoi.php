
<div class="box">
    <form action="./pages/qlTaiKhoanNguoiDung/xlThemMoi.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data" class="frm">
        <div>
            <h3>Thêm Tài Khoản</h3>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txthoten">Họ tên</label>
                <input type="text" name="txthoten" class="form-control" id="txthoten">
                <i id="errHoTen" class="text-danger"></i>
            </div>
            <div class="form-group col-md-6">
                <label for="datengaysinh">Ngày sinh</label>
                <input type="date" name="datengaysinh" class="form-control" id="datengaysinh">
                <i id="errNgaySinh" class="text-danger"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="txtnoisong">Tỉnh/Thành phố</label>
            <input type="text" class="form-control" name="txtnoisong" id="txtnoisong">
            <i id="errNoiSong" class="text-danger"></i>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txtTenDangNhap">Tên đăng nhập</label>
                <input type="text" name="txtTenDangNhap" class="form-control" id="txtTenDangNhap">
                <i id="errTenDangNhap" class="text-danger"></i>
            </div>
            <div class="form-group col-md-6">
                <label for="pass01">Mật khẩu</label>
                <input type="password" name="pass01" class="form-control" id="pass01">
                <i id="errPSS1" class="text-danger"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="cmbLoaiTaiKhoan">Loại tài khoản</label>
            <select class="form-control" id="cmbLoaiTaiKhoan" name="cmbLoaiTaiKhoan">
                <?php

                $sql = "SELECT * FROM loaitaikhoan";
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
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
            <a href="./index.php?c=4" class="ml-2">
                <button type="button" class="btn btn-danger">Hủy</button>
            </a>
        </div>

    </form>
</div>

<script type="text/javascript">

    var txtTenDangNhap = document.getElementById('txtTenDangNhap');
    var errTenDangNhap = document.getElementById('errTenDangNhap');

    txtTenDangNhap.addEventListener('blur', KiemTraTenDangNhap)

    var kiemtra = true;

    function KiemTraTenDangNhap()
    {
        if(txtTenDangNhap.value == '' || txtTenDangNhap.value == null)
        {
            errTenDangNhap.innerHTML = "Tên đăng nhập không được trống";
            return false;
        }
        else 
        {
            // gọi hàm ajax để kiểm tra tên đăng nhập có trùng hay không
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if(this.responseText == '1')
                    {
                        errTenDangNhap.innerHTML = "Tên đăng nhập bị trùng!";
                        kiemtra  = false;
                    }
                    else 
                        kiemtra  = true;
                }
                
            }
            xmlhttp.open("POST", "../controller/xlTrungTenDangKy.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("TenDangNhap=" + txtTenDangNhap.value);
        }
    }

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
        if(kiemtra == false)
        {
            return false;
        }   
              
        var ten = document.getElementById("pass01");
        var err = document.getElementById("errPSS1");
        if(ten.value == "")
        {
            err.innerHTML = "(Password không được rỗng)";
            ten.focus();
            return false;
        }
        else
            err.innerHTML = "";
        return true;
    }
</script>
