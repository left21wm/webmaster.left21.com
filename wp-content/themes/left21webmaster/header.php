<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?><?=esc_attr(get_bloginfo('name'))?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if IE 7]>
<script src="<?php echo get_template_directory_uri(); ?>/js/icon-font.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="accessibility" href="#content" title="본문으로 바로 가기">본문으로 바로 가기</a>
<div class="wrapper">
	<div class="header">
		<div class="cf">
			<div class="site-name">
				<a href="<?=home_url()?>">레프트21 웹마스터</a>
				<a class="rss-link" href="<?bloginfo('rss_url')?>"><span class="icon-feed"></span></a>
			</div>
			<div class="search-box">
				<form action="<?=home_url()?>">
					<input type="search" name="s" value="<?=isset($_GET['s']) ? $_GET['s'] : ''?>">
					<input class="btn btn--small search-box__submit-btn" type="submit" value="검색">
				</form>
			</div>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' => 'nav nav--fit nav--block nav--banner main-nav' ) ); ?>
	</div>