<?php
  $gourmet_posts_count = get_category_by_slug('gourmet')->count;
	$support_page_id = get_page_by_path('support')->ID;
	$kence_work_page_id = get_page_by_path('kence_work')->ID;
  $upload_dir = wp_upload_dir();
  $common_img_dir = $upload_dir['baseurl'] . '/common';
  $sticker_img_dir = $upload_dir['baseurl'] . '/sticker';
  $hokubu_post_count = get_category_by_slug('kameyama')->count + get_category_by_slug('komono')->count + get_category_by_slug('yokkaichi')->count + get_category_by_slug('kuwana')->count;
  $iga_post_count = get_category_by_slug('iga')->count;
  $chubu_post_count = get_category_by_slug('tsu')->count + get_category_by_slug('matsusaka')->count + get_category_by_slug('meiwa')->count + get_category_by_slug('taki')->count;
  $iseShima_post_count = get_category_by_slug('ise')->count + get_category_by_slug('shima')->count + get_category_by_slug('toba')->count + get_category_by_slug('minamiise')->count;
  $higashikishu_post_count = get_category_by_slug('odai')->count + get_category_by_slug('kihoku')->count + get_category_by_slug('owase')->count;
?>

<div class="simpleNews">
  <p>ニュース<i class="fas fa-chevron-circle-right"></i>月間50,000アクセス達成！<a href="https://store.line.me/stickershop/product/16142065/ja?ref=gnsh_stickerDetail" target="_blank" rel="noreferrer"> ケンチェ飯公式LINEスタンプ販売開始（こちら）</a></p>
</div>

<div class="storeCountArea">
  <div class="storeCountContainer">
    <img src="<?php echo $common_img_dir; ?>/crown.jpg" alt="王冠" />
    現在<span class="storeCounter"><?php echo $gourmet_posts_count+8; ?></span>店舗制覇
    <img src="<?php echo $common_img_dir; ?>/crown.jpg" alt="王冠" />
  </div>
</div>

<!-- スライドショー -->
<div class="slider">
  <div>
    <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('yorokoba'); ?>
    <a href="<?php echo the_permalink($slider_articles_id); ?>">
      <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
    </a>
  </div>
  <div>
    <a href="https://store.line.me/stickershop/product/16142065/ja?ref=gnsh_stickerDetail" target="_blank" rel="noreferrer">
      <img src="<?php echo $sticker_img_dir . '/LINEスタンプ.jpg'; ?>" alt="ケンチェ飯公式LINEスタンプ" />
    </a>
  </div>
  <div>
    <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('torigen'); ?>
    <a href="<?php echo the_permalink($slider_articles_id); ?>">
      <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
    </a>
  </div>
  <div>
    <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('ookami'); ?>
    <a href="<?php echo the_permalink($slider_articles_id); ?>">
      <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
    </a>
  </div>
  <div>
    <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('hyakubunnoiti'); ?>
    <a href="<?php echo the_permalink($slider_articles_id); ?>">
      <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
    </a>
  </div>
  <div>
    <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('gyouza-misuzu'); ?>
    <a href="<?php echo the_permalink($slider_articles_id); ?>">
      <img src="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" />
    </a>
  </div>
</div>
<!-- slickはレイアウト崩れを避けるため直後読み込み -->
<?php get_template_part( 'modules/slick-js' ); ?>

<?php get_template_part( 'modules/aiueo_search' ); ?>

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

<div class="recommendGourmetZone">
  <div class="recommendGourmetHeader topPageHeader"><i class="fas fa-fire"></i> ケンチェ激推しグルメ <i class="fas fa-fire"></i></div>
  <div class="recommendGourmetContainer first">
    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('morishita'); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt="morishita" loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('hatinoasiha'); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt="hatinoasiha" loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('ace-burger'); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt="ace-burger" loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('shinmikaku'); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt="shinmikaku" loading="lazy" />
        </a>
      </div>
    </div>
  </div>

  <div class="recommendGourmetContainer">
    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('magazu'); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt="magazu" loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('mikou'); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt="mikou" loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('osse'); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt="osse" loading="lazy" />
        </a>
      </div>
    </div>

    <div class="recommendGourmetBox">
      <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('tree-crop'); ?>
      <div class="recommendGourmetImg">
        <a href="<?php echo the_permalink($recommend_articles_id); ?>">
          <img src="<?php echo get_the_post_thumbnail_url($recommend_articles_id, 'large'); ?>" alt="yamachanti" loading="lazy" />
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
            <h3><a class="articleLink" href="https://www.kencellara.com/entry/morishita">酒蔵森下</a></h3>
            <p>伊勢市駅前にある最高にして最強の居酒屋</p>
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
  <div class="kencemeshiExplainHeader topPageHeader">
    ケンチェ飯とは？
  </div>
  <div class="kencemeshiExplainContents">
    <img src="<?php echo $upload_dir['baseurl']; ?>/toppage/kence_explain.jpg" alt="ケンチェ飯の説明" loading="lazy" />
    <p>三重県生まれ三重県育ちの「<strong>ケンチェラーラ.</strong>」が</p>
    <p>三重県グルメを食べ歩き, <strong><u>どのサイトよりも詳しく</u></strong>グルメ情報を発信するサイト.</p>
    <p>三重県の飲食店を探す際, <strong><u>カテゴリー別</u>, <u>エリア別</u></strong>に検索が可能.</p>
    <p><strong><u>読者限定のイベント</u></strong>や<strong><u>特典</u></strong>が盛りだくさんなので、ぜひご活用ください.</p>
    <p><span class="instaText">Instagram</span>で随時情報をお知らせ <a class="instaLink" href="https://www.instagram.com/kencellara_food/"><strong><u>@kencellara_food</u></strong></a></p>
  </div>
</div>

<div class="kencemeshiHistory">
  <div class="kencemeshiHistoryHeader topPageHeader">ケンチェ飯の実績</div>
  <div class="kencemeshiHistoryContents">
    <?php get_template_part('modules/history'); ?>
  </div>
  <div class="kencemeshiAnalytics">
    <div class="kencemeshiAnalyticsHeader commonHeader">月別サイト運用結果</div>
    <img src="<?php echo $upload_dir['baseurl']; ?>/common/analytics_202107.jpg" alt="アナリティクス202107" loading="lazy" />
  </div>
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
