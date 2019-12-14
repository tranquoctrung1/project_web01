window.addEventListener('DOMContentLoaded', (event) => {
  $('.san-pham-lien-quan .owl-carousel').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplaySpeed: 4000,
    autoplayHoverPause: true,
    responsive:{
      0:{
          items:1,
          nav: false
      },
      425:{
          items:2,
          nav: false
      },
      769:{
          items:3,
          dots: false
      },
      1025:{
          items:4,
          dots: false
      },
    },
  })

});

  // gọi ajax để đặt hàng với số lượng nhiều
  var soLuong = document.getElementById('soLuong');
  var themGioHang = document.getElementById('themGioHang');
  var maSanPham  = document.getElementById('maSanPham');

  themGioHang.addEventListener('click', () =>
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText)
          if(this.responseText == 0)
          {
            location.href = './dangnhap.php';
          }
          else
          {
            document.getElementById('coSanPham').classList.add('kich-hoat');
          }
        }
    }
    xmlhttp.open("POST", "./controller/GioHang/xlThemVaoGioHang.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id="+maSanPham.value+"&num="+soLuong.value);
  })


  function ThemHang(e)
    {
      var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  if(this.responseText == 0)
                  {
                    location.href = './dangnhap.php';
                  }
                  else
                  {
                    document.getElementById('coSanPham').classList.add('kich-hoat');
                  }
                }
            }
            xmlhttp.open("POST", "./controller/GioHang/xlThemVaoGioHang.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id=" + e.dataset.masanpham + "&num=1");
    }


