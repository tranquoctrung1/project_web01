


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='./css/trangchinh.css'>
    
</head>
<body class="dangnhapboby">
<?php
    include('./layout/header.php');

    $err = 0;
    if(isset($_GET['err']))
    {
        $err = $_GET['err'];
    }

    $error = "";
    if($err == 1)
    {
        $error = "Đăng nhập thất bại";
    }
?>
    <div class="dangnhap">
        <form action='./controller/xlDangNhap.php' class='dangnhap-form' method='POST' id='dangnhap-form' name='dangnhap-form' onsubmit='return KiemTra()'> 
            <h2>Đăng Nhập</h2>
            <h6 class="text-danger .mb-0"><?php echo $error ?></h6>
            <!-- username -->
            <div class='txtbox'>
                <input type='text' name='username' id='username'>
                <span data-placeolder='Username'></span>
            </div>
            <!-- password -->
            <div class='txtbox'>
                <input type='password' name='password' id='password'>
                <span data-placeolder='Password' ></span>
            </div>
            <!-- submit -->
            <input type='submit' class='dnbtn' value='Đăng Nhập'>
            <!-- dang ky -->
            <div class='bottom-text'>
                Bạn không có tài khoản ?<a href='./dangky.php' class="ml-2">Đăng Ký</a>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   
    <script src='./js/dangnhap.js'></script>
</body>
</html>

