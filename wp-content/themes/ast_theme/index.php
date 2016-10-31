<?php get_header(); ?>

      <section id="bop" class="row">
        <div class="col-md-8 posts">
          <!-- Un article -->
          <section class="post">
            
           <ul>
                  <?php
                      global $post;
                      $args = array( 'posts_per_page'=>2, 'category' => 1 );
                      $myposts = get_posts( $args );

                      foreach( $myposts as $post ) :  setup_postdata($post); ?>
               <div class="the-post">        
                <div class="thumbop img-rounded">    
                  <?php
                    if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
                      the_post_thumbnail(array(75,75));
                  }
                  ?>
                </div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                          <li><p id="top"><?php the_excerpt(); ?></p></li><br/>
                        <span class="suit"><a href="<?php the_permalink() ?>">Lire la suite</a></span> 
                </div>
                      <?php endforeach; ?>            
                      
              </ul>
       
          </section>
         
        </div>
        

        <aside id="widget" class="col-xs-12 col-md-3" >

          <?php get_sidebar(); ?>

        </aside>
      </section>

<?php get_footer(); ?>