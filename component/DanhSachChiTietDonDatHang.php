<?php 

    include_once('./lib/DataProvider.php');
    include_once('./lib/ShoppingCart.php');

    if(isset($_SESSION['GioHang']) != null)
    {
        $gioHang = unserialize($_SESSION['GioHang']);
    }

    $bangGioHang = "";
    $tongThanhTien = 0;

    for($i = 0;$i < count($gioHang->listProduct); $i++)
    {
        $id = $gioHang->listProduct[$i]->id;
        $num = $gioHang->listProduct[$i]->num;

        $sql = "SELECT TenSanPham, GiaSanPham, HinhURL FROM sanpham WHERE BiXoa = 0 AND MaSanPham = $id";
        $result = DataProvider::ExecuteQuery($sql);

        while($row = mysqli_fetch_array($result))
        {

            $tenSanPham = $row['TenSanPham'];
            $giaSanPham = $row['GiaSanPham'];
            $hinhURL = $row['HinhURL'];
            $thanhTien = $num * $giaSanPham;

            $bangGioHang .= "<tr id='sanPham-$id'>
            <td><a><img class='img-san-pham' src='./images/$hinhURL'></a></td>
            <td><span class='ten-san-pham'>$tenSanPham</span></td>
            <td><span class='gia-san-pham'>$giaSanPham<sup>đ</sup></span></td>
            <td>
            <input class='text-so-luong' type='number' min='1' value=$num onchange='ThayDoiSoLuong(this.value)'>
            </td>
            <td><span class='gia-san-pham' id='giaSanPham-$id'>$thanhTien<sup>đ</sup></span></td>
            <td>
                <button onclick='SuaSoLuong(this)' type='button' class='btn btn-primary' data-maSanPham='$id' data-giaSanPham='$giaSanPham' data-soLuongCu='$num'>Sữa</button>
                <button onclick='XoaSanPham(this)' data-giaSanPham='$giaSanPham' data-soLuongCu='$num' type='button' class='btn btn-danger' data-maSanPham='$id'>Xóa</button>
            </td>
        </tr>
            ";
            $tongThanhTien += $thanhTien;
        }
    }

    $tongTien;

    if($tongThanhTien <= 0)
    {
        $tongTien = 0;
    }
    else 
    {
        $tongTien = $tongThanhTien + 30000;
    }
?>