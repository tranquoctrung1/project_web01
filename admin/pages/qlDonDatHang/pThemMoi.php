<div class="box">
    <form action="./pages/qlDonDatHang/xlThemMoi.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data" class="frm">
        <div>
            <h3>Thêm Đơn Đặt Hàng</h3>
        </div>
        <div class="form-group col">
            <label for="cmbMaSanPham">Tên sản phẩm</label>
            <select class="custom-select" name="cmbMaSanPham" id="cmbMaSanPham">
                <?php 
                    $sql = "SELECT * FROM sanpham";
                    $result = DataProvider::ExecuteQuery($sql);
                    
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                            <option value="<?php echo $row['MaSanPham'] ?>"><?php echo $row['TenSanPham'] ?></option>
                        <?php
                    }
                ?>
            </select>
            <i id="errMaSanPham" class="text-danger"></i>
        </div>
        <div class="form-group col">
                <label for="txtSoLuong">Số lượng</label>
                <input type="number" name="txtSoLuong" class="form-control" id="txtSoLuong" min="1" value="1">
        </div>
        <div class="form-group col">
            <label for="cmbMaDonDatHang">Tên đơn hàng</label>
            <select class="custom-select" name="cmbMaDonDatHang" id="cmbMaDonDatHang">
                <?php 
                    $sql = "SELECT * FROM dondathang";
                    $result = DataProvider::ExecuteQuery($sql);
                    
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                            <option value="<?php echo $row['MaDonDatHang'] ?>"><?php echo $row['MaDonDatHang'] ?></option>
                        <?php
                    }
                    
                ?>
                <option value="0" selected>Không thuộc đơn hàng nào</option>
            </select>
        </div>
        <div class="form-group col" id="cmbMaKhachHang">
            <label for="cmbMaKhachHang">Tên khách hàng</label>
            <select class="custom-select" name="cmbMaKhachHang" id="maKhachHang">
                <?php 
                    $sql = "SELECT * FROM taikhoan";
                    $result = DataProvider::ExecuteQuery($sql);
                    
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                            <option value="<?php echo $row['MaTaiKhoan'] ?>"><?php echo $row['TenHienThi'] ?></option>
                        <?php
                    }
                ?>
            </select>
            <i id="errMaKhachHang" class="text-danger"></i>
        </div>
        <div class="submit-form">  
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
            <a href="./index.php?c=5" class="ml-2">
                <button type="button" class="btn btn-danger">Hủy</button>
            </a>
        </div>

    </form>
</div>
<script>
    function KiemTra() {
        var cmbMaSanPham = document.getElementById('cmbMaSanPham');
        var err = document.getElementById('errMaSanPham');
        var cmbMaKhachHang = document.getElementById('cmbMaKhachHang');
        var errMaKhachHang  = document.getElementById('errMaKhachHang');

        if (cmbMaSanPham.value == '') {
            err.innerHTML = "Tên sản phẩm không được trống";
            cmbMaSanPham.focus();
            return false;
        }  
        if (cmbMaKhachHang.value == '') {
            errMaKhachHang.innerHTML = "Tên khách hàng không được trống";
            cmbMaKhachHang.focus();
            return false;
        }  
       return true;
    }

    document.addEventListener("DOMContentLoaded" , () => 
    {
        var cmbMaDonDatHang = document.getElementById('cmbMaDonDatHang');
        if(cmbMaDonDatHang.value != 0)
        {
            cmbMaKhachHang.style.display = "none";
        }
        else 
        {
            cmbMaKhachHang.style.display = "block";
        }

        cmbMaDonDatHang.addEventListener('change', (e) =>
        {
            if(e.target.value != 0)
            {
                cmbMaKhachHang.style.display = "none";
            }
            else 
            {
                cmbMaKhachHang.style.display = "block";
            }
        })
    })
</script>

