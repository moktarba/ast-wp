<?php get_header(); ?> <!-- appel du header -->
<section id="bop" class="row">
	<div class="col-md-8 posts">
		<section class="post single">
	<?php if (have_posts()): while (have_posts()): the_post(); ?>		
			
			<!--<div class="thumbnail"> -->
			<div class=" img-rounded">
			<?php
				if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
				  the_post_thumbnail(array(300,200));
				}
			?>
			</div>
			<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
	<p>	
	<span><small>Publié par : <?php the_author_posts_link(); ?></small> </span>
	<span><small> Le: <?php the_date(); ?></small></span>
	<span><small>Catégorie(s): <?php the_category(); ?></small></span>
	</p>
	<!--<span><small>Mots-clés:<?php the_tags(); ?></small></span>-->
	<?php endwhile; ?>

	<div class="commentaires">
		<h4>Commentaires de l'article:</h4>
		<?php comments_template(); ?>
	</div>
<?php endif; ?>
</section>
</div>
		<aside id="widget" class="col-xs-12 col-md-3" >

          <?php get_sidebar(); ?>

        </aside>

</section>

<?php get_footer(); ?> <!-- appel du footer -->