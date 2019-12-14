<?php

// include các component khác vào
include('./global/global.php');
include('./component/ThanhLoaiSanPham.php');

$tieude = 'Loại Sản Phẩm';
$class = "product-type";
$noidungtrang = "<section class='thanh-loai-san-pham text-center'>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
      <div class='container'>
        <div class='row'>
          <div class='col'>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
              <ul class='navbar-nav'>
                $thanhSanPhamTheoLoai
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </section>
  <section class='loai-san-pham'>
    <div class='hinh-nen-1'></div>
    <div class='hinh-nen-2'></div>
    <div class='container'>
      <div class='row' id='content'>
      </div>
    </div>
  </section>";

include('./layout/master.php');

?>

<!-- hút file js vào -->
<script src="./js/loaisanpham.js"></script>