<aside id="sub">
	<div class="sidebar">
		<?php
		do_action('habakiri_before_sidebar_widget_area');
		if (is_active_sidebar('sidebar')) {
			echo '<div class="sb_search sb_translate"><div class="translateHeader sb_header">Translate(翻訳)</div>';
			dynamic_sidebar('sidebar');
			echo '</div>';
		}
		do_action('habakiri_after_sidebar_widget_area');
		?>
		<?php get_template_part('modules/sidebar/search'); ?>
		<?php get_template_part('modules/sidebar/profile'); ?>
		<?php get_template_part('modules/sidebar/sns'); ?>
		<?php get_template_part('modules/sidebar/adsense'); ?>
		<?php get_template_part('modules/sidebar/magazines'); ?>
		<?php get_template_part('modules/sidebar/instagram'); ?>
		<?php get_template_part('modules/sidebar/popular_articles'); ?>
		<?php get_template_part('modules/sidebar/adsense_2'); ?>
		<?php get_template_part('modules/sidebar/categories'); ?>
		<?php get_template_part('modules/sidebar/adsense_2'); ?>
		<?php get_template_part('modules/sidebar/archive'); ?>
		<?php get_template_part('modules/sidebar/adsense_fix'); ?>
		<!-- <div class="sb_twitter sb_content">
			<div class="twitterHeader sb_header">公式Twitter</div>
			<a class="twitter-timeline" href="https://twitter.com/kencellara_food?ref_src=twsrc%5Etfw">Tweets by kencellara_food</a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div> -->
	</div>
</aside>