<?php

    // include các component liên quan
    include('./global/global.php');
    include('./component/ThanhHangSanXuat.php');
    include('./component/NutChonTheoHang.php');

    $tieude = 'Hãng Sản Xuất';
    $class = "hangsanxuat";
    $noidungtrang ="<section class='thanh-hang-san-xuat text-center'>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
      <div class='container'>
        <div class='row'>
          <div class='col'>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
              <ul class='navbar-nav'>
                $thanhSanPhamTheoHang
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </section>
  <section class='hang-san-xuat'>
    <div class='hinh-nen-1'></div>
    <div class='hinh-nen-2'></div>
    <div class='container'>
      <div class='col-1 pl-0'>
        <nav>
          <ul>
            <li id='kichHoat'></li>
            $nutSanPhamTheoHang
          </ul>
        </nav>
      </div>
      <div class='row' id='content'>
      </div>
    </div>
  </section>";

    include('./layout/master.php');

?>
<script src="./js/hangsanxuat.js"></script>
