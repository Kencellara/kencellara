<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php echo ( is_single() || is_page() ) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<![endif]-->
	<?php
		add_action('wp_enqueue_scripts', wp_enqueue_style('common-style', get_template_directory_uri() . '/css/common.css', array('habakiri'), '1.0.5'));
		add_action('wp_enqueue_scripts', wp_enqueue_style('sp_common-style', get_template_directory_uri() . '/css/sp_common.css'));
		add_action('wp_enqueue_scripts', wp_enqueue_style('header-style', get_template_directory_uri() . '/css/header.css'));
		add_action('wp_enqueue_scripts', wp_enqueue_style('sidebar-style', get_template_directory_uri() . '/css/sidebar.css'), array(), '1.0.5');
		add_action('wp_enqueue_scripts', wp_enqueue_style('sp_sidebar-style', get_template_directory_uri() . '/css/sp_sidebar.css'));
	?>
	<?php
		function header_scripts() {
			wp_enqueue_script( 'header_sns-script', get_template_directory_uri() . '/js/header_sns.js', array('jquery'));
		}
		add_action( 'wp_enqueue_scripts', 'header_scripts' );
	?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'habakiri_before_container' ); ?>
<div id="container" class="page_parent">
	<?php
	$header_classes     = Habakiri::get_header_classses();
	$site_branding_size = Habakiri::get_site_branding_size();
	$gnav_size          = Habakiri::get_gnav_size();
	?>
	<header id="header" class="header <?php echo esc_attr( implode( ' ', $header_classes ) ); ?>">
		<?php do_action( 'habakiri_before_header_content' ); ?>
		<div class="container">
			<div class="row header__content">
				<div class="headerImgContainer col-xs-10 <?php echo esc_attr( $site_branding_size ); ?> header__col">
					<?php get_template_part( 'modules/site-branding' ); ?>
				</div>
			</div>
		</div>
		<?php do_action( 'habakiri_after_header_content' ); ?>
	</header>
	<!-- 固定ヘッダー -->
	<div id="jsFixedSNS" class="miniInfoArea">
		<div class="snsContainer">
			<span class="leadToSns">
				おトク情報GET! <i class="far fa-hand-point-right"></i>
			</span>
			<span class="leadToSnsShort">
				SNS <i class="far fa-hand-point-right"></i>
			</span>
			<a href="https://www.instagram.com/kencellara_food" target="_blank" rel="noopener noreferrer">
				<img class="InstagramIcon" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210201/20210201213002.jpg" alt="instagram" />
			</a>
			<a class="twitter-button" href="https://twitter.com/kencellara_food" target="_blank" rel="noopener noreferrer">
				<i class="fab fa-twitter-square"></i>
			</a>
			<a href="https://lin.ee/kjAkh3g" target="_blank" rel="noopener noreferrer">
				<img class="LINEIcon" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210201/20210201212953.jpg" alt="LINE" />
			</a>
			<a class="facebook-button" href="https://www.facebook.com/kencellarafood" target="_blank" rel="noopener noreferrer">
				<i class="fab fa-facebook-square"></i>
			</a>
		</div>
		<div class="fixedHeaderHomeBtn">
			<a href=<?php echo home_url() ?>><i class="fas fa-home"></i></a>
		</div>
	</div>
	<div id="contents">
		<?php do_action( 'habakiri_before_contents_content' ); ?>
