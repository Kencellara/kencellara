<?php
	$upload_dir = wp_upload_dir();
	$sticker_img_dir = $upload_dir['baseurl'] . '/sticker';
?>
<article class="article page-404">
	<div class="entry">
		<div class="entry__content">
			<p>
				申し訳ございません。<br>
				お探しの記事は見つかりませんでした。
			</p>
			<?php if (is_search()) { ?>
				<?php get_search_form(); ?>
			<?php } ?>
			<p><a href=<?php echo home_url() ?>>
				<img src="<?php echo $sticker_img_dir; ?>/三重グルメならけんちぇ飯.png" alt="三重グルメならけんちぇ飯" />
			</a></p>
		</div>
	</div>
</article>
