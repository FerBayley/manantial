<?php
/*
Template Name: ma solidario
*/
?>


<?php get_header(); ?>
<section id="columBar">
		<?php get_sidebar(); ?>
		</section> <!-- End of columBar -->
		
		<section id="contenidoPage">
			<hgroup>
				<h1>M.A. Solidario</h1>
			</hgroup>

			<article>
			<!-- LOOP -->            
			<?php query_posts('category_name=manantial-solidario&showposts=10'); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : ?>
			<?php the_post(); ?>

			<div id="post-<?php the_ID(); ?>">

			<hgroup>
				<h2><?php the_title(); ?></h2>
			</hgroup>

			<section class="verMas">
				<?php the_excerpt('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</section>

			</div>
			<?php endwhile; ?>
			<?php endif; ?>
            <!-- LOOP -->
			</article>

		</section> <!-- End of contenidoPage -->
<?php get_footer(); ?>