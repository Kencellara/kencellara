<?php
  $chuka_posts_count = get_category_by_slug('chuka')->count;
  $upload_dir = wp_upload_dir();
  $common_img_dir = $upload_dir['baseurl'] . '/common';
  $cat_img_dir = $upload_dir['baseurl'] . '/category';
?>

<div class="categoryZone chuka">
  <div class="categoryRecommendZone">
    <div class="categoryRecommendContainer">
      <div class="categoryRecommendInner">
        <div class="categoryRecommendTitle">三重県中華制覇</div>

        <div class="storeCountArea">
          <div class="storeCountContainer">
            <img src="<?php echo $common_img_dir; ?>/crown.jpg" alt="王冠" />
            現在<span class="storeCounter"><?php echo $chuka_posts_count; ?></span>店舗制覇
            <img src="<?php echo $common_img_dir; ?>/crown.jpg" alt="王冠" />
          </div>
        </div>

        <div class="categoryRecommendExplain">
          <p>
            中国3000年の歴史とあるように、非常に奥が深い中華料理。<br>
            本当に旨い中華を求め、日々県内各地のお店を食べ歩いています。<br>
            これまで訪れたお店を中心に、どこよりも詳しく紹介しているので、お店探しにお役立てください。
          </p>
        </div>

        <div class="catRcmdRank" style="display:none;">
          <div class="catRcmdRankHeader commonHeader"><i class="fas fa-crown"></i> ケンチェ激押し中華 <i class="fas fa-crown"></i></div>
          <div class="catRcmdRankContainer">
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('toramaru'); ?>
            <div class="catRcmdRankRow first">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">1位</span>
                  <span class="catRcmRankTitle">虎丸</span>
                  <span class="catRcmRankArea">【伊勢】</span>
                </div>
                <div class="catRcmRankDescription">
                  ケンチェ飯＆ミシュランお墨付き！何を食べても美味い海鮮尽くし！<br>
                  少し贅沢な一時を過ごすならココ。
                </div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('ototo'); ?>
            <div class="catRcmdRankRow second">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">2位</span>
                  <span class="catRcmRankTitle">魚市場 おとと</span>
                  <span class="catRcmRankArea">【尾鷲】</span>
                </div>
                <div class="catRcmRankDescription">
                  安くて新鮮、三重県南部で海鮮を食べるならココ一択。<br>
                  新鮮なお刺身をテイクアウトすることも可能。
                </div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('brook-cafezakka'); ?>
            <div class="catRcmdRankRow third">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">3位</span>
                  <span class="catRcmRankTitle">網元の店 八代</span>
                  <span class="catRcmRankArea">【志摩】</span>
                </div>
                <div class="catRcmRankDescription">
                  贅沢な特盛海鮮丼が1000円～食べられる！？<br>
                  浜島にある伝説の海鮮料理屋さん。
                </div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('shiawaseya'); ?>
            <!-- <div class="catRcmdRankRow">
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
            </div> -->
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('cafe-raku'); ?>
            <!-- <div class="catRcmdRankRow">
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
            </div> -->
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
