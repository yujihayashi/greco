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
				<!-- Tab panes -->
				<div role="tabpanel" class="tab-pane fade" id="home">
					<div class="row">
						<div class="col-md-4 col-xs-offset-1">

						</div>
						<div class="col-md-7">
							<?php
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
					?>
				</div> <!-- .col-md-7 -->
			</div> <!-- .row -->
		</div> <!-- .tab-pane -->
		<?php
		endwhile;
					?>
	</div> <!-- .lista-unidades -->
		<?php
					// Previous/next page navigation.

		else :
					// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );

		endif;
		?>


</div> <!-- .container -->
<!-- Nav tabs -->
<div class="box-tabs">
	<div class="container">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">Umarizal</a></li>
			<li role="presentation"><a href="#profile" role="tab" data-toggle="tab">Marco</a></li>
			<li role="presentation"><a href="#messages" role="tab" data-toggle="tab">São Brás</a></li>
			<li role="presentation"><a href="#settings" role="tab" data-toggle="tab">Campina</a></li>
		</ul>
	</div> <!-- .container -->
</div> <!-- .box-tabs -->

</div><!-- #content -->
</section><!-- #primary -->
<script type="text/javascript">
	jQuery(document).ready(function () {
		$()
	});
</script>
<?php
get_sidebar( 'content' );
get_footer();
