<?php
$genre_cat_ID = get_category_by_slug('genre')->cat_ID;
$area_cat_ID = get_category_by_slug('area')->cat_ID;
$genre_categories = get_categories(array(
  'child_of' => $genre_cat_ID,
  'orderby' => 'term_order',
  'order' => 'ASC'
));
$area_categories = get_categories(array(
  'child_of' => $area_cat_ID,
  'orderby' => 'term_order',
  'order' => 'ASC'
));
$outside_area_category = get_category_by_slug('outside_mie');
?>
<div class="sb_categories sb_content">
  <div class="sb_categoryHeader sb_header">カテゴリー</div>
  <div class="categorySubHeader sb_subHeader">ジャンル</div>
  <div class="sb_categoryContents">
    <?php foreach ($genre_categories as $category) : ?>
      <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
    <?php endforeach; ?>
  </div>
  <div class="categorySubHeader sb_subHeader">エリア</div>
  <div class="sb_categoryContents">
    <?php foreach ($area_categories as $category) : ?>
      <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
    <?php endforeach; ?>
    <a href="<?php echo get_category_link($outside_area_category->term_id); ?>"><?php echo $outside_area_category->name; ?></a>
  </div>
</div>