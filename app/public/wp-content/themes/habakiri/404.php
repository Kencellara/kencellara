<?php add_action('wp_enqueue_scripts', wp_enqueue_style('404-style', get_template_directory_uri() . '/css/404.css', array('common-style'))); ?>
<?php get_header(); ?>

<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">
	<?php get_template_part( 'blog_templates/single/' . Habakiri::get( '404_template' ) ); ?>
</div>

<?php get_footer(); ?>
