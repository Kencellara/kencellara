<?php
  $gourmet_posts_count = get_category_by_slug('gourmet')->count;
	$support_page_id = get_page_by_path('support')->ID;
	$kence_work_page_id = get_page_by_path('kence_work')->ID;
  $upload_dir = wp_upload_dir();
  $common_img_dir = $upload_dir['baseurl'] . '/common';
  $sticker_img_dir = $upload_dir['baseurl'] . '/sticker';
  $toppage_img_dir = $upload_dir['baseurl'] . '/toppage';
  $magazine_img_dir = $upload_dir['baseurl'] . '/magazine';
  $hokubu_post_count = get_category_by_slug('kameyama')->count + get_category_by_slug('komono')->count + get_category_by_slug('yokkaichi')->count + get_category_by_slug('kuwana')->count;
  $iga_post_count = get_category_by_slug('iga')->count;
  $chubu_post_count = get_category_by_slug('tsu')->count + get_category_by_slug('matsusaka')->count + get_category_by_slug('meiwa')->count + get_category_by_slug('taki')->count;
  $iseShima_post_count = get_category_by_slug('ise')->count + get_category_by_slug('shima')->count + get_category_by_slug('toba')->count + get_category_by_slug('minamiise')->count;
  $higashikishu_post_count = get_category_by_slug('odai')->count + get_category_by_slug('kihoku')->count + get_category_by_slug('owase')->count;
  $random_articles = Habakiri_Base_Functions::set_random_articles();
?>

<div class="simpleNews">
  <p>ニュース<i class="fas fa-chevron-circle-right"></i>一眼レフ導入！ 月間95,000アクセス達成！<a href="https://store.line.me/stickershop/product/16142065/ja?ref=gnsh_stickerDetail" target="_blank" rel="noreferrer"> ケンチェ飯公式LINEスタンプ販売開始（こちら）</a></p>
</div>

<div class="storeCountArea">
  <div class="storeCountContainer">
    <img src="<?php echo $common_img_dir; ?>/crown.jpg" alt="王冠" />
    現在<span class="storeCounter"><?php echo $gourmet_posts_count+8; ?></span>店舗制覇
    <img src="<?php echo $common_img_dir; ?>/crown.jpg" alt="王冠" />
  </div>
</div>

<!-- スライドショー -->
<div class="magazineSlideZone">
  <div class="magazineHeader topPageHeader">ケンチェマガジン <i class="fas fa-book-open"></i></div>
  <div id="sliderMagazine" class="sliderMagazine">
    <div>
      <a href="https://kencellara.com/magazine/ise-ramen" target="_blank" rel="noreferrer">
        <img src="<?php echo $magazine_img_dir; ?>/cover/ise-ramen.jpg" alt="伊勢のおすすめラーメン" />
        <span class="magazineTitle">伊勢のおすすめラーメン</span>
      </a>
    </div>
    <div>
      <a href="https://kencellara.com/magazine/chubu-oniku" target="_blank" rel="noreferrer">
        <img src="<?php echo $magazine_img_dir; ?>/cover/chubu-oniku.jpg" alt="三重県中部至高のお肉" />
        <span class="magazineTitle">三重県中部至高のお肉</span>
      </a>
    </div>
    <div>
      <a href="https://kencellara.com/magazine/kakurega" target="_blank" rel="noreferrer">
        <img src="<?php echo $magazine_img_dir; ?>/cover/kakurega.jpg" alt="隠れ家コレクション" />
        <span class="magazineTitle">隠れ家コレクション</span>
      </a>
    </div>
    <div>
      <a href="https://kencellara.com/magazine/cospa" target="_blank" rel="noreferrer">
        <img src="<?php echo $magazine_img_dir; ?>/cover/cospa.jpg" alt="コスパ最強のお店１０選" />
        <span class="magazineTitle">コスパ最強のお店１０選</span>
      </a>
    </div>
    <div>
      <a href="https://kencellara.com/magazine/chubu-udon" target="_blank" rel="noreferrer">
        <img src="<?php echo $magazine_img_dir; ?>/cover/chubu-udon.jpg" alt="中部の美味しい饂飩" />
        <span class="magazineTitle">中部の美味しい饂飩</span>
      </a>
    </div>
    <div>
      <a href="https://kencellara.com/magazine/kence-osusume-1" target="_blank" rel="noreferrer">
        <img src="<?php echo $magazine_img_dir; ?>/cover/kence-osusume-1.jpg" alt="ケンチェのおすすめ店" />
        <span class="magazineTitle">ケンチェのおすすめ店</span>
      </a>
    </div>
    <div>
      <a href="https://kencellara.com/magazine/trend-cafe-1" target="_blank" rel="noreferrer">
        <img src="<?php echo $magazine_img_dir; ?>/cover/trend-cafe-1.jpg" alt="今熱盛のカフェ８選" />
        <span class="magazineTitle">今熱盛のカフェ８選</span>
      </a>
    </div>
    <div>
      <a href="https://kencellara.com/magazine/meiwa-matome" target="_blank" rel="noreferrer">
        <img src="<?php echo $magazine_img_dir; ?>/cover/meiwa-matome.jpg" alt="明和町グルメまとめ" />
        <span class="magazineTitle">明和町グルメまとめ</span>
      </a>
    </div>
  </div>
