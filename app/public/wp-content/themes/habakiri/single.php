<?php
/**
 * Version    : 1.1.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('single-style', get_template_directory_uri() . '/css/single.css', array('habakiri', 'common-style')));
	add_action('wp_enqueue_scripts', wp_enqueue_style('sp_single-style', get_template_directory_uri() . '/css/sp_single.css'));
?>
<?php
	add_action('wp_enqueue_scripts', wp_enqueue_script('ad_infeed-script', get_theme_file_uri('/js/ad_infeed.js'), array('jquery')));
?>
<?php get_header(); ?>


<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">
	<?php get_template_part( 'blog_templates/single/' . Habakiri::get( 'blog_template' ) ); ?>
</div>

<?php get_footer(); ?>
