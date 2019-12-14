<?php 
    include('../../../lib/DataProvider.php');

    if(isset($_GET['id']))
    {
        $id  = $_GET['id'];

        $sql = "SELECT COUNT(*) FROM SanPham WHERE MaSanPham = $id";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        
        if($row[0] == 0)
        {
            // xóa dữ liệu rác
            $sql = "DELETE FROM SanPham WHERE MaSanPham = $id";
        }
        else
        {
            // Cập nhật bị xóa lên thành 1 hay là xuống 0 theo bị xóa của sản phẩm
            $sql = "UPDATE SanPham SET BiXoa = 1  - BiXoa WHERE MaSanPham= $id";
        }
        DataProvider::ExecuteQuery($sql);
    }
    DataProvider::ChangeURL('../../index.php?c=1');
?>