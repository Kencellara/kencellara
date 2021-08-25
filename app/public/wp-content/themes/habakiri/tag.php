<?php
  add_action('wp_enqueue_scripts', wp_enqueue_style('tag-style', get_template_directory_uri() . '/css/tag.css', array('habakiri', 'common-style'), '1.0.11.2'));
  add_action('wp_enqueue_scripts', wp_enqueue_style('sp_tag-style', get_template_directory_uri() . '/css/sp_tag.css', array(), '1.0.7'));
?>
<?php
  $tag = get_queried_object();
  $multi_tags_arr = $wp_query->query_vars['tag_slug__and'];
  $is_multi = !!$multi_tags_arr;
  if ($is_multi) {
    foreach ($multi_tags_arr as &$value) {
      $tags = get_tags(array('slug' => $value));
      $value = $tags[0]->name;
    }
    unset($value);
  }
  $tag_name = $tag->name;
?>
<?php get_header(); ?>

<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">
  <div class="container">
  	<div class="row">
  		<div class="col-md-9 tag">
  			<main id="main" role="main">
          <div class="tagSearchZone">
            <?php if ($is_multi): ?>
              <div class="commonHeader tagSearchHeader">『<?php echo implode(" × ", $multi_tags_arr); ?>』のお店一覧</div>
            <?php else: ?>
              <div class="commonHeader tagSearchHeader">『<?php echo $tag_name; ?>』のお店一覧</div>
            <?php endif; ?>
            <?php while ( have_posts() ) : the_post(); ?>
      				<?php get_template_part( 'content', 'tag_summary' ); ?>
      			<?php endwhile; ?>
            <?php get_template_part( 'modules/pagination' ); ?>
          </div>
          <div class="toTopBtnZone toSearch">
            <a class="toTopBtn" href=<?php echo home_url('#areaSearch') ?>>地域で検索</a>
            <a class="toTopBtn" href=<?php echo home_url('#genreSearch') ?>>ジャンルで検索</a>
          </div>
          <div class="toTopBtnZone toTop">
            <a class="toTopBtn" href=<?php echo home_url() ?>>トップへ</a>
          </div>
  			</main>
  		</div>
  		<div class="col-md-3">
  			<?php get_sidebar(); ?>
  		</div>
  	</div>
  </div>
</div>

<?php get_footer(); ?>
