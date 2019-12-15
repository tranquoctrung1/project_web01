<?php 

    if(isset($_GET['id']))
    {
        $maDonDatHang = $_GET['id'];
    }

    $sql_t = "SELECT * FROM DonDatHang WHERE MaDonDatHang = '$maDonDatHang'";
    $result_t  = DataProvider::ExecuteQuery($sql_t);
    $row_t = mysqli_fetch_array($result_t);
?>

<div class="box">
    <form action="./pages/qlDonDatHang/xlCapNhat.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data" class="frm">
        <div>
            <h3>Cập Nhật Đơn Hàng</h3>
        </div>
        <div class="form-group col">
            <label for="dateNgayLap">Ngày lập hóa đơn</label>
            <input type="date" name="dateNgayLap" class="form-control" id="dateNgayLap" value="<?php echo $row_t['NgayLap'] ?> ">
            <i id="errDate" class="text-danger"></i>   
        </div>
        <div class="form-group col">
            <label for="cmbMaKhachHang">Tên khách hàng</label>
            <select class="custom-select" name="cmbMaKhachHang" id="maKhachHang">
                <?php 
                    $sql = "SELECT * FROM TaiKhoan";
                    $result = DataProvider::ExecuteQuery($sql);
                    
                    while($row = mysqli_fetch_array($result))
                    {
                        if($row_t['MaTaiKhoan'] == $row['MaTaiKhoan'])
                        {
                            $selected = "selected";
                        }
                        else
                        {
                            $selected = "";
                        }
                        ?>
                            <option value="<?php echo $row['MaTaiKhoan'] ?>"  <?php echo $selected ?>><?php echo $row['TenHienThi'] ?></option>
                        <?php
                    }
                ?>
            </select>
            <i id="errMaKhachHang" class="text-danger"></i>
        </div>
        <div class="form-group col">
                <label for="txtTongTien">Tổng Tiền</label>
                <input type="number" name="txtTongTien" class="form-control" id="txtTongTien" value="<?php echo $row_t['TongTien'] ?>">
                <i id="errTongTien" class="text-danger"></i>
        </div>
        <div class="form-group col">
            <label for="cmbTinhTrang">Tình Trạng:</label>
            <select class="custom-select" name="cmbTinhTrang" id="cmbTinhTrang">
                <?php 
                    $sql = "SELECT * FROM TinhTrang";
                    $result = DataProvider::ExecuteQuery($sql);
                    
                    while($row = mysqli_fetch_array($result))
                    {
                        if($row_t['MaTinhTrang'] == $row['MaTinhTrang'])
                        {
                            $selected = "selected";
                        }
                        else
                        {
                            $selected = "";
                        }
                        ?>
                            <option value="<?php echo $row['MaTinhTrang'] ?>" <?php echo $selected ?>><?php echo $row['TenTinhTrang'] ?></option>
                        <?php
                    }  
                ?>
            </select>
        </div>
        
        <div class="submit-form">
            <input type="hidden" name="id" value="<?php echo $maDonDatHang ?>">
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a href="./index.php?c=5" class="ml-2">
                <button type="button" class="btn btn-danger">Hủy</button>
            </a>
        </div>

    </form>
</div>
<script>
    function KiemTra() {
        var errDate = document.getElementById('errDate');
        var dateNgayLap = document.getElementById('dateNgayLap');
        var errTongTien = document.getElementById('errTongTien');
        var txtTongTien  = document.getElementById('txtTongTien');

        if (dateNgayLap.value == '') {
            errDate.innerHTML = "Ngày lập hóa đơn không được trống";
            dateNgayLap.focus();
            return false;
        }  
        if (txtTongTien.value == '') {
            errTongTien.innerHTML = "Tổng tiền không được trống";
            txtTongTien.focus();
            return false;
        }  
       return true;
    }
</script>

