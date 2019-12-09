$('#kichHoat').on('click', () =>
{
  $('#kichHoat').toggleClass('kich-hoat');
  $('#kichHoat').siblings('li').toggleClass('kich-hoat');
  $('.hang-san-xuat').toggleClass('kich-hoat');
})

function SanPhamTheoHang()
{
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("content").innerHTML = this.responseText;
            }
        };
        var ulrParams  =  new URLSearchParams(location.search);
        xmlhttp.open("GET", "./component/HangSanXuat.php?p=" + ulrParams.get('p'), true);
        xmlhttp.send();
}

SanPhamTheoHang();
