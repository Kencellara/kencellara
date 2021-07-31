<?php
	$slug = $post->post_name;
	$store_name = get_tags(array('slug' => $slug))[0]->name;
	$cats = get_the_category();
?>
<article <?php post_class( array( 'article', 'article--summary', 'tagSummary' ) ); ?>>
	<div class="tagPostStoreName">
    <a href="<?php the_permalink(); ?>"><?php echo $store_name; ?></a>
  </div>
	<div class="newPostArea">
		<?php
      foreach ($cats as $cat) {
				$parent_id = $cat->category_parent;
				$parent_name = get_category($parent_id)->category_nicename;
        if ($parent_name == 'area') {
    ?>
      <a href=<?php echo get_category_link($cat->cat_ID); ?>><?php echo $cat->name; ?></a>
    <?php break;}} ?>
  </div>
</article>
