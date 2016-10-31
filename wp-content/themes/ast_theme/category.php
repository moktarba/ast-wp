<?php get_header(); ?>

      <section id="bop" class="row">
        <div class="col-md-8 posts">
          <!-- Un article -->
          <section class="post">
            
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="the-post">
              <div class="thumbop img-rounded"> 
              <?php 
                if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
                  the_post_thumbnail(array(200,200));
                }
               ?>
             </div>
              
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                          <li><p id="top"><?php the_excerpt(); ?></p></li><br/>
                        <span>La Catégorie: <?php the_category(' &spades; '); ?></span>
                         <span>  - <?php the_date(); ?> - <?php the_author(); ?></span>
                        <span class="suit"><a href="<?php the_permalink() ?>">Lire la suite</a></span> 
            </div>

           
           <?php endwhile; ?>
            <?php endif; ?>

       
          </section>
         
        </div>
        

        <aside id="widget" class="col-xs-12 col-md-3" >

          <?php get_sidebar(); ?>

        </aside>
      </section>

<?php get_footer(); ?>