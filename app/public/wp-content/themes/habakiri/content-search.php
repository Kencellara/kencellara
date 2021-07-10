<?php
	$dateArithmetic = Habakiri_Base_Functions::dateArithmetic();
	$new_mark_bool = $dateArithmetic['result'] <= 7;
?>
<article class="article article--search">
	<div class="entry">
		<div class="searchHeaderZone">
			<div class="searchResultHeader">検索結果</div>
		</div>
		<?php do_action( 'habakiri_before_entries' ); ?>
		<div class="entries entries--search">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					$post_count_num = Habakiri_Base_Functions::getPostThNumber();
					$post_count_bool = in_category('gourmet');
				?>
				<article <?php post_class( array( 'article', 'newPostCard' ) ); ?>>
					<div class="entry--has_media__media newPostThumbnail">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="newPostTitle">
						<?php if ($post_count_bool || $new_mark_bool) { ?>
							<div class="aboveTitleZone">
								<?php if ($post_count_bool) { ?>
									<div class="mileStone"><?php echo $post_count_num; ?>店舗目</div>
								<?php } ?>
					      <?php if ($new_mark_bool) { ?>
					        <div class="newestPostMark">NEW!</div>
					      <?php } ?>
					    </div>
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
			<?php endwhile; ?>
			<?php get_template_part( 'modules/pagination' ); ?>
		</div>
		<?php do_action( 'habakiri_after_entries' ); ?>
	</div>
</article>
