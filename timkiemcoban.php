<?php   
    $tieude = 'Tìm Kiếm Cơ Bản';
    $class ="search-basic";
    $noidungtrang = "<section class='thanh-tim-kiem mt-3 mb-4'>
    <div class='container'>
      <div class='row'>
        <div class='col'>
          <div class='tim-kiem'>
            <div class='thanh-chua' id='thanhChua'>
              <div class='thanh-1'></div>
              <div class='thanh-2'></div>
              <div class='thanh-3'></div>
            </div>
            <div class='nhap-tim-kiem'>
              <form id='formTimKiem' action='/timkiemcoban.php' method='GET'>
                <input class='txt-tim-kiem' id='duLieuTimKiem' type='text' placeholder='Nhập tên sản phẩm' name='txtTimKiem'><i class='fas fa-search' id='kichHoatTimKiem'></i>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='san-pham-tim-kiem'>
        <div class='hinh-nen-1'></div>
        <div class='hinh-nen-2'></div>
        <div class='container'>
          <div class='row'>
            <div class='col'>
              <h2> <span>Sản Phẩm </span></h2>
            </div>
          </div>
          <div class='row vi-tri'>
            <div class='col-md-6 col-lg-4'>
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
            <div class='col-md-6 col-lg-4'>
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
            <div class='col-md-6 col-lg-4'>
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
            <div class='col-md-6 col-lg-4'>
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
            <div class='col-md-6 col-lg-4'>
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
    <!-- chổ này để hút file js cho từng file php -->
    <script src='./js/timkiemcoban.js'></script>