<?php
	$slug = $post->post_name;
	$store_name = get_tags(array('slug' => $slug))[0]->name;
	$cats = get_the_category();
?>
<article <?php post_class( array( 'article', 'article--summary', 'tagSummary' ) ); ?>>
	<a href="<?php the_permalink(); ?>">
		<div class="tagPostContainer">
	    <span class="tagPostTitle"><?php echo $store_name; ?></span>
			<?php
	      foreach ($cats as $cat) {
					$parent_id = $cat->category_parent;
					$parent_name = get_category($parent_id)->category_nicename;
	        if ($parent_name == 'area') {
	    ?>
	      <span class="tagPostAreaCat"><?php echo $cat->name; ?></span>
	    <?php break;}} ?>
	  </div>
	</a>
</article>
