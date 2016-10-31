
     $(function(){
      $(window).scroll(function(){
        if($(window).scrollTop() > 140){
          // on va repmlacer nav par nav-fixed si scroll vers le bas superieur à 140px
          (".navbar").addClass("nav-fixed");
        }else{
          // On supprime sinon la classe nav-fixed
          (".navbar").removeClass('nav-fixed');
        }
      });

    });

   