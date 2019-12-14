<?php   
    include('./global/global.php');
    include_once('./lib/DataProvider.php');

    if(isset($_GET['id']))
    {
      $id = $_GET['id'];
      $sql = "SELECT s.TenSanPham, s.MaSanPham, s.HinhURL, h.TenHangSanXuat, s.SoLuongXem, s.SoLuongBan, s.GiaSanPham, s.MoTa, l.TenLoaiSanPham FROM SanPham s JOIN HangSanXuat h ON s.MaHangSanXuat = h.MaHangSanXuat JOIN LoaiSanPham l ON l.MaLoaiSanPham = s.MaLoaiSanPham WHERE s.BiXoa = 0 AND s.MaSanPham = $id";
      $result  = DataProvider::ExecuteQuery($sql);

      $row = mysqli_fetch_array($result);

      $tenSanPham = $row['TenSanPham'];
      $maSanPham = $row['MaSanPham'];
      $hinhURL = $row['HinhURL'];
      $hangSanXuat = $row['TenHangSanXuat'];
      $soLuotXem = $row['SoLuongXem'];
      $giaBan = $row['GiaSanPham'];
      $soLuongBan = $row['SoLuongBan'];
      $moTa = $row['MoTa'];
      $tenLoaiSanPham = $row['TenLoaiSanPham'];

      include('./component/SanPhamLienQuan.php');
    }
    else
    {
      header('Location: ./trangchu.php');
    }

    $tieude = 'Thông Tin Chi Tiết Của Sản Phẩm';
    $class = 'trangthongtin';
    $noidungtrang = 
    "
    <section class='thong-tin-chi-tiet-san-pham mb-4 mt-3'>
        <div class='hinh-nen-1'></div>
        <div class='hinh-nen-2'></div>
        <div class='container'>
          <div class='row'>
            <div class='col-md-5'>
              <div class='box-img'> <img src='./images/$hinhURL' alt='' srcset=''></div>
            </div>
            <div class='col-md-7'>
              <h1 class='ten-san-pham'>$tenSanPham</h1>
              <p class='nha-san-xuat'>Nhà Sản Xuất: $hangSanXuat</p>
              <p class='luot-xem'>Số lượt xem: $soLuotXem</p>
              <hr>
              <p class='so-luong-ban'>Số lượng bán: $soLuongBan</p>
              <p class='gia text-danger'>Giá bán: $giaBan <sup>đ</sup></p>
              <div class='them-vao-gio'>
                <input type='hidden' value='$maSanPham' id='maSanPham'>
                <input id='soLuong' name='soluong' type='number' value='1'><a id='themGioHang' href='javascript:void(0)'><i class='fas fa-shopping-cart'></i>Thêm giỏ hàng</a>
              </div>
              <hr>
              <div class='mo-ta'>
                <h5>Mô Tả</h5>
                <p>$moTa</p>
              </div>
              <hr>
              <div class='xuat-xu'>
                <h6>Xuất xứ: $hangSanXuat</h6>
              </div>
              <div class='the-loai'>
                <h6>Loại: $tenLoaiSanPham</h6>
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
                $sanPhamLienQuan
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



