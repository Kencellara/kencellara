<!-- 変数定義 -->
<?php
	$upload_dir = wp_upload_dir();
	$kw_page_id = get_page_by_path('kence_work')->ID;
	$genre_cat_ID = get_category_by_slug('genre')->cat_ID;
	$area_cat_ID = get_category_by_slug('area')->cat_ID;
	$outside_cat_ID = get_category_by_slug('outside_mie')->cat_ID;
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
	$outside_categories = get_categories(array(
		'child_of' => $outside_cat_ID,
		'orderby' => 'term_order',
		'order' => 'ASC'
	));
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
				<img class="hatena-fotolife" title="サイドバーブタチェ" src="<?php echo $upload_dir['baseurl']; ?>/sidebar/profile_300.jpg" alt="サイドバーブタチェ" loading="lazy" />
			</div>
			<div class="profileSentence">
				三重県で一番詳しいグルメディア.<br>
				三重県生まれ, 三重県育ちのケンチェラーラが, 県内飲食店を全店舗制覇します.<br>
				年間300食以上の食べ歩き.<br>
				どのサイトよりも詳しく三重県のグルメ情報を発信.<br>
				三重で本当に美味い食べ物を探すならココ！<br>
				取材依頼・食事のお誘いお待ちしております.<br>
			</div>
			</div>
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
			<div class="sb_popularHeader sb_header">『伊勢』特集</div>
			<?php get_template_part( 'modules/popular_articles' ); ?>
		</div>
		<div class="sb_insta sb_content">
			<div class="instaHeader sb_header">公式Instagram</div>
			<?php get_template_part( 'modules/embedded_instagram' ); ?>
		</div>
		<div class="sb_categoryArticles sb_content">
			<div class="sb_ramenHeader sb_header">『ラーメン』特集</div>
			<?php get_template_part( 'modules/category_articles' ); ?>
			<div class="sb_goToArchivePage">
		    <a href=<?php echo get_category_link(get_category_by_slug('ramen')->cat_ID); ?>>もっと見る <i class="fas fa-chevron-right"></i></a>
		  </div>
		</div>
		<div class="sb_adsense sb_content">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- rectangle広告 -->
			<ins class="adsbygoogle" style="display: block;" data-ad-client="ca-pub-7898839193224300" data-ad-slot="4070625880" data-ad-format="rectangle" data-full-width-responsive="true"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<div class="sb_categories sb_content">
			<div class="sb_categoryHeader sb_header">カテゴリー</div>
			<div class="categorySubHeader sb_subHeader">ジャンル</div>
			<div class="sb_categoryContents">
				<?php foreach( $genre_categories as $category ) : ?>
					<a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
				<?php endforeach; ?>
			</div>
			<div class="categorySubHeader sb_subHeader">エリア（三重県内）</div>
			<div class="sb_categoryContents">
				<?php foreach( $area_categories as $category ) : ?>
					<a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
				<?php endforeach; ?>
			</div>
			<div class="categorySubHeader sb_subHeader">エリア（三重県外）</div>
			<div class="sb_categoryContents">
				<?php foreach( $outside_categories as $category ) : ?>
					<a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="sb_adsense sb_content">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- rectangle広告 -->
			<ins class="adsbygoogle" style="display: block;" data-ad-client="ca-pub-7898839193224300" data-ad-slot="4070625880" data-ad-format="rectangle" data-full-width-responsive="true"></ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<div class="sb_archive sb_content">
			<div class="archiveHeader sb_header">アーカイブ</div>
			<ul class="archive_list">
			  <?php
		      $string = wp_get_archives(
						array(
							'show_post_count' => 1,
							'echo' => 0
		        ));
		      echo preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</span></a>', $string);
			  ?>
			</ul>
		</div>
		<div class="sb_twitter sb_content">
			<div class="twitterHeader sb_header">公式Twitter</div>
			<a class="twitter-timeline" href="https://twitter.com/kencellara_food?ref_src=twsrc%5Etfw">Tweets by kencellara_food</a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<div class="sb_adsense sb_content">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- rectangle広告 -->
			<ins class="adsbygoogle" style="display: block;" data-ad-client="ca-pub-7898839193224300" data-ad-slot="4070625880" data-ad-format="rectangle" data-full-width-responsive="true"></ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</aside>
