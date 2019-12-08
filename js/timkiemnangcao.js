var hamburger = document.getElementById('thanhChuaNangCao');
  hamburger.addEventListener('click', () =>
  {
    hamburger.classList.toggle('thay-doi');
    $('.thanh-tim-kiem-nang-cao .xuat-hien').slideToggle(1000);
    console.log($('.thanh-tim-kiem-nang-cao .xuat-hien'))
  })