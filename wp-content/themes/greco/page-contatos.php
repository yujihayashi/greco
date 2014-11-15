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
				?>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>
				<div class="row">
					<div class="col-md-4">
						<?php the_content(); ?>
						
					</div> <!-- .col-md-3 -->
					<div class="col-md-3 col-md-offset-1">
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
								<div class="fb-like-box" data-href="https://www.facebook.com/grecoforma" data-width="220" data-height="250" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
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
				</div> <!-- .row -->
				<?php
				endwhile;
				?>
			</div> <!-- .container -->
			<? /*
			<div class="page-contato">
				<div class="container-fluid">
					<h2 class="text-center media-heading">O QUE VOCÊ DESEJA?</h2>
					<div class="row">
						<div class="col-md-2 col-md-offset-1">
							<a href="#ninja-forms-modal-2" rel="nf-modal:open" class="nf-modal-link btn btn-primary btn-lg btn-block pwebcontact1_toggler">Dúvidas</a>
						</div> <!-- .col-md-2 -->
						<div class="col-md-2">
							<a href="#ninja-forms-modal-3" rel="nf-modal:open" class="nf-modal-link btn btn-primary btn-lg btn-block">Parceria</a>
						</div> <!-- .col-md-2 -->
						<div class="col-md-2">
							<a href="#ninja-forms-modal-4" rel="nf-modal:open" class="nf-modal-link btn btn-primary btn-lg btn-block">Marketing</a>
						</div> <!-- .col-md-2 -->
						<div class="col-md-2">
							<a href="#ninja-forms-modal-5" rel="nf-modal:open" class="nf-modal-link btn btn-primary btn-lg btn-block">Reclamações</a>
						</div> <!-- .col-md-2 -->
						<div class="col-md-2">
							<a href="#ninja-forms-modal-6" rel="nf-modal:open" class="nf-modal-link btn btn-primary btn-lg btn-block">Fazer parte da equipe</a>
						</div> <!-- .col-md-2 -->
					</div> <!-- .row -->
				</div> <!-- .container-fluid -->
			</div> <!-- .page-contato -->
			*/ ?>
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
