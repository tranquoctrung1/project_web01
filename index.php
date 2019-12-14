<?php
// include các trang cần thiết cho trang chủ
include('./global/global.php');
include('./component/SanPhamMoi.php');
include('./component/SanPhanBanChay.php');

$tieude = 'Trang Chủ';
$class = 'index-page';
$noidungtrang = "<section class='khoi-bang-hieu mb-4'>
    <div class='bang-hieu'>
      <div class='owl-carousel owl-theme'>
        <div class='item'><img src='./images/home_banner_1.jpg' alt='' srcset=''></div>
        <div class='item'><img src='./images/home_banner_2.jpg' alt='' srcset=''></div>
      </div>
    </div>
  </section>
  <section class='san-pham-moi-nhat mb-4'>
    <div class='hinh-nen-1'></div>
    <div class='hinh-nen-2'></div>
    <div class='container'>
      <div class='row'>
        <div class='col'>
          <h2> <span>10 Sản Phẩm Mới Nhất</span></h2>
        </div>
      </div>
      <div class='row vi-tri'>
        <div class='col'>
          <div class='owl-carousel owl-theme' id='sanPhamMoiNhat'>
            $sanPhamMoiNhat
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='san-pham-chay-nhat'>
    <div class='hinh-nen-1'></div>
    <div class='hinh-nen-2'></div>
    <div class='container'>
      <div class='row'>
        <div class='col'>
          <h2> <span>10 Sản Phẩm Bán Chạy Nhất</span></h2>
        </div>
      </div>
      <div class='row vi-tri'>
        <div class='col'>
          <div class='owl-carousel owl-theme'>
            $sanPhamBanChay
          </div>
        </div>
      </div>
    </div>
  </section>";
include('./layout/master.php');
?>
<!-- chổ này để hút file js cho từng file php -->
<script src='./js/trangchu.js'></script>