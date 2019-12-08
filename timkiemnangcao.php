<?php 
    $tieude = 'Tìm Kiếm Nâng Cao';
    $class = "search-advantage";
    $noidungtrang= "<section class='thanh-tim-kiem-nang-cao mt-2 mb-2'>
    <div class='container'>
      <div class='row'>
        <div class='col'>
          <div class='tim-kiem-nang-cao'>
            <div class='thanh-chua-nang-cao thay-doi' id='thanhChuaNangCao'>
              <div class='thanh-1'></div>
              <div class='thanh-2'></div>
              <div class='thanh-3'></div>
            </div>
          </div>
        </div>
      </div>
      <div class='row xuat-hien'>
        <div class='col'>
          <div class='nhap-tim-kiem-nang-cao'>
            <form id='formTimKiemNangCao' action='/timkiemnangcao.php' method='GET'>
              <div class='form-row'>
                <div class='form-group col-md-6'>
                  <label for='tenSanPham'>Tên sản phẩm</label>
                  <input class='form-control' id='tenSanPham' type='text' placeholder='Nhập tên sản phẩm'>
                </div>
                <div class='form-group col-md-6'>
                  <label for='loaiSanPham'>Loại sản phẩm</label>
                  <input class='form-control' id='loaiSanPham' type='text' placeholder='Nhập loại sản phẩm'>
                </div>
              </div>
              <div class='form-row'>
                <div class='form-group col-md-6'>
                  <label for='nhaSanXuat'>Nhà sản xuất</label>
                  <input class='form-control' id='nhaSanXuat' type='text' placeholder='Nhập nhà sản xuất'>
                </div>
                <div class='form-group col-md-3'>
                  <label for='loaiSanPham'>Giá bắt đầu</label>
                  <input class='form-control' id='loaiSanPham' type='number' placeholder='100'>
                </div>
                <div class='form-group col-md-3'>
                  <label for='loaiSanPham'>Giá kết thúc</label>
                  <input class='form-control' id='loaiSanPham' type='number' placeholder='100000'>
                </div>
              </div>
              <div class='form-row gui-thong-tin'>
                <button type='submit'>Tìm Kiếm</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='san-pham-tim-kiem-nang-cao'>
    <div class='hinh-nen-1'></div>
    <div class='hinh-nen-2'></div>
    <div class='container'>
      <div class='row'>
        <div class='col'>
          <h2> <span>Sản Phẩm </span></h2>
        </div>
      </div>
      <div class='row vi-tri'>
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


<!-- hút file js cho các file -->
<script src="./js/timkiemnangcao.js"></script>