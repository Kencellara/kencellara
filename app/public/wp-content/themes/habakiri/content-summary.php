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
<article <?php post_class( array( 'article', 'article--summary' ) ); ?>>

	<?php if ( Habakiri::get( 'is_displaying_thumbnail' ) === 'false' ) : ?>

		<div class="entry">
			<?php Habakiri::the_title(); ?>
			<div class="entry__summary">
				<?php the_excerpt(); ?>
			</div>
			<?php get_template_part( 'modules/entry-meta' ); ?>
		</div>

	<?php else : ?>

		<div class="entry--has_media entry">
			<div class="entry--has_media__inner">
				<div class="entry--has_media__media">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<div class="entry--has_media__body">
					<?php Habakiri::the_title(); ?>
					<div class="newPostCategory">
						<?php $cats = get_the_category(); ?>
				    <?php foreach ($cats as $cat) { ?>
				      <a href=<?php echo get_category_link($cat->cat_ID); ?>><?php echo $cat->name; ?></a>
				    <?php } ?>
				  </div>
					<!-- <div class="entry__summary">
						<?php #the_excerpt(); ?>
					</div> -->
					<?php #get_template_part( 'modules/entry-meta' ); ?>
				</div>
			</div>
		</div>

	<?php endif; ?>

</article>
