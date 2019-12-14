<?php
    include "../../../lib/DataProvider.php";

    if(isset($_POST["txthoten"]))
    {
        $tendangnhap = $_POST["txtTenDangNhap"];
        $password = $_POST["pass01"];
        $hoten = $_POST["txthoten"];
        $ngaysinh = $_POST["datengaysinh"];
        $noisong = $_POST["txtnoisong"];
        $maLoaiTaiKhoan = $_POST['cmbLoaiTaiKhoan'];
 
        $sql = "INSERT INTO taikhoan(TenDangNhap, MatKhau, TenHienThi, NgaySinh, ThanhPho, BiXoa, MaLoaiTaiKhoan)
        VALUES('$tendangnhap', '$password', '$hoten', '$ngaysinh', '$noisong', 0, $maLoaiTaiKhoan)";
        
        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL("../../index.php?c=4");
?>