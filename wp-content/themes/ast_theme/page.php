<?php get_header(); ?>

      <section id="bop" class="row">
        <article id="page" class="col-md-8">
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="article">
         <!--     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> -->
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </article>

        <aside id="widget" class="col-xs-12 col-md-3" >
          <?php get_sidebar(); ?>
        </aside>
         
      </section>

<?php get_footer(); ?>     