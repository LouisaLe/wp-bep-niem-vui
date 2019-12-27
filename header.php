<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" charset="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div class="page__wrapper">
		<div class="site-header">
			<div class="top-navbar">
				<div class="top-navbar__border">
					<ul class="common-info">
						<li>About</li>
						<li>Privacy Policy</li>
						<li>Contact</li>
					</ul>
					<ul class="network-block">
						<li>Facebook</li>
						<li>Inst</li>
						<li>Youtube</li>
					</ul>
				</div>
			</div>
			<div class="logo-wrapper">
				<div class="logo">Bếp Niềm Vui</div>
				<div class="slogan">Hãy mang niềm vui vào bếp và nấu ăn bằng cả con tim!</div>
			</div>
			<div class="">
				<?php bnv_menu('primary-menu'); ?>
			</div>
		</div>
		