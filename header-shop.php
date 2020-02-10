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
	<div id="shopPage" class="page__wrapper">
		<div class="site-header">
			<div class="logo-wrapper">
				<div class="logo">
					<span>Shop with </span>
					<a href="<?php echo home_url() ?>">Bếp Niềm Vui</a>
				</div>
			</div>
			<!-- <div class="search-header__wrapper">
				<div class="main-search sidebar-content__wrapper">
					<form action="<?php bloginfo('url'); ?>/" method="GET" role="form" id="searchform" class="search-form">
						<input type="text" autocomplete="off" class="form-control search-ajax typewriter" name="s" placeholder="Hôm nay ăn gì?">
						<button type="submit">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-search.png" alt="Search">
						</button>
					</form>
				</div>
				<div id="load-data"></div>
			</div> -->
		</div>
		