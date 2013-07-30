<?php get_header(); ?>
<section id="contenidoPrimario">
			<!-- LOOP -->
            <?php query_posts('category_name=ingreso&showposts=1'); ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <section class="verMas">
            <?php the_content('ver más...'); ?>
            </section> <!-- End of verArticulo -->
            <?php endwhile; else:  endif; ?>
            <!-- LOOP -->
		</section> <!-- End of contenidoPrimario -->

		<section id="botones">
			<a href="#">
				<div class="entrar">
					Entrar
				</div> <!-- End of entrar -->
			</a>

			<a href="#">
				<div class="btnEditorial">
					Editorial
				</div> <!-- End of btnEditorial -->
			</a>

			<a href="https://www.facebook.com/manantialarte">
				<div class="btnFacebook">
					Facebook
				</div> <!-- End of btnFacebok -->
			</a>
		</section> <!-- End of botones -->
<?php get_footer(); ?>	