<?php
    include "../../../lib/DataProvider.php";

    if(isset($_POST["id"]))
    {
        $id = $_POST["id"];
        $hoTen = $_POST['txthoten'];
        $ngaySinh = $_POST['datengaysinh'];
        $noiSong = $_POST['txtnoisong'];
        $tenDangNhap = $_POST['txtTenDangNhap'];
        $matKhauMoi = $_POST['newPass'];
        $MaLoaiTaiKhoan = $_POST["cmbLoaiTaiKhoan"];

        $sql = "UPDATE TaiKhoan SET  TenDangNhap = '$tenDangNhap', NgaySinh = '$ngaySinh', ThanhPho = '$noiSong', TenHienThi = '$hoTen', MatKhau = '$matKhauMoi', MaLoaiTaiKhoan = $MaLoaiTaiKhoan WHERE MaTaiKhoan = $id";

        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL("../../index.php?c=4");
?>