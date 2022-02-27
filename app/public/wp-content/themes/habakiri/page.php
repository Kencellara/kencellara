<?php
add_action('wp_enqueue_scripts', wp_enqueue_style('single-style', get_template_directory_uri() . '/css/single.css', array('habakiri', 'common-style'), '2.0.2'));
add_action('wp_enqueue_scripts', wp_enqueue_style('sp_single-style', get_template_directory_uri() . '/css/sp_single.css'));
add_action('wp_enqueue_scripts', wp_enqueue_style('page-style', get_template_directory_uri() .'/css/page.css', array(), '2.0.2'));
add_action('wp_enqueue_scripts', wp_enqueue_style('sp_page-style', get_template_directory_uri() .'/css/sp_page.css', array(), '2.0.2'));
add_action('wp_enqueue_scripts', wp_enqueue_style('slick-style', get_template_directory_uri() . '/src/js/slick/slick.css'));
add_action('wp_enqueue_scripts', wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/src/js/slick/slick-theme.css'));
add_action('wp_enqueue_scripts', wp_enqueue_script('slick-script', get_theme_file_uri('/src/js/slick/slick.min.js'), array('jquery')));
add_action('wp_enqueue_scripts', wp_enqueue_style('collabo_coverage-style', get_template_directory_uri() . '/css/collabo_coverage.css', array(), '2.0.2'));
add_action('wp_enqueue_scripts', wp_enqueue_style('sp_collabo_coverage-style', get_template_directory_uri() . '/css/sp_collabo_coverage.css', array(), '2.0'));
?>
<?php get_header(); ?>

<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">
	<div class="container">
		<div class="row">
			<div class="col-md-9 fixed_page">
				<main id="main" role="main">
					<?php if ($wp_query->query['pagename'] == 'magazines') {
						get_template_part('pages/magazines');
					} elseif ($wp_query->query['pagename'] == 'collabo_coverage') {
						get_template_part('pages/collabo_coverage');
					} else {
						while ( have_posts() ) : the_post();
							get_template_part('content', 'page');
						endwhile;
					}?>
				</main>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
