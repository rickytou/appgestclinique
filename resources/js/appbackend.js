$(function(){
  /** Pour afficher le sous-menu du profil pour afficher le profil et la deconnexion */
  $('.account-login-username .fa-chevron-down').on('click', function(){
    if($('.account-login-username .fa-chevron-down').hasClass('active')){
      $(this).removeClass('active');
      $('.menu-login').removeClass('active');
    }else{
      $(this).addClass('active');
      $('.menu-login').addClass('active');
    }
  });
  /* FIN */
  /** Pour afficher les sous-menu du tableau de bord */
  $('.menu-list-item .arrow-down').on('click', function(){
    if($(this).hasClass('active')){
      $(this).removeClass('active');
      $(this).next().removeClass('active');
    }
    else{
      $('.menu-list-item-sub-menu').removeClass('active');
    $('.menu-list-item .arrow-down').removeClass('active');
    
       $(this).addClass('active');
       $(this).next().addClass('active');
   }

  });
 
});