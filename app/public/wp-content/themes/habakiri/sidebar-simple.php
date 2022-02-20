<!-- 変数定義 -->
<?php
	$upload_dir = wp_upload_dir();
	$sns_img_dir = wp_upload_dir()['baseurl'] . '/sns';
	$kw_page_id = get_page_by_path('kence_work')->ID;
	$genre_cat_ID = get_category_by_slug('genre')->cat_ID;
	$area_cat_ID = get_category_by_slug('area')->cat_ID;
	$genre_categories = get_categories(array(
		'child_of' => $genre_cat_ID,
		'orderby' => 'term_order',
		'order' => 'ASC'
	));
	$area_categories = get_categories(array(
		'child_of' => $area_cat_ID,
		'orderby' => 'term_order',
		'order' => 'ASC'
	));
	$outside_area_category = get_category_by_slug('outside_mie');
?>
<aside id="sub">
	<div class="sidebar">
		<?php
			do_action( 'habakiri_before_sidebar_widget_area' );
			if ( is_active_sidebar( 'sidebar' ) ) {
				echo '<div class="sb_search sb_translate"><div class="translateHeader sb_header">Translate(翻訳)</div>';
				dynamic_sidebar( 'sidebar' );
				echo '</div>';
			}
			do_action( 'habakiri_after_sidebar_widget_area' );
		?>
		<div class="sb_search sb_content">
			<div class="searchHeader sb_header">ワードで検索 <i class="fas fa-search"></i></div>
			<?php get_template_part( 'searchform' ); ?>
		</div>
		<div class="sb_plofile sb_content">
			<div class="profileHeader sb_header">ケンチェ飯とは</div>
			<div class="profileImg">
				<img class="sidebarButace" title="サイドバーブタチェ" src="<?php echo $upload_dir['baseurl']; ?>/sidebar/profile_v2_350.jpg" alt="サイドバーブタチェ" loading="lazy" />
			</div>
			<div class="profileSentence">
				三重県で一番詳しいグルメディア.<br>
				三重県生まれ, 三重県育ちのケンチェラーラが, 県内飲食店を全店舗制覇します.<br>
				年間300食以上の食べ歩き.<br>
				どのサイトよりも詳しく三重県のグルメ情報を発信.<br>
				三重で本当に美味い食べ物を探すならココ！<br>
				取材依頼・食事のお誘いお待ちしております.<br>
				→ 詳しくは<a href="https://kencellara.com/entry/history">コチラ</a>
			</div>
		</div>
		<div class="sb_snsLogosHeader sb_content">
			ケンチェ飯SNS <i class="fas fa-level-down-alt"></i><i class="fas fa-level-down-alt"></i><i class="fas fa-level-down-alt"></i>
		</div>
		<div class="sb_snsLogos sb_content">
			<a href="https://www.instagram.com/kencellara_food" target="_blank" rel="noopener noreferrer">
				<img class="InstagramIcon" src="<?php echo $sns_img_dir; ?>/Instagram.jpg" alt="instagram" />
			</a>
			<a class="twitter-button" href="https://twitter.com/kencellara_food" target="_blank" rel="noopener noreferrer">
				<i class="fab fa-twitter-square"></i>
			</a>
			<a href="https://lin.ee/kjAkh3g" target="_blank" rel="noopener noreferrer">
				<img class="LINEIcon" src="<?php echo $sns_img_dir; ?>/LINE.jpg" alt="LINE" />
			</a>
			<a class="facebook-button" href="https://www.facebook.com/kencellarafood" target="_blank" rel="noopener noreferrer">
				<i class="fab fa-facebook-square"></i>
			</a>
		</div>
		<div class="sb_adsense sb_content">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- サイドバー設置 スクエア -->
			<ins class="adsbygoogle" style="display: block;" data-ad-client="ca-pub-7898839193224300" data-ad-slot="7778306766" data-ad-format="auto" data-full-width-responsive="true"></ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<div class="sb_popularArticles sb_content">
			<div class="sb_popularHeader sb_header">人気記事</div>
			<?php get_template_part( 'modules/sb_popular_articles' ); ?>
		</div>
		<div class="sb_insta sb_content">
			<div class="instaHeader sb_header">公式Instagram</div>
			<?php get_template_part( 'modules/embedded_instagram' ); ?>
		</div>
	</div>
</aside>
