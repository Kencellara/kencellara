<?php
add_action('wp_enqueue_scripts', wp_enqueue_style('home-style', get_template_directory_uri() . '/css/home.css', array('habakiri', 'common-style'), '2.0'));
add_action('wp_enqueue_scripts', wp_enqueue_style('sp_home-style', get_template_directory_uri() . '/css/sp_home.css', array(), '2.0'));
add_action('wp_enqueue_scripts', wp_enqueue_style('slick-style', get_template_directory_uri() . '/src/js/slick/slick.css'));
add_action('wp_enqueue_scripts', wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/src/js/slick/slick-theme.css'));
add_action('wp_enqueue_scripts', wp_enqueue_script('slick-script', get_theme_file_uri('/src/js/slick/slick.min.js'), array('jquery')));
add_action('wp_enqueue_scripts', wp_enqueue_script('sp_ad_article-script', get_theme_file_uri('/js/sp_ad_article.js')));
?>
<?php
function toppage_scripts()
{
	wp_enqueue_script('modal-script', get_template_directory_uri() . '/js/modal.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'toppage_scripts');
?>
<?php get_header(); ?>

<div class="sub-page-contents">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<nav class="headerMenuContainer">
						<div class="headerMenu">
							<div id="magazines" class="menuItem">
								<a href="<?= home_url('magazines'); ?>">
									マガジン
								</a>
							</div>
							<div id="top" class="menuItem active">
								<a>
									TOP
								</a>
							</div>
							<div id="collabo_coverage" class="menuItem">
								<a href="<?= home_url('collabo_coverage'); ?>">
									コラボ・取材
								</a>
							</div>
						</div>
					</nav>
					<?php get_template_part('modules/toppage-main'); ?>
				</main>
			</div>
			<div class="col-md-3">
				<?php get_sidebar('simple'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>