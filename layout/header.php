<!-- header cho các trang  -->

<?php

include_once('./lib/DataProvider.php');

$classKichhoatGioHang = "";

if(isset($_SESSION['SoLuongTrongGioHang']) && $_SESSION['SoLuongTrongGioHang'] > 0)
{
  $classKichhoatGioHang = "kich-hoat";
}

$sql = "SELECT * FROM loaisanpham WHERE BiXoa = 0 ";
$sql_2 = "SELECT * FROM hangsanxuat WHERE BiXoa = 0";

$result = DataProvider::ExecuteQuery($sql);
$result_2 = DataProvider::ExecuteQuery($sql_2);

$optionLoaiSanPham = "";
$optionHangSanXuat = "";

$count = 1;
while($row = mysqli_fetch_array($result))
{
  $tenLoaiSanPham = $row['TenLoaiSanPham'];
  $maLoaiSanPham = $row['MaLoaiSanPham'];
  if($count != 1)
  {
    $optionLoaiSanPham .= "<div class='dropdown-divider'></div> <a class='dropdown-item' href='./loaisanpham.php?c=$maLoaiSanPham'>$tenLoaiSanPham</a>";
  }
  else 
  {
    $optionLoaiSanPham .= "<a class='dropdown-item' href='./loaisanpham.php?c=$maLoaiSanPham'>$tenLoaiSanPham</a>";
  }
  $count++;
}

$count = 1;

while($row_2 = mysqli_fetch_array($result_2))
{
  $tenHangSanXuat = $row_2['TenHangSanXuat'];
  $maHangSanXuat = $row_2['MaHangSanXuat'];
  if($count != 1)
  {
    $optionHangSanXuat .= "<div class='dropdown-divider'> </div><a class='dropdown-item' href='./hangsanxuat.php?p=$maHangSanXuat'>$tenHangSanXuat</a>";
  }
  else 
  {
    $optionHangSanXuat .= "<a class='dropdown-item' href='./hangsanxuat.php?p=$maHangSanXuat'>$tenHangSanXuat</a>";
  }
  $count++;
}

?>

<header class="text-center" id="top">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container"><a class="navbar-brand pt-0 pb-0" href="./"><img class="logo" src="./images/logo.png" alt="Logo cửa hàng bán trang phục" sizes="" srcset=""><span class="content">Mastery Shop</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="mr-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="./">Trang Chủ</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="./loaisanpham.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loại Sản Phẩm</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php echo $optionLoaiSanPham; ?>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="./hangsanxuat.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nhà Sản Xuất</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php echo $optionHangSanXuat; ?>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="./timkiemcoban.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tìm Kiếm</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="./timkiemcoban.php">Cơ Bản</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="./timkiemnangcao.php">Nâng cao</a>
            </div>
          </li>
          <!-- dùng khi có người đăng nhập -->
          <?php
          if (isset($_SESSION['MaLoaiTaiKhoan'])) {
            if ($_SESSION['MaLoaiTaiKhoan'] == 1 || $_SESSION['MaLoaiTaiKhoan'] == 2) {
              $TenHienThi = $_SESSION['TenHienThi'];
              ?>
              <li class="nav-item cart"><a class="nav-link" href="./giohang.php"><i class="fas fa-shopping-cart mr-1  <?php echo $classKichhoatGioHang ?>" id='coSanPham'></i>Giỏ hàng</a></li>
              <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fas fa-user-circle mr-1"></i><?php echo $TenHienThi ?></a></li>
              <li class="nav-item"><a class="nav-link" href="./controller/xlDangXuat.php"><i class="fas fa-sign-out-alt mr-1"></i>Đăng xuất</a></li>
            <?php
              } else {
                ?>
              <li class="nav-item"><a class="nav-link" href="./dangnhap.php"><i class="fas fa-sign-in-alt mr-1"></i>Đăng nhập</a></li>
              <li class="nav-item"><a class="nav-link" href="./dangky.php"><i class="fas fa-sign-in-alt mr-1"></i>Đăng ký</a></li>
            <?php
              }
            } else {
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