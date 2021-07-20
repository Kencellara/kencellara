<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('home-style', get_template_directory_uri() . '/css/home.css', array('habakiri', 'common-style')));
	add_action('wp_enqueue_scripts', wp_enqueue_style('sp_home-style', get_template_directory_uri() . '/css/sp_home.css'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('slick-style', get_template_directory_uri() . '/src/js/slick/slick.css'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/src/js/slick/slick-theme.css'));
	add_action('wp_enqueue_scripts', wp_enqueue_script('slick-script', get_theme_file_uri('/src/js/slick/slick.min.js'), array('jquery')));
	add_action('wp_enqueue_scripts', wp_enqueue_style('new_posts-style', get_template_directory_uri() . '/css/new_posts.css',));
	add_action('wp_enqueue_scripts', wp_enqueue_style('sp_new_posts-style', get_template_directory_uri() . '/css/sp_new_posts.css',));
	function toppage_scripts() {
		wp_enqueue_script( 'modal-script', get_template_directory_uri() . '/js/modal.js', array('jquery'));
	}
	add_action( 'wp_enqueue_scripts', 'toppage_scripts' );
?>
<?php get_header(); ?>

<div class="sub-page-contents">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<section class="typeA">
						<input id="TAB-A01" type="radio" name="TAB-A">
						<label class="tabLabel" for="TAB-A01">最新記事</label>
						<div class="content">
							<?php get_template_part( 'modules/new-posts' ); ?>
						</div>
						<input id="TAB-A02" type="radio" name="TAB-A" checked="checked">
						<label class="tabLabel" for="TAB-A02">トップ</label>
						<div class="content">
							<?php get_template_part( 'modules/toppage-main' ); ?>
						</div>
						<input id="TAB-A03" type="radio" name="TAB-A">
						<label class="tabLabel" for="TAB-A03">コラボ・取材</label>
						<div class="content kence_work">
							<?php get_template_part( 'modules/kence_work' ); ?>
						</div>
					</section>
				</main>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
