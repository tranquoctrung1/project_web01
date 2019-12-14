<?php
    include "../../../lib/DataProvider.php";

    if(isset($_POST["txtTen"]))
    {

        $ten = $_POST["txtTen"];
        $tenLogo = $_FILES['fLogo']["name"];

        $file_name=$_FILES['fLogo']['name'];
        $file_size=$_FILES['fLogo']['size'];
        $file_tmp=$_FILES['fLogo']['tmp_name'];
        $file_type=$_FILES['fLogo']['type'];

        //duoi file
        $tmp = explode('.',$_FILES['fLogo']['name']);
        $file_exit = strtolower(end($tmp));

        ///nhung duoi file
        $extensions=array("jpeg","jpg","png");

        //kiem tra
        if(in_array($file_exit,$extensions) == false)
        {
            $errror[]="Vui lòng chọ file có đuôi png,jpg,jpeg";
        }
        if(empty($errror)==true)
        {
            move_uploaded_file($file_tmp,"../../../images/".$file_name);
        }

        // lấy mã lớn nhất của mã hãng sản xuất sau đó tăng lên 1
        $sql = "SELECT MaHangSanXuat FROM HangSanXuat";
        $result = DataProvider::ExecuteQuery($sql);

        $maHangSanXuat = 0;
        while($row = mysqli_fetch_array($result))
        {
            $maHangSanXuat = $row['MaHangSanXuat'];
        }

        $maHangSanXuat += 1;

        // chèn vào trong database
        $sql = "INSERT INTO HangSanXuat(MaHangSanXuat, TenHangSanXuat, LogoURL, BiXoa) VALUES($maHangSanXuat, '$ten', '$tenLogo', 0)";
        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL("../../index.php?c=3");
?>