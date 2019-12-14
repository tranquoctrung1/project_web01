<?php
    include "../../../lib/DataProvider.php";

    if(isset($_POST["id"]))
    {
        $id = $_POST["id"];
        $ten = $_POST["txtTen"];
        $logo = $_FILES['fLogo']["name"];

        if($logo != null)
        {
            $file_name = $_FILES['fLogo']['name'];
            $file_size = $_FILES['fLogo']['size'];
            $file_tmp = $_FILES['fLogo']['tmp_name'];
            $file_type = $_FILES['fLogo']['type'];

            //duoi file
            $tmp = explode('.',$_FILES['fLogo']['name']);
            $file_exit = strtolower(end($tmp));
            ///nhung duoi file
            $extensions = array("jpeg","jpg","png");
            //kiem tra
            if(in_array($file_exit,$extensions) == false)
            {
                $errror[]="Vui lòng chọ file có đuôi png,jpg,jpeg";
            }
            if(empty($errror) == true)
            {
                move_uploaded_file($file_tmp,"../../../images/".$file_name);
            }

            $sql = "UPDATE HangSanXuat SET TenHangSanXuat = '$ten', LogoURL = '$logo' WHERE MaHangSanXuat = $id";    
        }
        else 
        {
            $sql = "UPDATE HangSanXuat SET TenHangSanXuat = '$ten' WHERE MaHangSanXuat = $id";
        }

        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL("../../index.php?c=3");
?>