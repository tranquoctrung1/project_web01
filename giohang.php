<?php   

    include('./global/global.php');
    include('./component/DanhSachChiTietDonDatHang.php');

    if(!isset($_SESSION['MaLoaiTaiKhoan']))
    {
        header('Location: ./');
    }

    $tieude = "Giỏ hàng";
    $class = "cart";
    $noidungtrang = "
    <section class='content-main content-main-mobile'>
    <section class='noi-dung-don-hang'>
        <p class='tieu-de-don-hang'>ĐƠN HÀNG</p>
        <table class='table'>
            <thead class='thead-light'>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                $bangGioHang
            </tbody>
            </table>
    </section>
    <section class='noi-dung-thanh-toan noi-dung-thanh-toan-mobile'>
        <p class='tieu-de-thanh-toan'>THANH TOÁN</p>
        <table class='table'>
            <thead class='thead-light'>
                <tr>
                    <th>Thành tiền</th>
                    <td><span class='gia' id='tongThanhTien'>$tongThanhTien<sup class='gia'>đ</sup></span></td>
                    <input type='hidden' value='$tongThanhTien' id='hdTongThanhTien'>
                </tr>
                <tr>
                    <th>Phí vận chuyển</th>
                    <td><span class='gia'>30000<sup class='gia'>đ</sup></span></td>
                </tr>
                <tr>
                    <th>Tổng tiền</th>
                    <td><span class='gia' id='tongTien'>$tongTien<sup class='gia'>đ</sup></span></td>
                    <input type='hidden' value='$tongTien' id='hdtongTien'>
                </tr>
            </thead>
        </table>
        <div class='noi-chua-btn-thanh-toan'>
            <a class='a-btn' id='tienHanhThanhToan'><span class='noi-dung'>Tiến hành thanh toán</span></a>
        </div>
    </section>
</section>
    ";

    include('./layout/master.php');
?>

<!-- chổ này để hút file js cho từng file php -->
 <script src='./js/giohang.js'></script> 