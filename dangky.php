<!DOCTYPE html>
<html lang="en" class="dangkychinh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat&display=swap' rel='stylesheet'>
    <link rel="stylesheet" href="./css/trangchinh.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <title>Đăng Ký</title>

</head>
<!-- Traang Header -->
<?php
    include('./layout/header.php');

    // include mã kiểm tra
    include('./extension/makiemtra.php');
?>

<body>
    <?php
        $err = 0;
        if(isset($_GET['err']))
        {
            $err = $_GET['err'];
        }

        $error = "";
        if($err == 1)
        {
            $error = "Đăng ký không thành công!";
        }

       
    ?>
    <div class="dangky">
        <form action='./controller/xlDangKy.php' class='dangky-form' method='POST' onsubmit='return KiemtraDangKy()'>
            <h2>Đăng Ký</h2>
            <h6 class="text-danger"><?php echo $error ?></h6>
            <!-- Thông tin cá nhân -->
            <div class="container canhan">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Thông tin cá nhân</h4>
                        <div class="txtb">
                            <input type="text" name="hoten" id="hoten">
                            <span data-placeolder="Họ tên của bạn"></span>
                        </div>

                        <p>Ngày sinh</p>
                        <div class="ngaythangnam">
                            <select name="ngay" id="ddngay" class="ddngay">
                                <option value="ngay">[Ngày]</option>
                            </select>
                            <select name="thang" id="mmthang" class="mmthang">
                                <option value="thang">[Tháng]</option>
                            </select>
                            <select name="nam" id="yyyynam" class="yyyynam">
                                <option value="nam">[Năm]</option>
                            </select>
                        </div>
                        <p>Bạn sống tại <select class="thanhpho" name="thanhpho" id="thanhpho">
                                <option id='chonthanhpho' value="123">--Chọn thành phố--</option>
                            </select></p>
                    </div>
                    <div class="col-md-6">
                        <h4>Thông tin tài khoản</h4>
                        <div class="txtb">
                            <input type="text" name="userdangnhap" id="userdangnhap">
                            <span data-placeolder="Tên đăng nhập"></span>
                        </div>
                        <div class="text-danger" id="err"></div>
                        <div class="txtb">
                            <input type="password" name="passworddangnhap" id="passworddangnhap">
                            <span data-placeolder="Mật khẩu"></span>
                        </div>
                        <div class="txtb">
                            <input type="password" name="kiemtrapassworddangnhap" id="kiemtrapassworddangnhap">
                            <span data-placeolder="Xác nhận mật khẩu"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Mã kiểm tra</h4>
                        <div class="makiemtra">
                            <input type="text" disabled>
                            <span data-placeolder=<?php echo $MaKiemTra[0] ?>></span>
                            <span data-placeolder=<?php echo $MaKiemTra[1] ?>></span>
                            <span data-placeolder=<?php echo $MaKiemTra[2] ?>></span>
                            <span data-placeolder=<?php echo $MaKiemTra[3] ?>></span>
                            <span data-placeolder=<?php echo $MaKiemTra[4] ?>></span>
                            <input type="hidden" id="maKiemTraGui" value="<?php echo $MaKiemTra ?>">
                        </div>
                        <div class="txtb">
                            <input type="text" name="makiemtra" id="makiemtra">
                            <span data-placeolder="Nhập mã kiểm tra"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col kbtn">
                        <!-- submit -->
                        <input type='submit' class='btn' value='Đăng Ký'>
                    </div>
                </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
    <script src="./js/dangky.js"></script>
</body>

</html>