</div>
<?php get_template_part( 'modules/slick-js-magazine' ); ?>


<!-- 地域別検索 -->
<div id="areaSearch" class="areaSearchZone">
  <div class="areaSearchContainer">
    <div class="areaSearchHeader topPageHeader">エリアでグルメ検索 <i class="fas fa-search"></i></div>
    <div class="areaSearchInner">
      <div class="hokubu areaZone">
        <div class="areaBadge hokubu"><?php echo $hokubu_post_count; ?></div>
        <div class="hokubuHeader areaHeader">北部</div>
        <ul class="areaList">
          <li class="inabe">
            <a href="">いなべ</a>
          </li>
          <li class="kuwana">
            <a href=<?php echo get_category_link(get_category_by_slug('kuwana')->cat_ID); ?>>桑名</a>
          </li>
          <li class="yokkaichi">
            <a href=<?php echo get_category_link(get_category_by_slug('yokkaichi')->cat_ID); ?>>四日市</a>
          </li>
          <li class="komono">
            <a href=<?php echo get_category_link(get_category_by_slug('komono')->cat_ID); ?>>菰野</a>
          </li>
          <li class="kameyama">
            <a href=<?php echo get_category_link(get_category_by_slug('kameyama')->cat_ID); ?>>亀山</a>
          </li>
          <li class="suzuka">
            <a href=<?php echo get_category_link(get_category_by_slug('suzuka')->cat_ID); ?>>鈴鹿</a>
          </li>
        </ul>
      </div>
      <div class="iga areaZone">
        <div class="areaBadge iga"><?php echo $iga_post_count; ?></div>
        <div class="igaHeader areaHeader">伊賀</div>
        <ul class="areaList">
          <li class="iga">
            <a href=<?php echo get_category_link(get_category_by_slug('iga')->cat_ID); ?>>伊賀</a>
          </li>
          <li class="nabari">
            <a href="">名張</a>
          </li>
        </ul>
      </div>
      <div class="chubu areaZone">
        <div class="areaBadge chubu"><?php echo $chubu_post_count; ?></div>
        <div class="chubuHeader areaHeader">中部</div>
        <ul class="areaList">
          <li class="tsu">
            <a href=<?php echo get_category_link(get_category_by_slug('tsu')->cat_ID); ?>>津</a>
          </li>
          <li class="matsusaka">
            <a href=<?php echo get_category_link(get_category_by_slug('matsusaka')->cat_ID); ?>>松阪</a>
          </li>
          <li class="meiwa">
            <a href=<?php echo get_category_link(get_category_by_slug('meiwa')->cat_ID); ?>>明和</a>
          </li>
          <li class="taki">
            <a href=<?php echo get_category_link(get_category_by_slug('taki')->cat_ID); ?>>多気</a>
          </li>
        </ul>
      </div>
      <div class="iseShima areaZone">
        <div class="areaBadge iseShima"><?php echo $iseShima_post_count; ?></div>
        <div class="iseShimaHeader areaHeader">伊勢志摩</div>
        <ul class="areaList">
          <li class="ise">
            <a href=<?php echo get_category_link(get_category_by_slug('ise')->cat_ID); ?>>伊勢</a>
          </li>
          <li class="watarai">
            <a href="">度会</a>
          </li>
          <li class="tamaki">
            <a href="">玉城</a>
          </li>
          <li class="toba">
            <a href=<?php echo get_category_link(get_category_by_slug('toba')->cat_ID); ?>>鳥羽</a>
          </li>
          <li class="shima">
            <a href=<?php echo get_category_link(get_category_by_slug('shima')->cat_ID); ?>>志摩</a>
          </li>
          <li class="minamiise">
            <a href=<?php echo get_category_link(get_category_by_slug('minamiise')->cat_ID); ?>>南伊勢</a>
          </li>
        </ul>
      </div>
      <div class="higashikishu areaZone">
        <div class="areaBadge higashikishu"><?php echo $higashikishu_post_count; ?></div>
        <div class="higashikishuHeader areaHeader">東紀州</div>
        <ul class="areaList">
          <li class="odai">
            <a href=<?php echo get_category_link(get_category_by_slug('odai')->cat_ID); ?>>大台</a>
          </li>
          <li class="kihoku">
            <a href=<?php echo get_category_link(get_category_by_slug('kihoku')->cat_ID); ?>>紀北</a>
          </li>
          <li class="taiki">
            <a href="">大紀</a>
          </li>
          <li class="owase">
            <a href=<?php echo get_category_link(get_category_by_slug('owase')->cat_ID); ?>>尾鷲</a>
          </li>
          <li class="kumano">
            <a href="">熊野</a>
          </li>
          <li class="mihama">
            <a href="">御浜</a>
          </li>
          <li class="kiho">
            <a href="">紀宝</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="areaSearchNote">地域名左上の数字は訪問店舗数を示しています。</div>

