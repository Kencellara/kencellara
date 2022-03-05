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
		<?php get_template_part('modules/sidebar/popular_articles'); ?>
		<?php get_template_part('modules/sidebar/instagram'); ?>
	</div>
</aside>