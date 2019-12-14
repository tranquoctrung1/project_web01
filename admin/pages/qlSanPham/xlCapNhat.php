<?php 
    include('../../../lib/DataProvider.php');

    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $ten = $_POST['txtTen'];
        $hang = $_POST['cmbHang'];
        $loai = $_POST['cmbLoai'];
        $hinh = $_FILES['fHinh']["name"];

        $ban = $_POST['txtBan'];
        $gia = $_POST['txtGia'];
        $ton = $_POST['txtTon'];
        $mota = $_POST['txtMoTa'];


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

            $sql = "UPDATE sanpham SET TenSanPham = '$ten', MaHangSanXuat='$hang', MaLoaiSanPham='$loai'
            , SoLuongTon='$ton', GiaSanPham='$gia', SoLuongBan='$ban', Mota='$mota', HinhURL='$hinh'
            WHERE MaSanPham = $id";
        }
        else 
        {
            $sql = "UPDATE sanpham SET TenSanPham = '$ten', MaHangSanXuat='$hang', MaLoaiSanPham='$loai',SoLuongTon='$ton', GiaSanPham='$gia', SoLuongBan='$ban', Mota='$mota' WHERE MaSanPham = $id";
        }
        DataProvider::ExecuteQuery($sql);
    }
    DataProvider::ChangeURL('../../index.php?c=1');
?>