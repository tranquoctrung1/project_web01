<?php
    include "../../../lib/DataProvider.php";

    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];

        // Đếm loại sản phẩm
        $sql = "SELECT COUNT(*) FROM HangSanXuat WHERE MaHangSanXuat = $id";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);

        if($row[0] == 0)
        {
            //Nếu không có trong database thì xóa nó 
            $sql = "DELETE FROM HangSanXuat WHERE MaHangSanXuat = $id";
        }
        else
        {
            //Thực hiện khóa loại sản phẩm do đã có sản phẩm thuộc về loại này hay mở khóa
            $sql = "UPDATE HangSanXuat SET BiXoa = 1 - BiXoa WHERE MaHangSanXuat = $id";
        }

        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL("../../index.php?c=3");
?>