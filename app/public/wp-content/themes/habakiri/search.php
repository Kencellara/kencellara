<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('archive-style', get_template_directory_uri() . '/css/archive.css', array('habakiri', 'common-style'), '1.0.5'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('search-style', get_template_directory_uri() . '/css/search.css'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('sp_archive-style', get_template_directory_uri() . '/css/sp_archive.css', array(), '1.0.5'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('new_posts-style', get_template_directory_uri() . '/css/new_posts.css', array(), '1.0.5'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('sp_new_posts-style', get_template_directory_uri() . '/css/sp_new_posts.css'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('404-style', get_template_directory_uri() . '/css/404.css'));
?>
<?php get_header(); ?>

<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">
	<?php get_template_part( 'blog_templates/archive/' . Habakiri::get( 'search_template' ) ); ?>
</div>

<?php get_footer(); ?>
