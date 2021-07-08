<?php
/**
 * Version    : 1.0.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : August 28, 2015
 * Modified   :
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php $dateArithmetic = Habakiri_Base_Functions::dateArithmetic(); ?>
<article <?php post_class( array( 'article', 'article--summary', 'newPostCard' ) ); ?>>
	<div class="entry--has_media__media newPostThumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<div class="newPostTitle">
    <?php if ($dateArithmetic['result'] <= 7) { ?>
      <div class="newestPostMark">NEW!</div>
    <?php } ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
	<div class="newPostCategory">
		<?php $cats = get_the_category(); ?>
    <?php foreach ($cats as $cat) { ?>
      <a href=<?php echo get_category_link($cat->cat_ID); ?>><?php echo $cat->name; ?></a>
    <?php } ?>
  </div>
</article>
