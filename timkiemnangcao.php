<?php 

    include('./global/global.php');
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
            <form id='formTimKiemNangCao' action='javascript:void(0)' method='GET'>
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
                  <input class='form-control' id='giaBatDau' type='number' placeholder='100' value='1'>
                </div>
                <div class='form-group col-md-3'>
                  <label for='loaiSanPham'>Giá kết thúc</label>
                  <input class='form-control' id='giaKetThuc' type='number' value='1000000' placeholder='100000'>
                </div>
              </div>
              <div class='form-row gui-thong-tin'>
                <button type='submit' id='timKiem'>Tìm Kiếm</button>
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
    <div class='container' id='content'>
      
    </div>
  </section>";

    include('./layout/master.php');

?>


<!-- hút file js cho các file -->
<script src="./js/timkiemnangcao.js"></script>