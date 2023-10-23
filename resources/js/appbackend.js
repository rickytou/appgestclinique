$(function(){
  $('.fa-chevron-down').on('click', function(){
    if($('.fa-chevron-down').hasClass('active')){
      $(this).removeClass('active');
      $('.menu-login').removeClass('active');
    }else{
      $(this).addClass('active');
      $('.menu-login').addClass('active');
    }
  });
});