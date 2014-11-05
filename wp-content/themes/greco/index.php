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
			<div class="container">
				<div class="box-banner">
					<a href="javascript:void(0);" class="cycle-prev" title="Banner anterior"><span class="icon-arrow-left-white"></span></a>
					<a href="javascript:void(0);" class="cycle-next" title="Próximo banner"><span class="icon-arrow-right-white"></span></a>
					<ul class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="5000" data-cycle-speed="1800" data-cycle-slides="> li" data-cycle-pager=".box-banner .cycle-nav" data-cycle-next=".box-banner .cycle-next" data-cycle-prev=".box-banner .cycle-prev" data-cycle-easing="easeInOutExpo" data-cycle-log="false">
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
					</div> <!-- .box-banner -->
				</div> <!-- .container -->

			</div><!-- #content -->
		</div><!-- #primary -->
		<?php get_sidebar( 'content' ); ?>
	</div><!-- #main-content -->

	<?php
	get_footer();