<!-- ジャンル別検索 -->
<div id="genreSearch" class="genreSearchZone">
  <div class="genreSearchContainer">
    <div class="genreSearchHeader topPageHeader">ジャンルでグルメ検索 <i class="fas fa-search"></i></div>
    <div class="genreSearchInner">
      <div class="genreSearchColumn">
        <div class="genreSearchCard">
          <a href=<?php echo get_category_link(get_category_by_slug('meat')->cat_ID); ?>>
            お肉
          </a>
        </div>
        <i class="fas fa-bookmark oniku"></i>
        <div class="genreSearchCard">
          <a href=<?php echo get_category_link(get_category_by_slug('set-meal')->cat_ID); ?>>
            定食
          </a>
        </div>
        <i class="fas fa-bookmark teishoku"></i>
      </div>
      <div class="genreSearchColumn">
        <div class="genreSearchCard">
          <a href=<?php echo get_category_link(get_category_by_slug('sushi')->cat_ID); ?>>
            海鮮
          </a>
        </div>
        <i class="fas fa-bookmark kaisen"></i>
        <div class="genreSearchCard">
          <a href=<?php echo get_category_link(get_category_by_slug('bakery')->cat_ID); ?>>
            パン
          </a>
        </div>
        <i class="fas fa-bookmark bread"></i>
      </div>
      <div class="genreSearchColumn">
        <div class="genreSearchCard">
          <a href=<?php echo get_category_link(get_category_by_slug('cafe')->cat_ID); ?>>
            カフェ
          </a>
        </div>
        <i class="fas fa-bookmark cafe"></i>
        <div class="genreSearchCard">
          <a href=<?php echo get_category_link(get_category_by_slug('chuka')->cat_ID); ?>>
            中華
          </a>
        </div>
        <i class="fas fa-bookmark chuka"></i>
      </div>
      <div class="genreSearchColumn">
        <div class="genreSearchCard">
          <a href=<?php echo get_category_link(get_category_by_slug('ramen')->cat_ID); ?>>
            ラーメン
          </a>
        </div>
        <i class="fas fa-bookmark ramen"></i>
        <div class="genreSearchCard">
          <a href=<?php echo get_category_link(get_category_by_slug('izakaya')->cat_ID); ?>>
            居酒屋
          </a>
        </div>
        <i class="fas fa-bookmark izakaya"></i>
      </div>
    </div>
  </div>
</div>

<!-- あいうえお検索 -->
<?php get_template_part( 'modules/aiueo_search' ); ?>

<div class="recommendGourmetZone">
  <div class="recommendGourmetHeader topPageHeader"><i class="fas fa-fire"></i> ケンチェ激推しグルメ <i class="fas fa-fire"></i></div>
  <div class="recommendGourmetContainer first">
    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[5]); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt=<?= $random_articles[5] ?> loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[6]); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt=<?= $random_articles[6] ?> loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[7]); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt=<?= $random_articles[7] ?> loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[8]); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt=<?= $random_articles[8] ?> loading="lazy" />
        </a>
      </div>
    </div>
  </div>

  <div class="recommendGourmetContainer">
    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[9]); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt=<?= $random_articles[9] ?> loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[10]); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt=<?= $random_articles[10] ?> loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[11]); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt=<?= $random_articles[11] ?> loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug($random_articles[12]); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt=<?= $random_articles[12] ?> loading="lazy" />
        </a>
      </div>
    </div>
  </div>
</div>

