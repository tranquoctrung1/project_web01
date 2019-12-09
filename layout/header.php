<!-- header cho các trang  -->

<?php 
  session_start();
?>

<header class="text-center" id="top">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container"><a class="navbar-brand pt-0 pb-0" href="./trangchu.php"><img class="logo" src="./images/logo.png" alt="Logo cửa hàng bán trang phục" sizes="" srcset=""><span class="content">Mastery Shop</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="./trangchu.php">Trang Chủ</a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="./loaisanpham.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loại Sản Phẩm</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="./loaisanpham.php?c=3">Áo Khoác</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="./loaisanpham.php?c=1">Áo</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="./loaisanpham.php?c=2">Quần</a>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="./hangsanxuat.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nhà Sản Xuất</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="./hangsanxuat.php?p=1">Adidas</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="./hangsanxuat.php?p=2">Puma</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="./hangsanxuat.php?p=3">Việt Nam</a>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="./timkiemcoban.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tìm Kiếm</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="./timkiemcoban.php">Cơ Bản</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="./timkiemnangcao.php">Nâng cao</a>
                </div>
              </li>
              <!-- dùng khi có người đăng nhập -->
              <?php           
                if(isset($_SESSION['MaLoaiTaiKhoan']))
                {
                if($_SESSION['MaLoaiTaiKhoan'] == 1 || $_SESSION['MaLoaiTaiKhoan'] == 2)
                {
                  $TenHienThi = $_SESSION['TenHienThi'];
                  ?>
                    <li class="nav-item cart"><a class="nav-link" href="#"><i class="fas fa-shopping-cart mr-1"></i>Giỏ hàng</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fas fa-user-circle mr-1"></i><?php echo $TenHienThi ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="./controller/xlDangXuat.php"><i class="fas fa-sign-out-alt mr-1"></i>Đăng xuất</a></li>
                  <?php
                }
                else 
                {
                  ?>
                    <li class="nav-item"><a class="nav-link" href="./dangnhap.php"><i class="fas fa-sign-in-alt mr-1"></i>Đăng nhập</a></li>
                    <li class="nav-item"><a class="nav-link" href="./dangky.php"><i class="fas fa-sign-in-alt mr-1"></i>Đăng ký</a></li>
                  <?php
                }
              } 
              else 
                {
                  ?>
                    <li class="nav-item"><a class="nav-link" href="./dangnhap.php"><i class="fas fa-sign-in-alt mr-1"></i>Đăng nhập</a></li>
                    <li class="nav-item"><a class="nav-link" href="./dangky.php"><i class="fas fa-sign-in-alt mr-1"></i>Đăng ký</a></li>
                  <?php
                }   
              ?>         
            </ul>
          </div>
        </div>
      </nav>
    </header>