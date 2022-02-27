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
		add_action('wp_enqueue_scripts', wp_enqueue_style('common-style', get_template_directory_uri() . '/css/common.css', array('habakiri'), '2.0.2'));
		add_action('wp_enqueue_scripts', wp_enqueue_style('sp_common-style', get_template_directory_uri() .'/css/sp_common.css', array(), '2.0.2'));
		add_action('wp_enqueue_scripts', wp_enqueue_style('header-style', get_template_directory_uri() . '/css/header.css', array(), '2.0'));
		add_action('wp_enqueue_scripts', wp_enqueue_style('sp_header-style', get_template_directory_uri() . '/css/sp_header.css', array(), '1.0.9'));
		add_action('wp_enqueue_scripts', wp_enqueue_style('sidebar-style', get_template_directory_uri() . '/css/sidebar.css', array(), '2.0'));
		add_action('wp_enqueue_scripts', wp_enqueue_style('sp_sidebar-style', get_template_directory_uri() . '/css/sp_sidebar.css'));
	?>
	<?php
		function header_scripts() {
			wp_enqueue_script( 'header_sns-script', get_template_directory_uri() . '/js/header_sns.js', array('jquery'));
		}
		add_action( 'wp_enqueue_scripts', 'header_scripts' );
	?>
	<?php $theme_url = get_theme_file_uri(); ?>
	<link href="<?php echo $theme_url; ?>/assets/fontawesome/css/all.css" rel="stylesheet">
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
	<?php get_template_part( 'modules/fixed_header' ); ?>
	<div id="contents">
		<?php do_action( 'habakiri_before_contents_content' ); ?>
