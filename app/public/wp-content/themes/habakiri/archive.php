<?php
/**
 * Version    : 1.0.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   :
 * License    : GPLv2 or later
 * License URI: license.txt
 */

add_action('wp_enqueue_scripts', wp_enqueue_style('archive-style', get_template_directory_uri() . '/css/archive.css', array('habakiri', 'common-style')));
add_action('wp_enqueue_scripts', wp_enqueue_style('sp_archive-style', get_template_directory_uri() . '/css/sp_archive.css'));
add_action('wp_enqueue_scripts', wp_enqueue_style('new_posts-style', get_template_directory_uri() . '/css/new_posts.css'));
add_action('wp_enqueue_scripts', wp_enqueue_style('sp_new_posts-style', get_template_directory_uri() . '/css/sp_new_posts.css'));
add_action('wp_enqueue_scripts', wp_enqueue_style('category-style', get_template_directory_uri() . '/css/category.css'));
add_action('wp_enqueue_scripts', wp_enqueue_style('sp_category-style', get_template_directory_uri() . '/css/sp_category.css'));
add_action('wp_enqueue_scripts', wp_enqueue_script('sp_ad_article-script', get_theme_file_uri('/js/sp_ad_article.js'), array('jquery')));
get_template_part( 'home' );
