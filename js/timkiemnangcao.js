  var hamburger = document.getElementById('thanhChuaNangCao');
    hamburger.addEventListener('click', () =>
    {
      hamburger.classList.toggle('thay-doi');
      $('.thanh-tim-kiem-nang-cao .xuat-hien').slideToggle(1000);
      console.log($('.thanh-tim-kiem-nang-cao .xuat-hien'))
    })


  // khai báo các biến cho viec tìm kiếm
  var tenSanPham = document.getElementById('tenSanPham');
  var loaiSanPham = document.getElementById('loaiSanPham');
  var nhaSanXuat = document.getElementById('nhaSanXuat');
  var giaBatDau = document.getElementById('giaBatDau');
  var giaKetThuc = document.getElementById('giaKetThuc');
  var timKiem = document.getElementById('timKiem');

  timKiem.addEventListener('click',  TimKiem);

  function TimKiem()
  {
    var getValue = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
            getValue = "";
        }
    };
    if(tenSanPham.value != '')
    {
      getValue += "&ten=" + tenSanPham.value;
    }
    if(loaiSanPham.value != '')
    {
      getValue += "&loai=" + loaiSanPham.value;
    }
    if(nhaSanXuat.value != '')
    {
      getValue += "&nha=" + nhaSanXuat.value;
    }
    if(giaBatDau.value != '')
    {
      getValue += "&gb=" + giaBatDau.value;
    }
    if(giaKetThuc.value != '')
    {
      getValue += "&gk" + giaKetThuc.value;
    }

    xmlhttp.open("GET", "./component/TimKiemNangCao.php?q=''" + getValue, true);
    xmlhttp.send();
  }

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