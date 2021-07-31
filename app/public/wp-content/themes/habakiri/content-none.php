<?php
	$upload_dir = wp_upload_dir();
	$sticker_img_dir = $upload_dir['baseurl'] . '/sticker';
?>
<article class="article page-404">
	<div class="entry">
		<div class="entry__content">
			<p>
				申し訳ございません。<br>
				お探しのページは見つかりませんでした。
			</p>
			<?php if (is_search()) { ?>
				<?php get_search_form(); ?>
			<?php } ?>
			<p><a href=<?php echo home_url() ?>>
				<img src="<?php echo $sticker_img_dir; ?>/三重グルメならけんちぇ飯.png" alt="三重グルメならケンチェ飯" />
			</a></p>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7898839193224300" crossorigin="anonymous"></script>
			<!-- 横並びダブル広告 -->
			<ins class="adsbygoogle"
		       style="display:inline-block;width:345px;height:280px"
		       data-ad-client="ca-pub-7898839193224300"
	 	       data-ad-slot="5216822028"></ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</article>
