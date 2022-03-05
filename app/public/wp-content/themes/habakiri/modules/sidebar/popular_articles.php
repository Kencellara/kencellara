<div class="sb_popularArticles sb_content">
  <div class="sb_popularHeader sb_header">人気記事</div>
  <?php
  Habakiri_Base_Functions::setPostViews(get_the_ID());
  query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC');
  while (have_posts()) : the_post();
    $post_id = get_the_ID();
    // $post_views_count = get_post_meta($post_id, 'post_views_count', true);
  ?>
    <div class="sb_popularArticle sb_article">
      <div class="sb_popularArticlesThumbnail sb_articleThumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($post_id, 'thumbnail', array('loading' => 'lazy')); ?></a>
      </div>
      <div class="sb_popularArticlesTitle sb_articleTitle">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata();
  wp_reset_query(); ?>
</div>