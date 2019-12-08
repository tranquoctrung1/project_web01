<?php   
    $tieude = "Giỏ hàng";
    $class = "cart";
    $noidungtrang = "
    <section class='content-main content-main-mobile'>
    <section class='noi-dung-don-hang'>
        <p class='tieu-de-don-hang'>ĐƠN HÀNG</p>
        <table class='table'>
            <thead class='thead-light'>
                <tr>
                <th></th>
                <th></th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a><img class='icon-xoa' src='./images/iconDelete.png'></a></td>
                    <td><a><img class='img-san-pham' src='./images/ao.png'></a></td>
                    <td><span class='ten-san-pham'>Áo khoác</span></td>
                    <td><span class='gia-san-pham'>180,000<sup>đ</sup></span></td>
                    <td>
                        <input class='text-so-luong' type='text' value=1>
                    </td>
                    <td><span class='gia-san-pham'>180,000<sup>đ</sup></span></td>
                </tr>

                <tr>
                    <td><a><img class='icon-xoa' src='./images/iconDelete.png'></a></td>
                    <td><a><img class='img-san-pham' src='./images/ao.png'></a></td>
                    <td><span class='ten-san-pham'>Áo khoác</span></td>
                    <td><span class='gia-san-pham'>180,000<sup>đ</sup></span></td>
                    <td>
                        <input class='text-so-luong' type='text' value=1>
                    </td>
                    <td><span class='gia-san-pham'>180,000<sup>đ</sup></span></td>
                </tr>
            </tbody>
            </table>
        <div class='noi-chua-btn-cap-nhat'>
                <a class='a-btn'><span class='noi-dung'>Cập nhật giỏ hàng</span></a>
        </div>    
    </section>
    <section class='noi-dung-thanh-toan noi-dung-thanh-toan-mobile'>
        <p class='tieu-de-thanh-toan'>THANH TOÁN</p>
        <table class='table'>
            <thead class='thead-light'>
                <tr>
                    <th>Thành tiền</th>
                    <td><span class='gia'>180,000<sup class='gia'>đ</sup></span></td>
                </tr>
                <tr>
                    <th>Phí vận chuyển</th>
                    <td><span class='gia'>30,000<sup class='gia'>đ</sup></span></td>
                </tr>
                <tr>
                    <th>Tổng tiền</th>
                    <td><span class='gia'>210,000<sup class='gia'>đ</sup></span></td>
                </tr>
            </thead>
        </table>
        <div class='noi-chua-btn-thanh-toan'>
            <a class='a-btn'><span class='noi-dung'>Tiến hành thanh toán</span></a>
        </div>
    </section>
</section>
    ";

    include('./layout/master.php');
?>

<!-- chổ này để hút file js cho từng file php -->
 <script src='./js/giohang.js'></script> 