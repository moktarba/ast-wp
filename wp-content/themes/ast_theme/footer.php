<section id="fop" class="row">
        <footer id="footer" class="row">
          <ul class="footer row">
            <li> 
              <ul class="footer-1  col-xs-6 col-md-3">
                 <h4>Newsletter</h4>
                <form>
                  <input type="text" name="prénom"><br>
                  <label for="prenom">prénom</label><br>
                  
                  <input type="text" name="nom"><br>
                  <label for="nom">nom</label><br>

                  <input type="text" name="email"><br>
                  <label for="email">e mail</label><br>
                
                  <input type="submit" value="Je m'abonne">
                </form>
              </ul>
              <ul class="footer-2 col-xs-6 col-md-3">
                <h4>Nous Suivre</h4>
                <li class="social">
                  <img src="http://localhost/ast/wp-content/uploads/2015/06/facebook.png">
                  <span><a target="blank" href="https://fr-fr.facebook.com/pages/Association-des-Sénégalais-de-Tours/259162364135799">facebook</a></span>
                </li>
                <li class="social">
                  <img src="http://localhost/ast/wp-content/uploads/2015/06/googleplus.png">
                  <span><a target="blank" href="https://plus.google.com/+MOUHAMEDMOKTARBa/posts">google+</a></span>
                </li>
                <li class="social">
                  <img src="http://localhost/ast/wp-content/uploads/2015/06/twitter.png">
                  <span><a target="blank" href="https://twitter.com/lequipe">twitter</a></span>
                </li>
              </ul>
              <ul class="footer-3 col-xs-6 col-md-3">
                <h4>Liens Utiles</h4>
                <li><a target="blank" href="http://www.crous-orleans-tours.fr/logements/demande-de-logement-annuel-dse/">Trouver un logement</a></li>
                <li><a target="blank" href="http://www.tours.maville.com/sortir/liste-infos-internautes_-info-actualite-internautes_ail_actu.Htm">Sortir à Tours</a></li>
                <li><a target="blank" href="http://www.indeed.fr/Tours-(37)-Emplois">Travailler à Tours</a></li>
                <li><a target="blank" href="http://www.intercariforef.org/formations/liste-organisme-37.html">Formations à Tours</a></li>
                <li><a target="blank" href="http://www.indre-et-loire.gouv.fr/Demarches-administratives/Etrangers#N20306">Démarches Administratives</a></li>
              </ul>
              <ul class="footer-4 col-xs-6 col-md-3">
                <iframe src="http://www.mapdevelopers.com/build_single_location_map.php?lat=47.38912149999999&lng=0.688892600000031&height=240&width=240&html= La place Jean Jaurès de Tours" scrolling="auto" frameborder="no" height = "240px" width = "240px">désolé, votre navigateur ne supporte pas les iframe</iframe>
              </ul>
            </li>
          </ul>
        </footer>
</section>
      <p id="copyright">Copyright © Tous droits réservés AST. Site créé par Moktarba</p>
    </div>

        <script type="text/javascript">
           $(function(){
            $(window).scroll(function(){
              if($(window).scrollTop() > 140){
                // on va repmlacer nav par nav-fixed si scroll vers le bas superieur à 140px
                ("#nav").addClass("nav-fixed");
              }else{
                // On supprime sinon la classe nav-fixed
                ("#nav").removeClass('nav-fixed');
              }
            });

          });
          
  
        </script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/my_script.js"></script>

         <?php wp_footer(); ?>
  </body>
</html>