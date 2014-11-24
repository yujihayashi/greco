<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

</div><!-- #main -->

<div class="extra-footer">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<span class="footer-header">Redes Sociais</span>
					<div class="footer-social">

						<ul>
							<?php $args = array(
								'orderby'          => 'rating',
								'category_name'    => 'social',
								'categorize'       => 0,
								'title_li'         => '',
								'category_orderby' => 'name',
								'category_order'   => 'ASC',
								'class'            => 'linkcat',
								'category_before'  => '<div>',
								'show_name'		=> false,
								'category_after'   => '</div>'); ?> 
								<?php wp_list_bookmarks($args); ?>
							</ul>
						</div> <!-- .footer-social -->
					</div> <!-- .col-md-3 -->
					<div class="col-md-5">
						<span class="footer-header">Parceiros</span>
						<div class="box-parceiros">
							<ul>
								<?php $args = array(
									'orderby'          => 'rating',
									'category_name'    => 'parceiros',
									'categorize'       => 0,
									'title_li'         => '',
									'category_orderby' => 'name',
									'category_order'   => 'ASC',
									'class'            => 'linkcat',
									'category_before'  => '<div>',
									'show_name'		=> false,
									'category_after'   => '</div>'); ?> 
									<?php wp_list_bookmarks($args); ?>
								</ul>
							</div> <!-- .box-parceiros -->
						</div> <!-- .col-md-5 -->
						<div class="col-md-2">
							
							<div class="navbar-left">
								<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('header_left')) : else : endif; ?>  
							</div> <!-- .navbar-left -->
						</div> <!-- .col-md-2 -->
						<div class="col-md-2 text-center">
							<span class="footer-header footer-header-sm">Desenvolvido por:</span>
							<a href="http://www.agencia1to1.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/1to1.png" alt="Logotipo 1to1"></a>
						</div> <!-- .col-md-2 -->
					</div> <!-- .row -->
					<?php get_sidebar( 'footer' ); ?>
				</div> <!-- .container -->

			</footer><!-- #colophon -->
		</div> <!-- .extra-footer -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
	<?php if (is_category('unidades')): ?>

	<script type="text/javascript">
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		for(var i in gmpAllMapsInfo){
			gmapPreview.prepareToDraw(gmpAllMapsInfo[i].id);
		}
	})
	</script>
<?php endif; //if (is_category('unidades')): ?>
	<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>