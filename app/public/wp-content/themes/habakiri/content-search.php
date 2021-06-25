<?php
/**
 * Version    : 1.4.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : July 5, 2015
 * Modified   : December 9, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<article class="article article--search">
	<div class="entry">
		<?php do_action( 'habakiri_before_entries' ); ?>
		<div class="entries entries--search">
			<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( array( 'article' ) ); ?>>
				<div class="entry">
					<div class="entry--has_media__media">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<?php Habakiri::the_title(); ?>
					<div class="newPostCategory">
						<?php $cats = get_the_category(); ?>
				    <?php foreach ($cats as $cat) { ?>
				      <a href=<?php echo get_category_link($cat->cat_ID); ?>><?php echo $cat->name; ?></a>
				    <?php } ?>
				  </div>
				</div>
			</article>
			<?php endwhile; ?>
			<?php get_template_part( 'modules/pagination' ); ?>
		</div>
		<?php do_action( 'habakiri_after_entries' ); ?>
	</div>
</article>
