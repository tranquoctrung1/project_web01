<?php   
    $tieude = 'Tìm Kiếm Cơ Bản';
    $class ="search-basic";
    $noidungtrang = "<section class='thanh-tim-kiem mt-3 mb-4'>
    <div class='container'>
      <div class='row'>
        <div class='col'>
          <div class='tim-kiem kich-hoat'>
            <div class='thanh-chua thay-doi' id='thanhChua'>
              <div class='thanh-1'></div>
              <div class='thanh-2'></div>
              <div class='thanh-3'></div>
            </div>
            <div class='nhap-tim-kiem'>
              <form id='formTimKiem' action='javascript:void(0)' method='GET'>
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
          <div class='row vi-tri' id='content'>
          </div>
        </div>
      </section>";

      include('./layout/master.php');

      ?>
    <!-- chổ này để hút file js cho từng file php -->
    <script src='./js/timkiemcoban.js'></script>