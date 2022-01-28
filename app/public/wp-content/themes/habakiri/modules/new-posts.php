<?php
	add_action('wp_enqueue_scripts', wp_enqueue_script('sp_ad_article-script', get_template_directory_uri() . '/js/sp_ad_article.js'));
  $random_articles = Habakiri_Base_Functions::set_random_articles();
?>
<div class="topSliderZone">
  <div class="newPostsHeader topPageHeader">おすすめ記事</div>
  <div class="slider">
    <div>
      <a href="https://store.line.me/stickershop/product/16142065/ja?ref=gnsh_stickerDetail" target="_blank" rel="noreferrer">
        <img src="<?php echo $sticker_img_dir . '/LINEスタンプ.jpg'; ?>" alt="ケンチェ飯公式LINEスタンプ" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[0]); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[1]); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('history'); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[2]); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[3]); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[4]); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
      </a>
    </div>
  </div>
</div>
<!-- slickはレイアウト崩れを避けるため直後読み込み -->
<?php get_template_part( 'modules/slick-js' ); ?>

<div class="newPostsZone all">
  <div class="newPostsHeader topPageHeader">最新記事</div>
  <div class="newPostsContainer">
    <?php get_template_part( 'modules/new-posts-loop', null, array('name'=>'', 'count'=>6) ); ?>
  </div>
  <div class="goToArchivePage">
    <a href="<?php echo get_post_type_archive_link( 'post' ); ?>">最新記事をもっと見る <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
<div class="newPostsZone ramen">
  <div class="newPostsHeader topPageHeader">ラーメン</div>
  <div class="newPostsContainer">
    <?php get_template_part( 'modules/new-posts-loop', null, array('name'=>'ramen', 'count'=>2) ); ?>
  </div>
  <div class="goToArchivePage">
    <a href=<?php echo get_category_link(get_category_by_slug('ramen')->cat_ID); ?>>ラーメン一覧へ <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
<div class="newPostsZone meat">
  <div class="newPostsHeader topPageHeader">お肉</div>
  <div class="newPostsContainer">
    <?php get_template_part( 'modules/new-posts-loop', null, array('name'=>'meat', 'count'=>2) ); ?>
  </div>
  <div class="goToArchivePage">
    <a href=<?php echo get_category_link(get_category_by_slug('meat')->cat_ID); ?>>お肉一覧へ <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
<div class="newPostsZone cafe">
  <div class="newPostsHeader topPageHeader">カフェ</div>
  <div class="newPostsContainer">
    <?php get_template_part( 'modules/new-posts-loop', null, array('name'=>'cafe', 'count'=>2) ); ?>
  </div>
  <div class="goToArchivePage">
    <a href=<?php echo get_category_link(get_category_by_slug('cafe')->cat_ID); ?>>カフェ一覧へ <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
<div class="newPostsZone izakaya">
  <div class="newPostsHeader topPageHeader">居酒屋</div>
  <div class="newPostsContainer">
    <?php get_template_part( 'modules/new-posts-loop', null, array('name'=>'izakaya', 'count'=>2) ); ?>
  </div>
  <div class="goToArchivePage">
    <a href=<?php echo get_category_link(get_category_by_slug('izakaya')->cat_ID); ?>>居酒屋一覧へ <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
<div class="newPostsZone bakery">
  <div class="newPostsHeader topPageHeader">パン屋</div>
  <div class="newPostsContainer">
    <?php get_template_part( 'modules/new-posts-loop', null, array('name'=>'bakery', 'count'=>2) ); ?>
  </div>
  <div class="goToArchivePage">
    <a href=<?php echo get_category_link(get_category_by_slug('bakery')->cat_ID); ?>>パン屋一覧へ <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
<div class="newPostsZone set-meal">
  <div class="newPostsHeader topPageHeader">定食</div>
  <div class="newPostsContainer">
    <?php get_template_part( 'modules/new-posts-loop', null, array('name'=>'set-meal', 'count'=>2) ); ?>
  </div>
  <div class="goToArchivePage">
    <a href=<?php echo get_category_link(get_category_by_slug('set-meal')->cat_ID); ?>>定食一覧へ <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
