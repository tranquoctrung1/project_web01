<?php 

    include('../../../lib/DataProvider.php');

    if(isset($_POST['dateNgayLap']))
    {
        $dateNgayLap = $_POST['dateNgayLap'];
        $cmbMaKhachHang = $_POST['cmbMaKhachHang'];
        $txtTongTien = $_POST['txtTongTien'];
        $cmbTinhTrang = $_POST['cmbTinhTrang'];
        $id = $_POST['id'];

        $dateNgayLap = $dateNgayLap.date(' H:s:i');

        $sql = "UPDATE DonDatHang SET NgayLap = '$dateNgayLap' ,MaTaiKhoan = $cmbMaKhachHang, TongTien = $txtTongTien, MaTinhTrang = $cmbTinhTrang WHERE MaDonDatHang = '$id'";
        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL('../../index.php?c=5');

?>