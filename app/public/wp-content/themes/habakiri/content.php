<?php
	$post_count_bool = in_category('gourmet');
	$post_count_num = Habakiri_Base_Functions::getPostThNumber();
	if (!is_user_logged_in()) {
    Habakiri_Base_Functions::setPostViews(get_the_ID());
  }
?>
<article <?php post_class( array( 'article', 'article--single' ) ); ?>>
	<div class="entry">
		<div class="aboveTitleInfo">
			<?php if ($post_count_bool) { ?>
				<div class="milestone"><i class="fas fa-utensils"></i>  <?php echo $post_count_num+8; ?>店舗目  <i class="fas fa-utensils"></i></div>
			<?php } ?>
		</div>
		<?php Habakiri::the_title(); ?>
		<div class="belowTitleInfo">
			<div class="createdDate articleDate">公開日：<?php the_date("Y年m月d日"); ?></div>
			<div class="lastModifiedDate articleDate">最終更新日：<?php the_modified_date("Y年m月d日"); ?></div>
			<div class="tmpInfo">
				感染症対策を講じた上で取材を行っております。
			</div>
		</div>
		<?php get_template_part( 'modules/above_article' ); ?>
		<?php do_action( 'habakiri_before_entry_content' ); ?>
		<div class="entry__content">
			<?php the_content(); ?>
		</div>
		<?php do_action( 'habakiri_after_entry_content' ); ?>
	</div>
	<?php get_template_part( 'modules/below_article' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
	<?php get_template_part( 'modules/related-posts' ); ?>
	<div class="kenceWindowZone">
		<div class="kenceWindowHeader belowArticleHeader">お問い合わせフォーム</div>
		<div class="kenceWindowExplain">
			<ul>
				<li>お店の取材依頼</li>
				<li>コラボ依頼</li>
				<li>スポンサー・広告依頼</li>
				<li>読者がケンチェ飯に行って欲しいお店</li>
				<li>ケンチェ飯とご飯を一緒に食べてみたい</li>
			</ul>
			<p>
				内容問わず！お気軽に！<br>
				下記フォームよりご連絡下さい！
			</p>
		</div>
		<!-- modal open -->
		<div class="kenceWindowModalOpen">
		  <a id="js-modal-open-1" href="" data-target="modal01">ケンチェの窓口</a>
		</div>
		<!-- ./modal open -->
		<!-- modal -->
		<div id="modal01" class="kenceWindowModal js-modal">
		  <div class="kenceWindowModalBg js-modal-close"></div>
		  <div class="kenceWindowModalContent">
		    <div class="kenceWindowModalContentInner">
		      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf7z8zl1FGl9_pWK9EOQBTbHDTRJ3hd8yIlKoSIPhl4-LbGfg/viewform?embedded=true" width="639" height="830" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
		      <a class="js-modal-close kenceWindowModalClose" href=""><span>閉じる</span></a>
		    </div>
		  </div>
		</div>
		<!-- ./modal -->
		<div class="kenceWindowCaution">
		  ※Googleフォームが開きます<br/>
		  ※ページの遷移はございません
		</div>
	</div>
	<div class="kencemeshiSupportZone">
		<div class="kencemeshiSupportHeader">日頃よりご支援頂き誠にありがとうございます。</div>
		<script src="https://codoc.jp/js/cms.js" data-css="red-square" charset="UTF-8" defer="defer"></script>
		<div id="codoc-entry-Aly1W7g5Yg" class="codoc-entries" data-without-body="1" data-support-button-text="ケンチェ飯を支援する" data-show-like="0" data-show-powered-by="0" data-support-message="頂戴しましたご支援は、サイトの運営費に補填させて頂いております。"></div>
	</div>
</article>
