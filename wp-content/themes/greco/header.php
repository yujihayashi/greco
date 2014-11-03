<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/images/icon.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/site.css">
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap_site.js"></script>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="extra-header">
			<div class="site-header">
				<div class="line-1 clearfix">
					<div class="container-fluid">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menu-principal">
							<span class="sr-only">Navegação</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<form class="navbar-form navbar-right" role="search">
							<div class="form-group">
								<input type="text" class="form-control input-sm" placeholder="Search">
							</div>
							<button type="submit" class="button"><span class="icon-mag"></span><span class="sr-only">Pesquisar</span></button>
						</form>
						<div class="header-social">
							<a href="#" target="_blank" title="Acesse nosso Facebook"><span class="icon-facebook"></span><span class="sr-only">Facebook</span></a>
							<a href="#" target="_blank" title="Acesse nosso Instagram"><span class="icon-instagram"></span><span class="sr-only">Instagram</span></a>
							<a href="#" target="_blank" title="Acesse nosso Twitter"><span class="icon-twitter"></span><span class="sr-only">Twitter</span></a>
						</div> <!-- .header-social -->
					</div> <!-- .container-fluid -->
				</div> <!-- .line-1 -->
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ir para a página inicial"><img src="<?php echo get_template_directory_uri(); ?>/images/greco-forma.png" alt="Logotipo <?php bloginfo( 'name' ); ?>"></a>
						</div>
						<div class="collapse navbar-collapse menu-principal">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'link_before' => '', 'link_after' => ' <span class="icon-arrow-down icone"></span>', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) ); ?>
						</div><!-- /.navbar-collapse -->
					</div> <!-- .container -->
				</nav>
			</div> <!-- .site-header -->
		</div> <!-- .extra-header -->


		<header id="masthead" class="site-header" role="banner">
			<div class="header-main">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<div class="search-toggle">
					<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
				</div>

				<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav>
			</div>

			<div id="search-container" class="search-box-wrapper hide">
				<div class="search-box">
					<?php get_search_form(); ?>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="main" class="site-main">
