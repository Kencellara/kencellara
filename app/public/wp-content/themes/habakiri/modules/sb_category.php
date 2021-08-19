<?php
  $args = array(
    'posts_per_page' => $args['count'],
    'category_name' => $args['name']
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ):
  setup_postdata( $post );
  $cats = get_the_category();
?>
<div class="sb_categoryArticle sb_article">
  <div class="sb_categoryArticlesThumbnail sb_articleThumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($post->ID, 'thumbnail', array('loading'=>'lazy')); ?></a>
  </div>
  <div class="sb_categoryArticlesTitle sb_articleTitle">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
</div>
<?php
  endforeach;
  wp_reset_postdata(); // 直前のクエリを復元する
?>
