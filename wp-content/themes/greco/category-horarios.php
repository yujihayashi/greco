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
				<p class="text-center">Clique em uma das unidades.</p>
			</header><!-- .archive-header -->

		</div> <!-- .container -->
		<div class="container page-horarios">
					<ul class="nav nav-pills nav-stacked row" role="tablist">
						<?php while ( have_posts() ) : the_post();?>
						<li role="presentation" class="col-md-4 col-sm-6 col-xs-12"><a href="#unidade-<?php echo get_the_ID(); ?>" role="tab" data-toggle="tab"><?php the_title(); ?> <span class="icone"><span class="icon-arrow-right-sm"></span></span></a></li>
					<?php endwhile; ?>
				</ul>
				<div class="tab-content">
					<?php while ( have_posts() ) : the_post();?>
					<div role="tabpanel" class="tab-pane fade" id="unidade-<?php echo get_the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>
						<?php the_content(); ?>
					</div> <!-- .tab-pane -->
				<?php endwhile; ?>
			</div> <!-- .tab-content -->
</div> <!-- .container-fluid -->
<?php
					// Previous/next page navigation.
					// twentyfourteen_paging_nav();

else :
					// If no content, include the "No posts found" template.
	get_template_part( 'content', 'none' );

endif;
?>


</div><!-- #content -->
</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_footer();
