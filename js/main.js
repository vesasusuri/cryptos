  /* javascript  */
  $(document).ready(function() {


    $('body').on('click', '.burgerBtn', function(e){
      $('body').toggleClass('showMenu');
    });
    $('body').on('click', '.transactionBtn', function(e){
      $(e.currentTarget).parent().children().removeClass('active')
      $(e.currentTarget).addClass('active')
    });
    $('body').on('click', '.submitDepositBtn', function(e){
      $('.acceptDeposit').addClass('showMessage');
      setTimeout(function(){
        $('.acceptDeposit').removeClass('showMessage');
      }, 2000);
        });


      $('body').on('click', '.submitWithdrawBtn', function(e){
        $('.declinedWithdraw').addClass('showMessage');
        setTimeout(function(){
          $('.declinedWithdraw').removeClass('showMessage');
        }, 2000)
      });

      $('body').on('click', '.nextBtn', function(e){
        $('body .page').removeClass('active');
        $('body .loginPage').addClass('active');
      })
      $('body').on('click', '.submitLoginBtn', function(e){
        $('body .page').removeClass('active');
        $('body .homePage').addClass('active');
      })
      $('body').on('click', '.menuItem', function(e){
        
          let goToPage = $(e.currentTarget).attr('page');
          $('body').removeClass('showMenu');

          if( goToPage == 'home'){
            $('body .page').removeClass('active');
            $('body .homePage').addClass('active');
          }

          if( goToPage == 'deposit'){
            $('body .page').removeClass('active');
            $('body .depositPage').addClass('active');
          }
          if( goToPage == 'withdraw'){
            $('body .page').removeClass('active');
            $('body .withdrawPage').addClass('active');
          }
          if( goToPage == 'transaction'){
            $('body .page').removeClass('active');
            $('body .transactionPage').addClass('active');
          }
          if( goToPage == 'login'){
            $('body .page').removeClass('active');
            $('body .loginPage').addClass('active');
          }
          if( goToPage == 'settings'){
            $('body .page').removeClass('active');
            $('body .settingsPage').addClass('active');
          }

      });

});
