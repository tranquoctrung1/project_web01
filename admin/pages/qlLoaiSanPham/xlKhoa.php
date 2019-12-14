<?php
    include('../../../lib/DataProvider.php');

    if (isset($_GET["id"]))
    {
        $id = $_GET["id"];

        $sql = "SELECT COUNT(*) FROM LoaiSanPham WHERE MaLoaiSanPham = $id";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);

        if ($row[0] == 0)
        {

            //Xóa dữ liệu rác
            $sql = "DELETE FROM loaisanpham WHERE MaLoaiSanPham = $id";
        }
        else
        {
            // cập nhật khóa hay là không khóa
            $sql = "UPDATE LoaiSanPham SET BiXoa = 1 - BiXoa WHERE MaloaiSanPham = $id";
        }

        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL('../../index.php?c=2&a=1');
?>