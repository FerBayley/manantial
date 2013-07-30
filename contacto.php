<?php
/*
Template Name: Contacto
*/
?>


<?php get_header(); ?>
<section id="columBar">
		<?php get_sidebar(); ?>
		</section> <!-- End of columBar -->
		
		<section id="contenidoPage">
			<hgroup>
				<h1>Contacto</h1>
			</hgroup>
			<!-- LOOP -->
          	
          	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="item entry" id="post-<?php the_ID(); ?>">
			<div class="itemhead">

				<hgroup>
					<h2><?php the_title(); ?></h2>
				</hgroup>

			</div>
			<div class="storycontent">

			<?php the_content(); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
			</div>

			<?php endwhile; ?>
			<?php endif; ?>
			<!-- LOOP -->
			</article>
		</section> <!-- End of contenidoPage -->
<?php get_footer(); ?>