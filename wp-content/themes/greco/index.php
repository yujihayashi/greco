<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

	<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="bg">
				<div class="container">
					<div class="box-banner">
						<ul class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="5000" data-cycle-speed="1800" data-cycle-slides="> li" data-cycle-pager=".box-banner .cycle-nav" data-cycle-easing="easeInOutExpo" data-cycle-log="false">
							<?php $args = array(
								'orderby'          => 'rating',
								'category_name'    => 'banner',
								'categorize'       => 0,
								'title_li'         => '',
								'category_orderby' => 'name',
								'category_order'   => 'ASC',
								'class'            => 'linkcat',
								'category_before'  => '<div>',
								'show_name'		=> false,
								'category_after'   => '</div>' ); ?> 
								<?php wp_list_bookmarks($args); ?>
							</ul>
							<div class="cycle-nav"></div>
						</div> <!-- .box-banner -->
						<div class="row box-chamadas">
							<div class="col-md-3 col-md-offset-2">
								<div class="media">
									<span class="pull-left"><span class="icon-hora"></span></span>
									<div class="media-body">
										<h2 class="media-heading">Veja nossos<br> horários</h2>
										<a href="/pagina/horarios/">Saiba mais >></a>
									</div> <!-- .media-body -->
								</div> <!-- .media -->
							</div> <!-- .col-md-3 -->
							<div class="col-md-3">
								<div class="media">
									<span class="pull-left"><span class="icon-musculacao"></span></span>
									<div class="media-body">
										<h2 class="media-heading">Nossas modalidades</h2>
										<a href="/pagina/modalidades">Saiba mais >></a>
									</div> <!-- .media-body -->
								</div> <!-- .media -->
							</div> <!-- .col-md-3 -->
							<div class="col-md-2">
								<div class="media">
									<span class="pull-left"><span class="icon-marker"></span></span>
									<div class="media-body">
										<h2 class="media-heading">Onde<br> fica?</h2>
										<a href="/pagina/unidades/">Saiba mais >></a>
									</div> <!-- .media-body -->
								</div> <!-- .media -->
							</div> <!-- .col-md-2 -->
						</div> <!-- .row.box-chamadas -->
					</div> <!-- .container -->
				</div> <!-- .bg -->
				<div class="box-modalidades">
					<div class="container">
						<h2 class="sr-only">Modalidades</h2>
						<div class="box-cycle">
							<ul class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-timeout="5000" data-cycle-speed="1800" data-cycle-slides="> li" data-cycle-next=".box-modalidades .cycle-next" data-cycle-prev=".box-modalidades .cycle-prev" data-cycle-easing="easeInOutExpo" data-cycle-log="false">
								<?
								global $post;
								$args = array( 'numberposts' => 0, 'category_name' => 'modalidades' );
								$posts = get_posts( $args );
								foreach( $posts as $post ): setup_postdata($post); 

								?>
								<li>
									<div class="media clearfix">
										<span class="pull-left imagem"><?php the_post_thumbnail(); ?></span>
										<div class="media-body">
											<h3 class="media-heading"><?php the_title(); ?></h3>
											<?php echo substr(get_the_excerpt(),0,120); ?> [...]
										</div>
									</div> <!-- .media -->
									<a href="<?php the_permalink(); ?>" class="plus">Saiba mais >></a>
								</li>
								<?php
								endforeach; 
								?>
							</ul>
							<a href="javascript:void(0);" class="cycle-prev"><span class="icon-arrow-left"></span></a>
							<a href="javascript:void(0);" class="cycle-next"><span class="icon-arrow-right"></span></a>
						</div> <!-- .box-cycle -->
					</div> <!-- .container -->
				</div> <!-- .box-modalidades -->
			</div><!-- #content -->
		</div><!-- #primary -->
		<?php get_sidebar( 'content' ); ?>
	</div><!-- #main-content -->

	<?php
	get_footer();
