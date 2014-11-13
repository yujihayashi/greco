<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
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
				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
				get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) {
					comments_template();
				}*/
				endwhile;
				?>
				<div class="row">
					<div class="col-md-3">
						<div class="box-social box-social-facebook">
							<div class="box-header">
								Facebook
							</div> <!-- .box-header -->
							<div class="box-content">
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
									var js, fjs = d.getElementsByTagName(s)[0];
									if (d.getElementById(id)) return;
									js = d.createElement(s); js.id = id;
									js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=607367415995227&version=v2.0";
									fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
								<div class="fb-like-box" data-href="https://www.facebook.com/grecoforma" data-width="240" data-height="250" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
							</div> <!-- .box-content -->
						</div> <!-- .box-social -->
					</div> <!-- .col-md-3 -->
					<div class="col-md-3 col-md-offset-1">
						<div class="box-social box-social-twitter">
							<div class="box-header">
								Twitter
							</div> <!-- .box-header -->
							<div class="box-content">
								<a class="twitter-timeline" href="https://twitter.com/GrecoForma" data-widget-id="532680512431616000">Tweets by @GrecoForma</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div> <!-- .box-content -->
						</div> <!-- .box-social -->
					</div> <!-- .col-md-3 -->
					<div class="col-md-3 col-md-offset-1">
						<div class="box-social box-social-instagram">
							<div class="box-header">
								Instagram
							</div> <!-- .box-header -->
							<div class="box-content">

							</div> <!-- .box-content -->
						</div> <!-- .box-social -->
					</div> <!-- .col-md-3 -->
				</div> <!-- .row -->
			</div> <!-- .container -->
			<div class="page-contato">
				<div class="container-fluid">
					<h2 class="text-center">O QUE VOCÊ DESEJA?</h2>
					<div class="row">
						<div class="col-md-2 col-md-offset-1">
							<a href="#" class="btn btn-primary btn-lg btn-block">Dúvidas</a>
						</div> <!-- .col-md-2 -->
						<div class="col-md-2">
							<a href="#" class="btn btn-primary btn-lg btn-block">Dúvidas</a>
						</div> <!-- .col-md-2 -->
						<div class="col-md-2">
							<a href="#" class="btn btn-primary btn-lg btn-block">Dúvidas</a>
						</div> <!-- .col-md-2 -->
						<div class="col-md-2">
							<a href="#" class="btn btn-primary btn-lg btn-block">Dúvidas</a>
						</div> <!-- .col-md-2 -->
						<div class="col-md-2">
							<a href="#" class="btn btn-primary btn-lg btn-block">Dúvidas</a>
						</div> <!-- .col-md-2 -->
					</div> <!-- .row -->
				</div> <!-- .container-fluid -->
			</div> <!-- .page-contato -->
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->
<script type="text/javascript">
jQuery(document).ready(function () {
	$('body').addClass("page-contatos");
});
</script>
<?php
get_footer();
