var thanhChua = document.getElementById('thanhChua');
var timKiem = document.querySelector('.tim-kiem');
var kichHoatTimKiem = document.getElementById('kichHoatTimKiem');
var guiThongTinForm = document.getElementById('formTimKiem');
thanhChua.addEventListener('click', () =>
{
    thanhChua.classList.toggle('thay-doi');
    timKiem.classList.toggle('kich-hoat');
})
kichHoatTimKiem.addEventListener('click', () =>
{
    guiThongTinForm.submit();
})