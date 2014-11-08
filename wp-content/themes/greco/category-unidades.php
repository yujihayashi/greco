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
		<?php if ( have_posts() ) : ?>
		<div class="container">

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

			<div class="tab-content lista-unidades">
				<?php
					// Start the Loop.
				while ( have_posts() ) : the_post();
				?>
				<div role="tabpanel" class="tab-pane fade" id="unidade-<?php echo get_the_ID(); ?>">

					<div class="row">
						<div class="col-md-4 col-xs-offset-1">

						</div>
						<div class="col-md-7">
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div> <!-- .col-md-7 -->
					</div> <!-- .row -->
				</div> <!-- .tab-pane -->
				<?php
				endwhile;
				?>
			</div> <!-- .lista-unidades -->


		</div> <!-- .container -->
		<!-- Nav tabs -->
		<div class="box-tabs">
			<div class="container">
				<ul class="nav nav-tabs" role="tablist">

					<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
					?>
					<li role="presentation" class=""><a href="#unidade-<?php echo get_the_ID(); ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a></li>

					<?php
					endwhile;
					?>
				</ul>
			</div> <!-- .container -->
		</div> <!-- .box-tabs -->

		<?php
					// Previous/next page navigation.

		else :
					// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );

		endif;
		?>
	</div><!-- #content -->
</section><!-- #primary -->
<script type="text/javascript">
jQuery(document).ready(function () {
	$('.lista-unidades .tab-pane:first-child').addClass('active in');
	$('.box-tabs .nav-tabs li:first-child').addClass('active');
});
</script>
<?php
get_sidebar( 'content' );
get_footer();
