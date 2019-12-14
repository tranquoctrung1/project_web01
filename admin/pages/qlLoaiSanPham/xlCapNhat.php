<?php 
    include('../../../lib/DataProvider.php');

    if(isset($_POST['id']))
     //Kiểm tra có tồn tại chưa
    {
            $id = $_POST['id'];
            $ten = $_POST['txtTenLoaiSanPham'];

            $hinh = $_FILES['fHinh']["name"];

        if($hinh != null)
        {
            $file_name = $_FILES['fHinh']['name'];
            $file_size = $_FILES['fHinh']['size'];
            $file_tmp = $_FILES['fHinh']['tmp_name'];
            $file_type = $_FILES['fHinh']['type'];

            //duoi file
            $tmp = explode('.',$_FILES['fHinh']['name']);
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

            $sql = "UPDATE loaisanpham SET TenLoaiSanPham = '$ten', HinhURL = '$hinh' WHERE MaLoaiSanPham = $id";
        }
        else 
        {
            $sql = "UPDATE loaisanpham SET TenLoaiSanPham = '$ten' WHERE MaLoaiSanPham = $id";
        }
           
            DataProvider::ExecuteQuery($sql);      
    }
    
    DataProvider::ChangeURL('../../index.php?c=2&a=1');
?>