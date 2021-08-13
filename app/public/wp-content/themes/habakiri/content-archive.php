<?php
	$cat = get_category( get_query_var("cat") );
	$cat_slug = $cat->slug;
	$cat_name = $cat->name;
	$query_vars = $wp_query->query_vars;
  $paged = $query_vars['paged'];
?>

<article class="article article--archive">
	<div class="entry">
		<?php do_action( 'habakiri_before_entries' ); ?>
		<?php if ($cat_slug != '' && $paged < 2) {
			get_template_part( 'modules/category-' . $cat_slug );
		} ?>
		<div class="categoryHeaderZone">
			<?php if ($cat_slug == ''): ?>
				<div class="categoryHeader">新着記事</div>
			<?php else: ?>
				<div class="categoryHeader">『<?php echo $cat_name; ?>』新着記事</div>
			<?php endif ?>
		</div>
		<div class="entries entries--archive">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'summary' ); ?>
			<?php endwhile; ?>
			<?php get_template_part( 'modules/pagination' ); ?>
		</div>
		<?php do_action( 'habakiri_after_entries' ); ?>
	</div>
</article>
