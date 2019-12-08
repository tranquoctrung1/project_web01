<?php   
    $tieude = 'Thông Tin Chi Tiết Của Sản Phẩm';
    $class = 'trangthongtin';
    $noidungtrang = 
    "
    <section class='thong-tin-chi-tiet-san-pham mb-4'>
        <div class='hinh-nen-1'></div>
        <div class='hinh-nen-2'></div>
        <div class='container'>
          <div class='row'>
            <div class='col-md-5'>
              <div class='box-img'> <img src='./images/ao.png' alt='' srcset=''></div>
            </div>
            <div class='col-md-7'>
              <h1 class='ten-san-pham'>Áo Khoác Thời Trang</h1>
              <p class='nha-san-xuat'>Nhà Sản Xuất: FJK</p>
              <p class='luot-xem'>100 lượt xem</p>
              <hr>
              <p class='so-luong-ban'>Số lượng bán: 100</p>
              <p class='gia text-danger'>Giá bán: 50,000 <sup>đ</sup></p>
              <div class='them-vao-gio'>
                <input id='soLuong' name='soluong' type='number' value='1'><a href='#'><i class='fas fa-shopping-cart'></i>Thêm giỏ hàng</a>
              </div>
              <hr>
              <div class='mo-ta'>
                <h5>Mô Tả</h5>
                <p>Áo khoác UNISEX với chất liệu vải Kaki jean thô bền bỉ mềm mại. Màu vải được Wash kỹ hạn chế ra màu khi giặt</p>
              </div>
              <hr>
              <div class='xuat-xu'>
                <h6>Xuất xứ: Việt Nam</h6>
              </div>
              <div class='the-loai'>
                <h6>Thể Loại: Áo Khoác</h6>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class='san-pham-lien-quan'>
        <div class='container'>
          <div class='row'>
            <div class='col'>
              <h2> <span>5 Sản Phẩm Liên Quan</span></h2>
            </div>
          </div>
          <div class='row vi-tri'>
            <div class='col'>
              <div class='owl-carousel owl-theme'>
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
        </div>
      </section>
    
    ";
    
    include('./layout/master.php');
?>

<!-- chổ này để hút file js cho từng file php -->
<script src='./js/thongtinchitietsanpham.js'>

</script>



