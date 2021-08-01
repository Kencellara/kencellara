<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('kence_work-style', get_template_directory_uri() . '/css/kence_work.css', array('habakiri', 'common-style')));
	add_action('wp_enqueue_scripts', wp_enqueue_style('sp_kence_work-style', get_template_directory_uri() . '/css/sp_kence_work.css'));
  $upload_dir = wp_upload_dir();
?>
<div class="coverageRequest kenceWorkContents">
  <div class="coverageRequestHeader topPageHeader">取材依頼</div>
  <img src="<?php echo $upload_dir['baseurl']; ?>/toppage/kence_work.jpg" alt="コラボ・取材の依頼" loading="lazy" />
</div>

<div class="kenceWorkWindowHeader topPageHeader">お問い合わせフォーム</div>
<div class="kenceWorkWindow kenceWorkContents">
	<div class="kenceWorkWindowExplain">
		お問い合わせは下記フォーム（ケンチェの窓口）よりお願い致します。
	</div>
	<!-- modal open -->
	<div class="kenceWindowModalOpen kenceWorkWindowModalOpen">
	  <a id="js-modal-open-2" href="" data-target="modal02">ケンチェの窓口</a>
	</div>
	<!-- ./modal open -->
	<!-- modal -->
	<div id="modal02" class="kenceWindowModal js-modal">
	  <div class="kenceWindowModalBg js-modal-close"></div>
	  <div class="kenceWindowModalContent">
	    <div class="kenceWindowModalContentInner">
	      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf7z8zl1FGl9_pWK9EOQBTbHDTRJ3hd8yIlKoSIPhl4-LbGfg/viewform?embedded=true" width="639" height="830" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
	      <a class="js-modal-close kenceWindowModalClose" href=""><span>閉じる</span></a>
	    </div>
	  </div>
	</div>
	<!-- ./modal -->
	<div class="kenceWorkWindowCaution">
	  ※Googleフォームが開きます<br/>
	  ※ページの遷移はございません
	</div>
</div>

<div class="kencemeshiHistoryHeader topPageHeader">過去の実績</div>
<div class="kencemeshiHistoryContents kenceWorkContents">
  <?php get_template_part('modules/history'); ?>
	<div class="kencemeshiAnalytics">
    <div class="kencemeshiAnalyticsHeader commonHeader">月別サイト運用結果</div>
    <img src="<?php echo $upload_dir['baseurl']; ?>/common/analytics_202107.jpg" alt="アナリティクス202107" loading="lazy" />
  </div>
</div>

<div class="kenceWorkSlogan kenceWorkContents">
  <div class="kenceWorkSloganHeader topPageHeader">ケンチェ飯とは？</div>
  <img src="<?php echo $upload_dir['baseurl']; ?>/toppage/slogan.jpg" alt="ケンチェ飯のスローガン" loading="lazy" />
</div>

