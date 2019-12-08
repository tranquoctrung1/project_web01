<?php

    $tieude = 'Loại Sản Phẩm';
    $class = "product-type";
    $noidungtrang ="<section class='thanh-loai-san-pham text-center'>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
      <div class='container'>
        <div class='row'>
          <div class='col'>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
              <ul class='navbar-nav'>
                <li class='nav-item'><a class='nav-link' href='#'> <img class='mr-2' src='./images/coat.png' alt=''>Áo Khoác</a></li>
                <li class='nav-item'><a class='nav-link' href='#'> <img class='mr-2' src='./images/trousers.png' alt=''>Quần</a></li>
                <li class='nav-item'><a class='nav-link' href='#'> <img class='mr-2' src='./images/shirt.png' alt=''>Áo</a></li>
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
      <div class='row'>
        <div class='col-1 pl-0'>
          <nav>
            <ul>
              <li id='kichHoat'></li>
              <li><a href='#'> <img class='mr-2' src='./images/coat.png' alt=''>Áo Khoác</a></li>
              <li><a href='#'> <img class='mr-2' src='./images/trousers.png' alt=''>Quần</a></li>
              <li><a href='#'> <img class='mr-2' src='./images/shirt.png' alt=''>Áo</a></li>
            </ul>
          </nav>
        </div>
        <div class='col-lg-4 col-md-6'>
          <div class='item'>
            <figure>
              <div class='img-box'><img src='./images/ao.png' alt='' srcset=''><a href='#'><i class='fas fa-shopping-cart'></i></a><a href='#'><i class='fas fa-eye'></i></a></div>
              <figcaption>
                <h4 class='text-center ten-san-pham'>Áo Khoác</h4>
                <div class='gia-luoc-xem'><span class='gia'>180,000 <sup>đ</sup></span><span class='luoc-xem'>2 lượt xem</span></div>
                <div class='chi-tiet mt-2'><a href='#'>Chi tiết</a><a href='#'>Thêm giỏ hàng</a></div>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class='col-lg-4 col-md-6'>
          <div class='item'>
            <figure>
              <div class='img-box'><img src='./images/ao.png' alt='' srcset=''><a href='#'><i class='fas fa-shopping-cart'></i></a><a href='#'><i class='fas fa-eye'></i></a></div>
              <figcaption>
                <h4 class='text-center ten-san-pham'>Áo Khoác</h4>
                <div class='gia-luoc-xem'><span class='gia'>180,000 <sup>đ</sup></span><span class='luoc-xem'>2 lượt xem</span></div>
                <div class='chi-tiet mt-2'><a href='#'>Chi tiết</a><a href='#'>Thêm giỏ hàng</a></div>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class='col-lg-4 col-md-6'>
          <div class='item'>
            <figure>
              <div class='img-box'><img src='./images/ao.png' alt='' srcset=''><a href='#'><i class='fas fa-shopping-cart'></i></a><a href='#'><i class='fas fa-eye'></i></a></div>
              <figcaption>
                <h4 class='text-center ten-san-pham'>Áo Khoác</h4>
                <div class='gia-luoc-xem'><span class='gia'>180,000 <sup>đ</sup></span><span class='luoc-xem'>2 lượt xem</span></div>
                <div class='chi-tiet mt-2'><a href='#'>Chi tiết</a><a href='#'>Thêm giỏ hàng</a></div>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class='col-lg-4 col-md-6'>
          <div class='item'>
            <figure>
              <div class='img-box'><img src='./images/ao.png' alt='' srcset=''><a href='#'><i class='fas fa-shopping-cart'></i></a><a href='#'><i class='fas fa-eye'></i></a></div>
              <figcaption>
                <h4 class='text-center ten-san-pham'>Áo Khoác</h4>
                <div class='gia-luoc-xem'><span class='gia'>180,000 <sup>đ</sup></span><span class='luoc-xem'>2 lượt xem</span></div>
                <div class='chi-tiet mt-2'><a href='#'>Chi tiết</a><a href='#'>Thêm giỏ hàng</a></div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>";

    include('./layout/master.php');

?>

<!-- hút file js vào -->
<script src="./js/loaisanpham.js"></script>