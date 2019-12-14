
<?php 
    $a = 1;
    if(isset($_GET['a']))
    {
        $a = $_GET['a'];
    }
    switch($a)
    {
        case 1:
            include('pages/qlLoaiSanPham/pDanhSach.php');
            break;
        case 2:
            include('pages/qlLoaiSanPham/pCapNhat.php');
            break;
        case 3:
            include('pages/qlLoaiSanPham/pThemMoi.php');
            break;
        case 4:
            include('pages/qlLoaiSanPham/pTimKiem.php');
            break;
        default:    
            include('pages/Error.php');
            break;
    }
?>