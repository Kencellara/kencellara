<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('single-style', get_template_directory_uri() . '/css/single.css', array('habakiri', 'common-style'), '2.0.2'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('sp_single-style', get_template_directory_uri() . '/css/sp_single.css', array(), '1.0.10'));
	add_action('wp_enqueue_scripts', wp_enqueue_script('ad_infeed-script', get_theme_file_uri('/js/ad_infeed.js'), array('jquery')));
	add_action('wp_enqueue_scripts', wp_enqueue_script('modal-script', get_theme_file_uri('/js/modal.js')));
?>
<?php get_header(); ?>


<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">
	<?php get_template_part( 'blog_templates/single/' . Habakiri::get( 'blog_template' ) ); ?>
</div>

<?php get_footer(); ?>