<!-- ケンチェ番付 -->
<div class="banzukeZone">
  <div class="banzukeContainer">
    <table>
      <caption class="banzukeHeader topPageHeader">ケンチェ番付 <i class="fas fa-trophy"></i></caption>
      <tbody>
        <tr>
          <td class="banzukeRank first">1位</td>
          <td class="banzukePost">
            <h3><a class="articleLink" href="https://www.kencellara.com/entry/nakamura">お食事処 なかむら</a></h3>
            <p>松阪市飯高町にある伝説の定食屋</p>
          </td>
          <td class="banzukeStar first">
            <div class="star-rating">
              <div class="star-rating-item" style="width:96%;"></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="banzukeRank second">2位</td>
          <td class="banzukePost">
            <h3><a class="articleLink" href="https://www.kencellara.com/entry/toramaru">虎丸</a></h3>
            <p>ミシュランガイド掲載！伊勢で一番美味い海産物</p>
          </td>
          <td class="banzukeStar second">
            <div class="star-rating">
              <div class="star-rating-item" style="width:90%;"></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="banzukeRank third">3位</td>
          <td class="banzukePost">
            <h3><a class="articleLink" href="https://www.kencellara.com/entry/cafe-raku">Cafe&Store 楽</a></h3>
            <p>雰囲気・料理など全てが完璧のカフェ</p>
          </td>
          <td class="banzukeStar third">
            <div class="star-rating">
              <div class="star-rating-item" style="width:86%;"></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="banzukeRank fourth">4位</td>
          <td class="banzukePost">
            <h3><a class="articleLink" href="https://www.kencellara.com/entry/kazamidori">風見鶏</a></h3>
            <p>ケンチェ飯選ぶ！県内でトップクラスに旨いラーメン屋</p>
          </td>
          <td class="banzukeStar fourth">
            <div class="star-rating">
              <div class="star-rating-item" style="width:78%;"></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="banzukeRank fifth">5位</td>
          <td class="banzukePost">
            <h3><a class="articleLink" href="https://www.kencellara.com/entry/hatiemon">八右衛門</a></h3>
            <p>目利きのプロが選ぶ！山奥で食べる鮮度抜群の魚料理</p>
          </td>
          <td class="banzukeStar fifth">
            <div class="star-rating">
              <div class="star-rating-item" style="width:76%;"></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="banzukeRank sixth">6位</td>
          <td class="banzukePost">
            <h3><a class="articleLink" href="https://www.kencellara.com/entry/owase-onigawara">鬼瓦</a></h3>
            <p>三重県南部を代表する海鮮料理の王様</p>
          </td>
          <td class="banzukeStar sixth">
            <div class="star-rating">
              <div class="star-rating-item" style="width:74%;"></div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="kenceWindowAnnounce">
  ご意見・ご要望は下記フォームからお気軽にどうぞ！<br/>
  例：行って欲しいお店、コラボのご依頼、etc..<br/>
  <i class="fas fa-chevron-down"></i>
</div>

<!-- modal open -->
<div id='kenceWindowModalOpen' class="kenceWindowModalOpen">
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

<div class="kencemeshiExplain">
  <div class="kencemeshiExplainHeader topPageHeader">ケンチェ飯とは？</div>
  <div class="kencemeshiExplainContents">
    <img src="<?php echo $upload_dir['baseurl']; ?>/toppage/kence_explain.jpg" alt="ケンチェ飯の説明" loading="lazy" />
    <p>三重県生まれ三重県育ちの「<strong>ケンチェラーラ.</strong>」が</p>
    <p>三重県グルメを食べ歩き, <strong><u>どのサイトよりも詳しく</u></strong>グルメ情報を発信するサイト.</p>
    <p>三重県の飲食店を探す際, <strong><u>カテゴリー別</u>, <u>エリア別</u></strong>に検索が可能.</p>
    <p><strong><u>読者限定のイベント</u></strong>や<strong><u>特典</u></strong>が盛りだくさんなので、ぜひご活用ください.</p>
    <p><span class="instaText">Instagram</span>で随時情報をお知らせ <a class="instaLink" href="https://www.instagram.com/kencellara_food/"><strong><u>@kencellara_food</u></strong></a></p>
    <iframe loading="lazy" width="560" height="315" src="https://www.youtube.com/embed/IvzX13M69lw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p style="font-size:19px;text-align:center;"><strong>20秒でわかる『ケンチェ飯』<i class="fas fa-video"></i></strong></p>
  </div>
</div>

<div class="kencemeshiHistory">
  <div class="kencemeshiHistoryHeader topPageHeader">ケンチェ飯の歴史</div>
  <div class="kencemeshiHistoryContents">
    <?php get_template_part('modules/history'); ?>
  </div>
  <?php get_template_part('modules/analytics'); ?>
  <div class="supportZone">
    <script src="https://codoc.jp/js/cms.js" data-css="red-square" charset="UTF-8" defer></script>
    <div id="codoc-entry-Aly1W7g5Yg" class="codoc-entries" data-without-body="1" data-support-button-text="ケンチェ飯を支援する" data-show-like="0" data-show-powered-by="0" data-support-message="頂戴しましたご支援は、サイトの運営費に補填させて頂いております。"></div>
    <div class="supportNav">
      <p class="acknowledgement">
        お気持ありがとうございます。支援金は、ケンチェ飯の活動費用として大切に使わせていただきます。今後とも応援よろしくお願いします。
      </p>
      <p class="to_kence_work">コラボ・お仕事のご依頼は上記『ケンチェの窓口』からお願い致します。</p>
    </div>
  </div>
</div>
