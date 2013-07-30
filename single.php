<?php get_header(); ?>
<section id="columBar">
		<?php get_sidebar(); ?>
		</section> <!-- End of columBar -->
		
		<section id="contenidoPage">			
			<article>
				<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

				<div class="item entry" id="post-<?php the_ID(); ?>">

					<hgroup>
						<h2><?php the_title(); ?></h2>
					</hgroup>

				<?php the_content('ver mas &raquo;'); ?>
				
				</div>

				<?php endwhile; ?>

				<div class="navigation">
					<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
					<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
					<p> </p>
				</div>

				<?php else : ?>
				<?php endif; ?>
			</article>
		</section> <!-- End of contenidoPage -->
<?php get_footer(); ?>