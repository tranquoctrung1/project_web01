<div class="container index-page">
    <div class="row">
        <div class="col-md-6">
            <div class="card one" id="one">
                <div class="card-content">
                    <div class="content">
                        <div class="amount">2000</div>
                        <div class="text">Quản Lý Sản Phẩm</div>
                    </div>
                    <div class="logo"><i class="fab fa-product-hunt"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card two" id="two">
                <div class="card-content">
                    <div class="content">
                        <div class="amount">2000</div>
                        <div class="text">Quản Lý Loại Sản Phẩm</div>
                    </div>
                    <div class="logo"><i class="fas fa-copyright"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card three" id="three">
                <div class="card-content">
                    <div class="content">
                        <div class="amount">2000</div>
                        <div class="text">Quản Lý Nhà Sản Xuất</div>
                    </div>
                    <div class="logo"><i class="fab fa-bandcamp"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card four" id="four">
                <div class="card-content">
                    <div class="content">
                        <div class="amount">2000</div>
                        <div class="text">Quản Lý Tài Khoản</div>
                    </div>
                    <div class="logo"><i class="fas fa-user-circle"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card five" id="five">
                <div class="card-content">
                    <div class="content">
                        <div class="amount">2000</div>
                        <div class="text">Quản Lý Đơn Đặt Hàng</div>
                    </div>
                    <div class="logo"><i class="fas fa-shopping-cart"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Viết js -->
<script>
    var one = document.getElementById('one');
    var two = document.getElementById('two');
    var three = document.getElementById('three');
    var four = document.getElementById('four');
    var five = document.getElementById('five');

    one.addEventListener('click', () => {
        location.href = "./index.php?c=1&a=1";
    })

    two.addEventListener('click', () => {
        location.href = "./index.php?c=2&a=1";
    })

    three.addEventListener('click', () => {
        location.href = "./index.php?c=3&a=1";
    })

    four.addEventListener('click', () => {
        location.href = "./index.php?c=4&a=1";
    })

    five.addEventListener('click', () => {
        location.href = "./index.php?c=5&a=1";
    })
</script>