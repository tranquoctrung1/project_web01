
<?php 
    $a = 1;
    if(isset($_GET['a']))
    {
        $a = $_GET['a'];
    }
    switch($a)
    {
        case 1:
            include('./pages/qlTaikhoanNguoiDung/pDanhSach.php');
            break;
        case 2:
            include('./pages/qlTaikhoanNguoiDung/pCapNhat.php');
            break;
        case 3:
            include('./pages/qlTaikhoanNguoiDung/pThemMoi.php');
            break;
        case 4:
            include('./pages/qlTaikhoanNguoiDung/pTimkiem.php');
            break;
        default:
            include('./pages/Error.php');
            break;
    }
?>