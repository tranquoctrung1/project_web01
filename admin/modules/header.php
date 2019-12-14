<?php 
    $tenHienThi = $_SESSION['TenHienThi'];
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="logo">
                <a href="../"><img src="../images/logo.png" alt="logo shopping"></a>
            </div>
            <div class="admin"><a href="javascript:void(0)"><span><?php echo $tenHienThi; ?></span><i class="fas fa-user-circle"></i></a><a href="../controller/xlDangXuat.php"><span>Đăng Xuất</span><i class="fas fa-sign-out-alt"></i></a></div>
        </div>
    </div>
</div>