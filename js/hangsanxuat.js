$('#kichHoat').on('click', () =>
{
  $('#kichHoat').toggleClass('kich-hoat');
  $('#kichHoat').siblings('li').toggleClass('kich-hoat');
  $('.hang-san-xuat').toggleClass('kich-hoat');
})
