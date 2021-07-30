<?php
  $cafe_posts_count = get_category_by_slug('cafe')->count;
  $upload_dir = wp_upload_dir();
  $common_img_dir = $upload_dir['baseurl'] . '/common';
  $cat_img_dir = $upload_dir['baseurl'] . '/category';
?>

<div class="categoryZone cafe">
  <div class="categoryRecommendZone">
    <div class="categoryRecommendContainer">
      <div class="categoryRecommendInner">
        <div class="categoryRecommendTitle">三重県カフェ制覇</div>

        <div class="storeCountArea">
          <div class="storeCountContainer">
            <img src="<?php echo $common_img_dir; ?>/crown.jpg" alt="王冠" />
            現在<span class="storeCounter"><?php echo $cafe_posts_count; ?></span>店舗制覇
            <img src="<?php echo $common_img_dir; ?>/crown.jpg" alt="王冠" />
          </div>
        </div>

        <div class="categoryRecommendExplain">
          <!-- <img src="<?php echo $cat_img_dir; ?>/cafe_butace.png" alt="カフェブタチェ" /> -->
          <p>
            三重県にはお洒落・隠れ家・雰囲気が良いなど魅力的なカフェが沢山眠っています。<br>
            お店に行く前にカフェの特徴や店内の様子などを把握できるように当ページに詳しくまとめています。<br>
            不器用な男がまとめているので、至らない点も多いと思いますが、三重でカフェを巡りをする際に、当ページをご活用ください！
          </p>
        </div>

        <div class="catRcmdRank">
          <div class="catRcmdRankHeader commonHeader"><i class="fas fa-crown"></i> ケンチェ激押しカフェ <i class="fas fa-crown"></i></div>
          <div class="catRcmdRankContainer">
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('tree-crop'); ?>
            <div class="catRcmdRankRow first">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">1位</span>
                  <span class="catRcmRankTitle">ツリークロップ</span>
                  <span class="catRcmRankArea">伊勢</span>
                </div>
                <div class="catRcmRankDescription">
                  伊勢でクレープを食べるならココ！<br>
                  こだわりの手作りクレープとお洒落ランチ。
                </div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('chocolaterie4'); ?>
            <div class="catRcmdRankRow second">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">2位</span>
                  <span class="catRcmRankTitle">chocolaterie 4</span>
                  <span class="catRcmRankArea">【四日市】</span>
                </div>
                <div class="catRcmRankDescription">
                  2021年にオープンしたチョコレート菓子専門店。<br>
                  濃厚なヨダレが止まらない！？
                </div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('brook-cafezakka'); ?>
            <div class="catRcmdRankRow third">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">3位</span>
                  <span class="catRcmRankTitle">BROOK CAFE＆ZAKKA</span>
                  <span class="catRcmRankArea">【四日市】</span>
                </div>
                <div class="catRcmRankDescription">
                  お洒落カフェと雑貨屋さんが併設。<br>
                  若い女性客で店内飽和状態。
                </div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('shiawaseya'); ?>
            <div class="catRcmdRankRow">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">4位</span>
                  <span class="catRcmRankTitle">しあわせ家</span>
                  <span class="catRcmRankArea">【明和】</span>
                </div>
                <div class="catRcmRankDescription" >
                  卵を使った絶品スイーツの宝庫。<br>
                  明和に来たら絶対に立ち寄りたいお店。
                </div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('cafe-raku'); ?>
            <div class="catRcmdRankRow">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">5位</span>
                  <span class="catRcmRankTitle">Cafe＆Store 楽</span>
                  <span class="catRcmRankArea">【明和】</span>
                </div>
                <div class="catRcmRankDescription">
                  激うま手作りケーキをペロペロ。<br>
                  ランチも絶品で、女性必見のお店！
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- トップページ カテゴリー上 -->
  <div class="categoryAd">
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-7898839193224300"
         data-ad-slot="5520243193"
         data-ad-format="horizontal"
         data-full-width-responsive="false">
    </ins>
  </div>
  <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div>