<div class="kenceWorkExplain kenceWorkContents">
  <div class="kenceWorkExplainQ"><span class="question">Q. </span>なぜケンチェ飯を作ったの？</div>
  <div class="kenceWorkExplainA">
    <div class="answer">A.</div>
    <p>三重県で生まれ三重県で育った「ケンチェラーラ」。</p>
    <p>インターネットで三重県グルメを検索する際、上位に表示されるのは大手サイトや有名なお店ばかりであることに気づきました。</p>
    <p>また大手サイトには表面的な情報（営業時間・定休日など）のみが掲載されており、飲食店のディープな情報が示されていない点に対して不便と感じました。</p>
    <p>そこで、「どのサイトよりも詳しくお店を紹介する」ことをスローガンに掲げ、ケンチェ飯を作るに至りました。</p>
    <p>三重県には飲食店が6999店舗あります。</p>
    <p>ケンチェ飯では、お店を全店舗制覇すると同時に、お店の魅力やグルメ情報を多くの方と共有したいと考えています。</p>
    <p>県内で最も詳しく、使いやすいメディアを構築するために、日々奮闘しています。</p>
  </div>
  <div class="kenceWorkExplainQ"><span class="question">Q. </span>ケンチェ飯の特徴は？</div>
  <div class="kenceWorkExplainA">
    <div class="answer">A.</div>
    <p>ケンチェ飯では、三重県生まれ三重県育ちの筆者がどのサイトよりも詳しくお店を紹介。</p>
    <p>各飲食店の基本情報、お店の背景、こだわりなどが１ページに綿密にまとめられています。</p>
    <p>各記事は地域別・ジャンル別に検索ができるようにサイト設計を行っています。</p>
    <p>例えば、松阪市でラーメンを食べたい時は「ジャンル：ラーメン」→「地域：松阪」で検索すれば、過去に訪れたラーメン店が全て表示されるようになっています。</p>
		<img class="hyokkoriButace" src="<?php echo $upload_dir['baseurl']; ?>/toppage/butace.png" alt="ひょっこりブタチェ" loading="lazy" />
    <p>また、大手サイトでは利害関係が絡み、忖度の入った評価が多々見られます。</p>
    <p>ケンチェ飯では少数精鋭のため、本音で飲食店の特徴や食べた感想を紹介しています。</p>
  </div>

  <div class="kenceWorkExplainQ"><span class="question">Q. </span>ケンチェ飯の活動指針は？</div>
  <div class="kenceWorkExplainA">
    <div class="answer">A.</div>
    <p>少数精鋭で最高の ”<span class="p_crimson">グルメディア</span>” を作っています。</p>
    <p>三重県で生活を営む人々や県外から三重を訪れる方々が、少しでも「三重の食で感動する」お手伝いができればと考えています。</p>
    <p>また高齢者の飲食店オーナー様の支援、飲食店の宣伝活動も行っています。</p>
    <p>毎月、取り組んだこと・活動内容は<a href="https://www.kencellara.com/archive/category/%E3%83%96%E3%83%AD%E3%82%B0%E9%81%93">活動の忘備録</a>に記しているので、気になる方はチェックしてみてください。</p>
    <p>このような、ケンチェ飯の目的や活動にご賛同いただける企業・団体・行政などの方々に、ご支援・スポンサー・タイアップのご提案をさせていただいております。<br />何卒、ご理解とご協力を賜りますようお願い申し上げます。</p>
  </div>

  <div class="whatKencemeshiDoZone">
    <div class="whatKencemeshiDoHeader">ケンチェ飯にできること</div>
    <div class="whatKencemeshiDoMain">
      <p>ケンチェ飯では三重県にある飲食店を<span class="p_crimson p_bold">どのサイトよりも詳しく</span>紹介しています。</p>
      <p><strong>「お店の新作を紹介したい・・・」</strong></p>
      <p><strong>「SNSを駆使して集客をしてみたい・・・」</strong></p>
      <p><strong>「三重県民に自分のお店の存在を知ってもらいたい・・・」</strong></p>
      <p>ケンチェ飯では、当サイト・SNSを利用して飲食店の抱える悩みを解決できればと考えています。</p>
      <p>特にお店の紹介記事やトップページに配置した広告を通して、<span class="p_crimson p_bold">お店の認知・理解を読者に促す</span>ことができます。</p>
      <p>また、当サイトは三重県グルメに特化しているため、<span class="p_crimson p_bold">三重県で飲食店を探す方々に直接宣伝が可能</span>となっています。</p>
      <p>飲食店の様々な要望にお応えできるかと思うので、お気軽にお問合せください。</p>
      <ul>
        <li>取材依頼</li>
        <li>広告掲載</li>
        <li>コラボ企画</li>
        <li>サイト設計開発</li>
        <li>ご飯のお誘い</li>
      </ul>
      <p>上記の依頼だけでなく、メディア出演、寄稿なども承ります。</p>
      <p>詳しくは下記の連絡先または<span class="p_crimson p_bold"><a href="#kenceWorkWindow">お問い合わせフォーム</a></span>から一報お願いします。</p>
      <ul>
        <li><a href="https://twitter.com/kencellara_food" target="_blank" rel="noreferrer">Twitter <i class="fas fa-external-link-alt"></i></a></li>
        <li><a href="https://www.instagram.com/kencellara_food" target="_blank" rel="noreferrer">Instagram <i class="fas fa-external-link-alt"></i></a></li>
        <li><a href="https://www.facebook.com/kencellarafood" target="_blank" rel="noreferrer">Facebook <i class="fas fa-external-link-alt"></i></a></li>
        <li><a href="https://lin.ee/kjAkh3g" target="_blank" rel="noreferrer">LINE <i class="fas fa-external-link-alt"></i></a></li>
        <li>kencellarafood@gmail.com</li>
      </ul>
      <p><strong>名前・連絡先・要件の三点は必ず記載願います。</strong></p>
    </div>
  </div>
</div>

<div class="kencemeshiSupportHeader">日頃よりご支援頂き誠にありがとうございます。</div>
<script src="https://codoc.jp/js/cms.js" data-css="red-square" charset="UTF-8" defer="defer"></script>
<div id="codoc-entry-Aly1W7g5Yg" class="codoc-entries" data-without-body="1" data-support-button-text="ケンチェ飯を支援する" data-show-like="0" data-show-powered-by="0" data-support-message="頂戴しましたご支援は、サイトの運営費に補填させて頂いております。"></div>
