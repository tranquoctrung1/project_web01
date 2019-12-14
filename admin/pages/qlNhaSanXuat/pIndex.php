
<?php 
    $a = 1;
    if(isset($_GET['a']))
    {
        $a = $_GET['a'];
    }
    switch($a)
    {
        case 1:
            include('./pages/qlNhaSanXuat/pDanhSach.php');
            break;
        case 2:
            include('./pages/qlNhaSanXuat/pCapNhat.php');
            break;
        case 3:
            include('./pages/qlNhaSanXuat/pThemMoi.php');
            break;
        case 4:
            include('./pages/qlNhaSanXuat/pTimKiem.php');
            break;
        default:
            include('./pages/Error.php');
            break;
    }
?>