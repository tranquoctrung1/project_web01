<?php 

function TaoMaKiemTra($len = 5){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $len; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

    // gán biến MaKiemTra là hàm tạo mã kiểm tra trong makiemtra.php
    $MaKiemTra = TaoMaKiemTra();
?>