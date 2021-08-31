<?php
  add_action('wp_enqueue_scripts', wp_enqueue_script('tag_crowd-script', get_theme_file_uri('/js/tag_crowd.js')));
?>
<?php
  $budget_tag_arr = array('500', '1000', '2000', '3000', '4000', '5000');
  $genre_tag_arr = array('gurumet-b', 'italian', 'udon', 'meat', 'cafe', 'curry', 'sweets', 'chain', 'take-out', 'food-fight', 'humburger', 'bakery', 'french', 'misyuran', 'ramen', 'chuka', 'set-meal', 'izakaya', 'sushi', 'yakitori', 'yakiniku', 'all-you-can-eat', 'gyouza');
  $cat_slug = $wp_query->query_vars['category_name'];
  $cat_name = $wp_query->queried_object->name;
?>

<div class="categoryZone area">
  <div class="areaHeader"><i class="fas fa-utensils"></i><?= $cat_name ?>のグルメ<i class="fas fa-utensils"></i></div>
  <div class="tagSearch">
    <button id="js-budgetBtn" class="tagSearchBtn">予算</button><button id="js-genreBtn" class="tagSearchBtn">ジャンル</button>
  </div>
  <div id="budgetTagCrowd" class="budgetTagCrowd tagCrowd">
    <?php foreach ($budget_tag_arr as $tag_slug):
      $posts_count = Habakiri_Base_Functions::getMultiTagPosts(array($cat_slug, $tag_slug));
      if ($posts_count < 1) {
        continue;
      }
      $tags = get_tags(array('slug' => $tag_slug));
      $tag_name = $tags[0]->name;
      $path = '/tag/' . $cat_slug . '+' . $tag_slug;
      $url = home_url($path);
    ?>
      <a href=<?= $url ?>><?= $tag_name ?></a>
    <?php endforeach; ?>
  </div>
  <div id="genreTagCrowd" class="genreTagCrowd tagCrowd">
    <?php foreach ($genre_tag_arr as $tag_slug):
      $posts_count = Habakiri_Base_Functions::getMultiTagPosts(array($cat_slug, $tag_slug));
      if ($posts_count < 1) {
        continue;
      }
      $tags = get_tags(array('slug' => $tag_slug));
      $tag_name = $tags[0]->name;
      $path = '/tag/' . $cat_slug . '+' . $tag_slug;
      $url = home_url($path);
    ?>
      <a href=<?= $url ?>><?= $tag_name ?></a>
    <?php endforeach; ?>
  </div>
</div>
