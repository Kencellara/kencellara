<?php
add_action('wp_enqueue_scripts', wp_enqueue_script('modal-script', get_theme_file_uri('/js/modal.js'), array('jquery')));
$upload_dir = wp_upload_dir();
?>
<nav class="headerMenuContainer">
  <div class="headerMenu">
    <div id="magazines" class="menuItem">
      <a href="<?= home_url('magazines'); ?>">
        マガジン
      </a>
    </div>
    <div id="top" class="menuItem">
      <a href="<?= home_url(); ?>">
        TOP
      </a>
    </div>
    <div id="collabo_coverage" class="menuItem active">
      <a>
        コラボ・取材
      </a>
    </div>
  </div>
</nav>

<div class="simpleNews">
  <p>ニュース<i class="fas fa-chevron-circle-right"></i>月間11.5万アクセス達成！</p>
</div>
<div class="ccZone">
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
      <!-- <p>例えば、松阪市でラーメンを食べたい時は「ジャンル：ラーメン」→「地域：松阪」で検索すれば、過去に訪れたラーメン店が全て表示されるようになっています。</p> -->
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
      <p>このような、ケンチェ飯の目的や活動にご賛同いただける企業・団体・行政などの方々に、ご支援・スポンサー・タイアップのご提案をさせていただいております。<br />何卒、ご理解とご協力を賜りますようお願い申し上げます。</p>
    </div>
  </div>

  <div class="PRMovieHeader topPageHeader">20秒でわかる『ケンチェ飯』</div>
  <div class="PRMovieZone">
    <iframe loading="lazy" width="560" height="315" src="https://www.youtube.com/embed/IvzX13M69lw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="coverageRequest kenceWorkContents">
    <div class="coverageRequestHeader topPageHeader">取材依頼</div>
    <img src="<?php echo $upload_dir['baseurl']; ?>/toppage/kence_work.jpg" alt="コラボ・取材の依頼" loading="lazy" />
  </div>

  <div class="kenceWorkWindowHeader topPageHeader">ケンチェ飯にできること</div>
  <div class="kenceWorkWindow kenceWorkContents">
    <div class="kenceWorkWindowExplain">
      <p>ケンチェ飯では三重県にある飲食店の取材・執筆を<strong>無料で</strong>承っております。</p>
      <p>
        現在、月間サイトアクセス数<span class="p_crimson p_bold">11.5万</span>を達成し、その流入者のうち<strong>大半が県内で飲食店を探している</strong>方となっています。<br />
        そのため、他のメディアに比べて<strong>効果的かつ直接的に熱いユーザー層に宣伝する</strong>ことができます。<br />
        また、一度サイト上でお店を紹介すると<strong>半永久的に宣伝することができる</strong>大きなメリットもあります。<br />
        これは雑誌や新聞ではなく、<strong>電子媒体メディアならではの強み</strong>となっています。
      </p>
      <p><span class="p_crimson p_bold">三重県の飲食業界を活気づける</span>ために、今後も必死で執筆・改善に取り組んでいきますので是非ご協力をお願いします。</p>
      <p>取材・執筆のご依頼やご要望等は下記『<strong>ケンチェの窓口</strong>』または『<strong>ケンチェ飯の連絡先</strong>』からお願いします。<span class="p_crimson p_bold">（注意：名前・連絡先・要件の3点は必ずご記入願います。）</span></p>
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
        ※Googleフォームが開きます<br />
        ※ページの遷移はございません
      </div>
      <div class="kenceAdress">ケンチェ飯の連絡先</div>
      <ul>
        <li><a href="https://twitter.com/kencellara_food" target="_blank" rel="noreferrer">Twitter <i class="fas fa-external-link-alt"></i></a></li>
        <li><a href="https://www.instagram.com/kencellara_food" target="_blank" rel="noreferrer">Instagram <i class="fas fa-external-link-alt"></i></a></li>
        <li><a href="https://www.facebook.com/kencellarafood" target="_blank" rel="noreferrer">Facebook <i class="fas fa-external-link-alt"></i></a></li>
        <li><a href="https://lin.ee/kjAkh3g" target="_blank" rel="noreferrer">LINE <i class="fas fa-external-link-alt"></i></a></li>
        <li>kencellarafood@gmail.com</li>
      </ul>
    </div>
  </div>

  <div class="kencemeshiHistoryHeader topPageHeader">ケンチェ飯の歴史</div>
  <div class="kencemeshiHistoryContents kenceWorkContents">
    <?php get_template_part('modules/history'); ?>
    <a class="linkHistory" href="https://kencellara.com/entry/history">過去のコラボ飯・広告掲載店を見る</a>
    <?php get_template_part('modules/analytics'); ?>
  </div>

  <div class="kencemeshiSupportHeader">日頃よりご支援頂き誠にありがとうございます。</div>
  <script src="https://codoc.jp/js/cms.js" data-css="red-square" charset="UTF-8" defer="defer"></script>
  <div id="codoc-entry-Aly1W7g5Yg" class="codoc-entries" data-without-body="1" data-support-button-text="ケンチェ飯を支援する" data-show-like="0" data-show-powered-by="0" data-support-message="頂戴しましたご支援は、サイトの運営費に補填させて頂いております。"></div>
</div>