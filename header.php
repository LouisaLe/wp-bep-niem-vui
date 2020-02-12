<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" charset="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/joy-fav.ico"/>
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
	<div class="page__wrapper">
		<div class="site-header">
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
							<img src="<?php bloginfo('template_directory'); ?>/img/sb-facebook.png" title="Facebook" alt="Facebook">
						</a></li>
						<li><a href="https://www.pinterest.com/khuvuonniemvui/ ?>" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/img/sb-pinterest.png" title="Pinterest" alt="Pinterest">
						</a></li>
						<li><a href="<?php echo home_url() . '/contact'; ?>" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/img/sb-inst.png" title="Instagram" alt="Instagram">
						</a></li>
					</ul>
				</div>
			</div>
			<div class="logo-wrapper">
				<div class="logo"><a href="<?php echo home_url() ?>">Bếp Niềm Vui</a></div>
				<div class="slogan">Hãy mang niềm vui vào bếp và nấu ăn bằng cả con tim!</div>
			</div>
		</div>
		<div id="pmenu" class="menu-custom__wrapper">
				<div class="mobile-menu__icon">
					<div class="home">
						<div class="icon-home">
							<a href="<?php echo home_url() ?>" title="home"></a>
						</div>
					</div>
					<div class="mobi-search__toggle"></div>
					<div class="menu-ico menu-style"><span></span></div>
				</div>
				<?php bnv_menu('primary-menu'); ?>
			</div>
		