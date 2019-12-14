
var soLuong;
// Thay đồi số lượng
function ThayDoiSoLuong(value)
{
    soLuong = value;
}


// gọi ajax để tiến hành sửa số lượng của sản phẩm
function SuaSoLuong(e)
{
    if(soLuong == undefined)
    {
        window.alert('Chưa thay đối số lượng!');
    }
    else if(soLuong < 0)
    {
        window.alert('Số lượng không được âm!');
    }
    else 
    {
        var hdtongThanhTien = document.getElementById('hdTongThanhTien');
        var soTienConLai = parseInt(hdtongThanhTien.value) - (e.dataset.soluongcu * e.dataset.giasanpham);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
              if(this.responseText != -1)
              {
                  var giaSanPham = document.getElementById('giaSanPham-'+e.dataset.masanpham);              
                  var tongThanhTien = document.getElementById('tongThanhTien');
                  var tongTien = document.getElementById('tongTien');
                  var soLuongNutXoa = document.querySelector('#sanPham-'+e.dataset.masanpham + " .btn-danger");
                  var hdtongTien = document.getElementById('hdtongTien');

                  giaSanPham.innerHTML = parseInt(this.responseText) * e.dataset.giasanpham + "<sup>đ</sup>";
                  window.alert('Cập nhật số lượng thành công!');

                  e.dataset.soluongcu = this.responseText;
                  soLuongNutXoa.dataset.soluongcu = this.responseText;

                  tongThanhTien.innerHTML = parseInt(this.responseText) * e.dataset.giasanpham + soTienConLai + "<sup class='gia'>đ</sup>";

                  hdtongThanhTien.value = parseInt(this.responseText) * e.dataset.giasanpham + soTienConLai;
           
                  tongTien.innerHTML = parseInt(this.responseText) * e.dataset.giasanpham + soTienConLai + 30000 + "<sup class='gia'>đ</sup>";

                  hdtongTien.value = parseInt(this.responseText) * e.dataset.giasanpham + soTienConLai + 30000;
              }
              else
              {
                window.alert('Cập nhật số lượng thất bại!');
              }
            }
        }
        xmlhttp.open("POST", "./controller/GioHang/CapNhatSoLuongSanPham.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("s=" + soLuong + "&id=" + e.dataset.masanpham);
    }
}

// gọi ajax để tiến hành xóa sản phẩm
function XoaSanPham(e)
{
    var hdtongThanhTien = document.getElementById('hdTongThanhTien');
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            if(this.responseText >= 1)
            {
                var sanPhamXoa = document.getElementById('sanPham-'+ e.dataset.masanpham);
                var tongTien = document.getElementById('tongTien');
                var tongThanhTien = document.getElementById('tongThanhTien');
                var hdtongTien = document.getElementById('hdtongTien');

                if(this.responseText == 2)
                {
                    document.getElementById('coSanPham').classList.remove('kich-hoat');
                }

                sanPhamXoa.style.display= "none";

                tongThanhTien.innerHTML = parseInt(hdtongThanhTien.value) - (e.dataset.giasanpham * e.dataset.soluongcu) + "<sup class='gia'>đ</sup>";
                console.log(tongThanhTien.innerHTML);

                hdtongThanhTien.value = parseInt(hdtongThanhTien.value) - (e.dataset.giasanpham * e.dataset.soluongcu)

                if(hdtongThanhTien.value == 0)
                {
                    tongTien.innerHTML = 0 + "<sup class='gia'>đ</sup>";
                    hdtongTien.value = 0;
                }
                else
                {
                    tongTien.innerHTML = parseInt(hdtongThanhTien.value) + 30000 + "<sup class='gia'>đ</sup>";
                    hdtongTien.value = parseInt(hdtongThanhTien.value) + 30000;
                }
            }
        }
    }
    xmlhttp.open("POST", "./controller/GioHang/XoaSanPham.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id=" + e.dataset.masanpham);
}

// gọi ajax tiến hành thanh toán đơn đặt hàng

var tienHanhThanhToan = document.getElementById('tienHanhThanhToan');

tienHanhThanhToan.addEventListener('click', (e) =>
{
    var hdtongTien = document.getElementById('hdtongTien');

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == 1)
            {
                alert("Đặt hàng thành công!");
                location.href = './';
            }
            else 
            {
                alert("Đặt hàng thất bại!");
            }
            console.log(this.responseText);
        }
    }
    xmlhttp.open("POST", "./controller/GioHang/xlDatHang.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("cost=" +hdtongTien.value);
})