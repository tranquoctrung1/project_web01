<?php 
    include('../../../lib/DataProvider.php');
    if(isset($_POST['txtTen']))
    {
        $ten = $_POST['txtTen'];
        $hang = $_POST['cmbHang'];
        $loai = $_POST['cmbLoai'];
        $hinh = $_FILES['fHinh']["name"];
        $gia = $_POST['txtGia'];
        $ton = $_POST['txtTon'];
        $mota = $_POST['txtMoTa'];

        $file_name=$_FILES['fHinh']['name'];
        $file_size=$_FILES['fHinh']['size'];
        $file_tmp=$_FILES['fHinh']['tmp_name'];
        $file_type=$_FILES['fHinh']['type'];

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

        $sql = "INSERT INTO sanpham(TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuongXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat) VALUES ('$ten', '$hinh', $gia, CURRENT_DATE(), $ton, 100, 10, '$mota', 0, $loai, $hang)";
        DataProvider::ExecuteQuery($sql);
    }
    DataProvider::ChangeURL('../../index.php?c=1');
?>