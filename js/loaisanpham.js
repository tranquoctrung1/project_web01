$('#kichHoat').on('click', () =>
{
  $('#kichHoat').toggleClass('kich-hoat');
  $('#kichHoat').siblings('li').toggleClass('kich-hoat');
  $('.loai-san-pham').toggleClass('kich-hoat');
})
