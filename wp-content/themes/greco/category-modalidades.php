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
			<?
			global $post;
			$args = array( 'numberposts' => -1, 'category_name' => 'modalidades' );
			$posts = get_posts( $args );
			

			?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
				$term_description = term_description();
				if ( ! empty( $term_description ) ) :
					printf( '<div class="taxonomy-description">%s</div>', $term_description );
				endif;
				?>
			</header><!-- .archive-header -->
			<div class="page-modalidades">
				<ul class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="5000" data-cycle-speed="1800" data-cycle-slides="> li" data-cycle-next=".page-modalidades .cycle-next" data-cycle-prev=".page-modalidades .cycle-prev" data-cycle-easing="easeInOutExpo" data-cycle-log="false">
					<?php foreach( $posts as $post ): setup_postdata($post);  ?>

					<li>
						<div class="cycle-content">
							<div class="imagem"><?php the_post_thumbnail(); ?></div> <!-- .imagem -->
							<div class="conteudo">
								<h2 class="title"><?php the_title(); ?></h2>
								<div class="desc">
									<?php the_excerpt(); ?>
								</div> <!-- .desc -->
								<a href="<?php the_permalink(); ?>" class="plus">Saiba mais >></a>
							</div> <!-- .conteudo -->
						</div> <!-- .cycle-content -->
					</li>
					<?php
					endforeach; 
					?>			</ul>
					<a href="javascript:void(0);" class="cycle-prev"><span class="icon-arrow-left"></span></a>
					<a href="javascript:void(0);" class="cycle-next"><span class="icon-arrow-right"></span></a>
				</div> <!-- .page-modalidades -->
				<?php
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
				?>

			</div> <!-- .container -->
		</div><!-- #content -->
	</section><!-- #primary -->

	<?php
	get_sidebar( 'content' );
	get_footer();
