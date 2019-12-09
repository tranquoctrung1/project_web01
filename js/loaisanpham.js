// Gọi ajax để lấy sản phẩm theo loại 

function SanPhamTheoLoai()
{
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("content").innerHTML = this.responseText;
            }
        };
        var ulrParams  =  new URLSearchParams(location.search);
        xmlhttp.open("GET", "./component/LoaiSanPham.php?c=" + ulrParams.get('c'), true);
        xmlhttp.send();
}

SanPhamTheoLoai();

$('#kichHoat').on('click', () =>
{
  $('#kichHoat').toggleClass('kich-hoat');
  $('#kichHoat').siblings('li').toggleClass('kich-hoat');
  $('.loai-san-pham').toggleClass('kich-hoat');
})