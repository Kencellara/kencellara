<?php
  $args = array(
    'posts_per_page' => $args['count'],
    'category_name' => $args['name']
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ):
  setup_postdata( $post );
  $post_id = $post->ID;
  $cats = get_the_category();
  $dateArithmetic = Habakiri_Base_Functions::dateArithmetic();
  $new_mark_bool = $dateArithmetic['result'] <= 7;
  $post_count_num = Habakiri_Base_Functions::getPostThNumber();
  $post_count_bool = in_category('gourmet');
?>
<div class="newPostCard">
  <div class="newPostThumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($post_id, 'thumbnail',array('loading'=>'lazy')); ?></a>
  </div>
  <div class="newPostTitle">
    <?php if ($post_count_bool || $new_mark_bool) { ?>
      <div class="aboveTitleZone">
        <?php if ($post_count_bool) { ?>
          <div class="mileStone"><?php echo $post_count_num+8; ?>店舗目</div>
        <?php } ?>
        <?php if ($new_mark_bool) { ?>
          <div class="newestPostMark">NEW!</div>
        <?php } ?>
      </div>
    <?php } ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
  <div class="newPostCategory">
    <?php foreach ($cats as $cat) { ?>
      <a href=<?php echo get_category_link($cat->cat_ID); ?>><?php echo $cat->name; ?></a>
    <?php } ?>
  </div>
</div>
<?php
  endforeach;
  wp_reset_postdata(); // 直前のクエリを復元する
?>
