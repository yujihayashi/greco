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
		</div> <!-- .container -->
		<div class="tab-content lista-unidades">
			<?php
					// Start the Loop.
			while ( have_posts() ) : the_post();
			?>
			<div role="tabpanel" class="tab-pane fade" id="unidade-<?php echo get_the_ID(); ?>">
				<?php 


				$posttags = get_the_tags();
				if ( ! empty( $posttags ) ) {
					print '<ul class="tags">';
					foreach($posttags as $tag) {
						// print 'key = ' . $tag->slug;
						$url = get_the_icon($args, $term_type = 'post_tag',$id = null, $use_term_id = $tag->term_id);
						print '<li><img src="' . $url . '" /><span class="title"><span>' . $tag->name . '</span></span></li>';
					}
					print '</ul>';
				}
				// print_r($posttags);
				?>


				<div class="container">
					<div class="row">
						<div class="col-md-4 col-xs-offset-2">
							<div class="imagens">
								<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
								<a href="<?php echo $large_image_url[0]; ?>" class="destaque" rel="prettyPhoto[unidade-<?php echo get_the_ID(); ?>]" title="<?php echo the_title_attribute( 'echo=0' ); ?>">
									<?php echo get_the_post_thumbnail( get_the_ID(), 'large' ); ?> 
								</a>
								<?php
								$thumb_ID = get_post_thumbnail_id( $post->ID );
								if ( $images = get_children(array(
									'post_parent' => get_the_ID(),
									'post_type' => 'attachment',
									'post_mime_type' => 'image',
									'exclude' => $thumb_ID,
									))) : ?>
									<ul class="clearfix">
										<?php foreach( $images as $image ) :  ?>
										<?php 
										$attachment_id = $image->ID; // attachment ID

										$image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array
										?>
										<li><a href="<?php echo $image_attributes[0]; ?>" rel="prettyPhoto[unidade-<?php echo get_the_ID(); ?>]"><?php echo wp_get_attachment_image($image->ID, 'thumbnail-latest'); ?></a></li>

									<?php endforeach; ?>
								</ul>

							<?php else: // No images ?>
							<!-- This post has no attached images -->
						<?php endif; ?>
					</div> <!-- .imagens -->
				</div>
				<div class="col-md-6">
					<h2 class="media-heading"><?php the_title(); ?></h2>
					<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>
					<?php the_content(); ?>
				</div> <!-- .col-md-6 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .tab-pane -->
	<?php
	endwhile;
	?>
</div> <!-- .lista-unidades -->


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

	$('.tags > li').hover(function () {
		$(this).find('.title').stop(true, true).delay(100).show({duration: 400, queue: true, easing: 'easeInOutExpo'});
	}, function () {
		$(this).find('.title').stop(true, true).delay(100).hide({duration: 400, queue: true, easing: 'easeInOutExpo'});
	});
});
</script>
<?php
get_sidebar( 'content' );
get_footer();
