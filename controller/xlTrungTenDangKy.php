<?php

    include('../lib/DataProvider.php');

    $TenDangNhap = "";

    if(isset($_POST['TenDangNhap']))
    {
        $TenDangNhap = $_POST['TenDangNhap'];
    }

    $sql = "SELECT * FROM taikhoan WHERE TenDangNhap = '$TenDangNhap'";
    $result = DataProvider::ExecuteQuery($sql);

    $row = mysqli_fetch_array($result);

    if($row != null)
    {
        echo 1;
    }
    else 
    {
        echo 0;
    }

?>