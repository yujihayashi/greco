<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="container">
			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
				$term_description = term_description();
				if ( ! empty( $term_description ) ) :
					printf( '<div class="taxonomy-description">%s</div>', $term_description );
				endif;
				?>
			</header><!-- .archive-header -->

			<?php
					// Start the Loop.
			while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next page navigation.

					else :
					// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
					?>
					<div class="page-modalidades">
						<ul class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="5000" data-cycle-speed="1800" data-cycle-slides="> li" data-cycle-next=".page-modalidades .cycle-next" data-cycle-prev=".page-modalidades .cycle-prev" data-cycle-easing="easeInOutExpo" data-cycle-log="false">
							<li>
								<div class="cycle-content">
									<div class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/boxe.jpg" alt=""></div> <!-- .imagem -->
									<div class="conteudo">
										<h2 class="title">Boxe</h2>
										<p class="desc">
											Uma aula estimulante e nada monótona, assim é a aula de boxe recreativo, que trabalha músculos superiores e inferiores simultaneamente. Em uma aula se pode perder de 600 a 800kcal.
										</p>
										<a href="#" class="plus">Saiba mais >></a>
									</div> <!-- .conteudo -->
								</div> <!-- .cycle-content -->
							</li>
							<li>
								<div class="cycle-content">
									<div class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/boxe.jpg" alt=""></div> <!-- .imagem -->
									<div class="conteudo">
										<h2 class="title">Boxe</h2>
										<p class="desc">
											Uma aula estimulante e nada monótona, assim é a aula de boxe recreativo, que trabalha músculos superiores e inferiores simultaneamente. Em uma aula se pode perder de 600 a 800kcal.
										</p>
										<a href="#" class="plus">Saiba mais >></a>
									</div> <!-- .conteudo -->
								</div> <!-- .cycle-content -->
							</li>
							<li>
								<div class="cycle-content">
									<div class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/boxe.jpg" alt=""></div> <!-- .imagem -->
									<div class="conteudo">
										<h2 class="title">Boxe</h2>
										<p class="desc">
											Uma aula estimulante e nada monótona, assim é a aula de boxe recreativo, que trabalha músculos superiores e inferiores simultaneamente. Em uma aula se pode perder de 600 a 800kcal.
										</p>
										<a href="#" class="plus">Saiba mais >></a>
									</div> <!-- .conteudo -->
								</div> <!-- .cycle-content -->
							</li>
							<li>
								<div class="cycle-content">
									<div class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/boxe.jpg" alt=""></div> <!-- .imagem -->
									<div class="conteudo">
										<h2 class="title">Boxe</h2>
										<p class="desc">
											Uma aula estimulante e nada monótona, assim é a aula de boxe recreativo, que trabalha músculos superiores e inferiores simultaneamente. Em uma aula se pode perder de 600 a 800kcal.
										</p>
										<a href="#" class="plus">Saiba mais >></a>
									</div> <!-- .conteudo -->
								</div> <!-- .cycle-content -->
							</li>
							<li>
								<div class="cycle-content">
									<div class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/boxe.jpg" alt=""></div> <!-- .imagem -->
									<div class="conteudo">
										<h2 class="title">Boxe</h2>
										<p class="desc">
											Uma aula estimulante e nada monótona, assim é a aula de boxe recreativo, que trabalha músculos superiores e inferiores simultaneamente. Em uma aula se pode perder de 600 a 800kcal.
										</p>
										<a href="#" class="plus">Saiba mais >></a>
									</div> <!-- .conteudo -->
								</div> <!-- .cycle-content -->
							</li>
							<li>
								<div class="cycle-content">
									<div class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/boxe.jpg" alt=""></div> <!-- .imagem -->
									<div class="conteudo">
										<h2 class="title">Boxe</h2>
										<p class="desc">
											Uma aula estimulante e nada monótona, assim é a aula de boxe recreativo, que trabalha músculos superiores e inferiores simultaneamente. Em uma aula se pode perder de 600 a 800kcal.
										</p>
										<a href="#" class="plus">Saiba mais >></a>
									</div> <!-- .conteudo -->
								</div> <!-- .cycle-content -->
							</li>
						</ul>
						<a href="javascript:void(0);" class="cycle-prev"><span class="icon-arrow-left"></span></a>
						<a href="javascript:void(0);" class="cycle-next"><span class="icon-arrow-right"></span></a>
					</div> <!-- .page-modalidades -->
				</div> <!-- .container -->
			</div><!-- #content -->
		</section><!-- #primary -->

		<?php
		get_sidebar( 'content' );
		get_footer();
