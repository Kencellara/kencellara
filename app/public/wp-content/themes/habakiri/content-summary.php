<?php
	$dateArithmetic = Habakiri_Base_Functions::dateArithmetic();
	$new_mark_bool = $dateArithmetic['result'] <= 7;
  $post_count_num = Habakiri_Base_Functions::getPostThNumber();
	$post_count_bool = in_category('gourmet');
?>
<article <?php post_class( array( 'article', 'article--summary', 'newPostCard', 'permitAd' ) ); ?>>
	<div class="entry--has_media__media newPostThumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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
				<?php if (has_tag('afternoon')) { ?>
          <div class="lunchMark"><i class="fas fa-sun"></i></div>
        <?php } ?>
        <?php if (has_tag('night')) { ?>
          <div class="dinnerMark"><i class="fas fa-moon"></i></div>
        <?php } ?>
	    </div>
		<?php } ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
	<div class="newPostCategory">
		<?php $cats = get_the_category(); ?>
		<?php
      foreach ($cats as $cat) {
        if ($cat->slug == 'gourmet') continue;
    ?>
      <a href=<?php echo get_category_link($cat->cat_ID); ?>><?php echo $cat->name; ?></a>
    <?php } ?>
  </div>
</article>
