window.addEventListener('DOMContentLoaded', (event) => {
// làm hiệu ừng slider cho banner

  $('.bang-hieu .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    rtl: true,
    nav: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplaySpeed: 4000,
    autoplayHoverPause: true,
    items: 1,
    nav: false,
    dots: false
  })

  // làm hiệu ừng slider cho sản phẩm mới nhất
  $('.san-pham-moi-nhat .owl-carousel').owlCarousel({
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

  // làm hiệu ừng slider cho sản phẩm bán chạy nhất

  $('.san-pham-chay-nhat .owl-carousel').owlCarousel({
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

})

  function ThemHang(e)
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
    xmlhttp.send("id=" + e.dataset.masanpham +"&num=1");
  }