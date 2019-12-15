<?php
    include('../../../lib/DataProvider.php');

    if (isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $idTinhTrang = $_GET['idTinhTrang'];

        // tình trạng đã thanh toán thì không cập nhật là bom hàng chỉ khi khác mới cập nhật
        if($idTinhTrang != 3)
        {
            // từ đặt sang bom hàng
            if($idTinhTrang == 1)
            {
                echo 11111;
                $sql = "UPDATE dondathang SET MaTinhTrang = 2 WHERE MaDonDatHang = '$id'";
            }
            // từ bom hàng sang đặt lại
            else 
            {
                echo 222222;
                $sql = "UPDATE dondathang SET MaTinhTrang = 1 WHERE MaDonDatHang = '$id'";
            }
            DataProvider::ExecuteQuery($sql);
        }
    }

    DataProvider::ChangeURL('../../index.php?c=5&a=1');
?>