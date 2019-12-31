<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" charset="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico" />
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="top-navbar">
	<div class="top-navbar__border">
		<ul class="common-info">
			<li>
				<a href="<?php echo home_url() . '/about'; ?>" target="_blank">Về Bếp Niềm Vui</a>
			</li>
			<li>
				<a href="<?php echo home_url() . '/policy'; ?>" target="_blank">Chính sách bảo mật</a>
			</li>
			<li>
				<a href="<?php echo home_url() . '/contact'; ?>" target="_blank">Liên hệ</a>
			</li>
		</ul>
		<ul class="network-block">
			<li><a href="<?php echo home_url() . '/contact'; ?>" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-facebook.png" title="Facebook" alt="Facebook">
			</a></li>
			<li><a href="https://www.pinterest.com/khuvuonniemvui/ ?>" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-pinterest.png" title="Pinterest" alt="Pinterest">
			</a></li>
			<li><a href="<?php echo home_url() . '/contact'; ?>" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-instagam.png"title="Instagram"  alt="Instagram">
			</a></li>
		</ul>
	</div>
	</div>
	
	<div class="page__wrapper">
		<div class="site-header">
			
			<div class="logo-wrapper">
				<div class="logo">Bếp Niềm Vui</div>
				<div class="slogan">Hãy mang niềm vui vào bếp và nấu ăn bằng cả con tim!</div>
			</div>
			<div class="">
				<?php bnv_menu('primary-menu'); ?>
			</div>
		</div>
		