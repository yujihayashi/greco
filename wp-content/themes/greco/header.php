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
	<meta content='Greco Forma, Greco Forma Academia, Academias, Belém' name='keywords'>
	<meta name="author" content="Greco Forma Academia">
	<meta name="robots" content="index,follow">
	<meta name="reply-to" content="agencia1to1@grecoforma.com">
	<meta content="<?php echo get_template_directory_uri(); ?>/images/favicon.png" itemprop="image">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/prettyPhoto/css/prettyPhoto.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/images/icon.css">
	<?php wp_enqueue_script('jQuery', get_template_directory_uri().'/library/jquery-1.9.1.min.js', array('jquery')); ?>
	<?php wp_enqueue_script('bootstrap', get_template_directory_uri().'/library/bootstrap/js/bootstrap.min.js', array('jquery')); ?>
	<?php wp_enqueue_script('easing', get_template_directory_uri().'/library/easing/jquery.easing.1.3.js', array('jquery')); ?>
	<?php wp_enqueue_script('cycle2', get_template_directory_uri().'/library/cycle2/jquery.cycle2.min.js', array('jquery')); ?>
	<?php wp_enqueue_script('cycle2Swipe', get_template_directory_uri().'/library/cycle2/jquery.cycle2.swipe.min.js', array('jquery')); ?>
	<?php wp_enqueue_script('cycle2ScrollVert', get_template_directory_uri().'/library/cycle2/jquery.cycle2.scrollVert.min.js', array('jquery')); ?>
	<?php wp_enqueue_script('cycle2Carousel', get_template_directory_uri().'/library/cycle2/jquery.cycle2.carousel.min.js', array('jquery')); ?>
	<?php wp_enqueue_script('prettyPhoto', get_template_directory_uri().'/library/prettyPhoto/js/jquery.prettyPhoto.js', array('jquery')); ?>
	<?php wp_enqueue_script('bootstrapSite', get_template_directory_uri().'/js/bootstrap_site.js', array('jquery')); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="extra-header">
			<div class="site-header">
				<div class="line-1 clearfix">
					<div class="container-fluid">
						<form class="navbar-form navbar-right" action="<?= get_home_url(); ?>" method="get" role="search">
							<div class="form-group">
								<input type="text" class="form-control input-sm" placeholder="Pesquise" name="s" value="<?php echo get_search_query(); ?>" id="s">
							</div>
							<button type="submit" class="button"><span class="icon-mag"></span><span class="sr-only">Pesquisar</span></button>
						</form>
						<div class="header-social">
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
							</div> <!-- .header-social -->
						</div> <!-- .container-fluid -->
					</div> <!-- .line-1 -->
					<nav class="navbar navbar-default" role="navigation">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menu-principal">
									<span class="sr-only">Navegação</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ir para a página inicial"><img src="<?php echo get_template_directory_uri(); ?>/images/greco-forma.png" alt="Logotipo <?php bloginfo( 'name' ); ?>"></a>
							</div>
							<div class="collapse navbar-collapse menu-principal">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'link_before' => '', 'link_after' => ' <span class="icon-arrow-down icone"></span>', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) ); ?>
							</div><!-- /.navbar-collapse -->
						</div> <!-- .container -->
					</nav>
				</div> <!-- .site-header -->
			</div> <!-- .extra-header -->
			<div id="main" class="site-main">
