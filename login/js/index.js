$('.login-form').hide();
$('.loginform-open a').click(function(e){
  e.preventDefault();
  $('.login-form').show().animate({'top':'65px'},300);
});
$('.form-close').click(function(e){
  e.preventDefault();
  $('.login-form').animate({'top':'-100%'},300).hide();
});