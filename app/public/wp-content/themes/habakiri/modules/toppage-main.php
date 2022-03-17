<?php
$gourmet_posts_count = get_category_by_slug('gourmet')->count;
$support_page_id = get_page_by_path('support')->ID;
$kence_work_page_id = get_page_by_path('kence_work')->ID;
$upload_dir = wp_upload_dir();
$common_img_dir = $upload_dir['baseurl'] . '/common';
$sticker_img_dir = $upload_dir['baseurl'] . '/sticker';
$toppage_img_dir = $upload_dir['baseurl'] . '/toppage';
$hokubu_post_count = get_category_by_slug('kameyama')->count + get_category_by_slug('komono')->count + get_category_by_slug('yokkaichi')->count + get_category_by_slug('kuwana')->count;
$iga_post_count = get_category_by_slug('iga')->count;
$chubu_post_count = get_category_by_slug('tsu')->count + get_category_by_slug('matsusaka')->count + get_category_by_slug('meiwa')->count + get_category_by_slug('taki')->count;
$iseShima_post_count = get_category_by_slug('ise')->count + get_category_by_slug('shima')->count + get_category_by_slug('toba')->count + get_category_by_slug('minamiise')->count;
$higashikishu_post_count = get_category_by_slug('odai')->count + get_category_by_slug('kihoku')->count + get_category_by_slug('owase')->count;
?>

<div class="simpleNews">
  <p>ニュース<i class="fas fa-chevron-circle-right"></i>Instagramフォロワー6,000人，月間95,000アクセス達成！<a href="https://store.line.me/stickershop/product/16142065/ja?ref=gnsh_stickerDetail" target="_blank" rel="noreferrer"> ケンチェ飯公式LINEスタンプ販売開始（こちら）</a></p>
</div>

<div class="storeCountArea">
  <div class="storeCountContainer">
    <img src="<?php echo $common_img_dir; ?>/crown_50.jpg" alt="王冠" />
    現在<span class="storeCounter"><?php echo $gourmet_posts_count + 8; ?></span>店舗制覇
    <img src="<?php echo $common_img_dir; ?>/crown_50.jpg" alt="王冠" />
  </div>
</div>

<!-- スライドショー -->
<div class="topSliderZone">
  <div class="newPostsHeader topPageHeader">おすすめ記事</div>
  <div class="slider">
    <div>
      <a href="https://store.line.me/stickershop/product/16142065/ja?ref=gnsh_stickerDetail" target="_blank" rel="noreferrer">
        <img src="<?php echo $sticker_img_dir . '/LINEスタンプ.jpg'; ?>" alt="ケンチェ飯公式LINEスタンプ" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('kan'); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img data-lazy="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" alt="kan" loading="lazy" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('touyouke-grill'); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img data-lazy="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" alt="touyouke-grill" loading="lazy" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('history'); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img data-lazy="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" alt="history" loading="lazy" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('nakaroku'); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img data-lazy="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" alt="nakaroku" loading="lazy" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('take-sushi'); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img data-lazy="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" alt="take-sushi" loading="lazy" />
      </a>
    </div>
    <div>
      <?php $slider_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('menya-sen'); ?>
      <a href="<?php echo the_permalink($slider_articles_id); ?>">
        <img data-lazy="<?php echo get_the_post_thumbnail_url($slider_articles_id, 'large'); ?>" alt="menya-sen" loading="lazy" />
      </a>
    </div>
  </div>
</div>
<!-- slickはレイアウト崩れを避けるため直後読み込み -->
<?php get_template_part('modules/slick-js'); ?>

<div class="goToArticlesZone">
  <div class="goToArticlesBtn">
    <a href="<?= home_url('articles') ?>">
      最新記事へ
    </a>
  </div>
</div>

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
<?php get_template_part('modules/aiueo_search'); ?>


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
  ご意見・ご要望は下記フォームからお気軽にどうぞ！<br />
  例：行って欲しいお店、コラボのご依頼、etc..<br />
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
  ※Googleフォームが開きます<br />
  ※ページの遷移はございません
</div>