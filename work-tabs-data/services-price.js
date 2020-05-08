$('.tab-container__content').hide();
$('.tab-container__content:first').show();
$('.tabs li:first').addClass('active');

$('.tabs li').click(function () {
  $('.tabs li').removeClass('active');
  $(this).addClass('active');
  $('.tab-container__content').hide();

  let selectedTab = $(this).find('a').attr('href');
  $(selectedTab).fadeIn();
})