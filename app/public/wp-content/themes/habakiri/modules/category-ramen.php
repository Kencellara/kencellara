<?php
  $ramen_posts_count = get_category_by_slug('ramen')->count;
  $upload_dir = wp_upload_dir();
  $common_img_dir = $upload_dir['baseurl'] . '/common';
  $ramen_img_dir = $upload_dir['baseurl'] . '/category/ramen';
?>

<div class="ramenCategoryZone">
  <div class="categoryRecommendZone">
    <div class="categoryRecommendContainer">
      <div class="categoryRecommendInner">
        <div class="categoryRecommendTitle">三重県ラーメン制覇</div>

        <div class="storeCountArea">
          <div class="storeCountContainer">
            <img src="<?php echo $common_img_dir; ?>/crown.jpg" alt="王冠" />
            現在<span class="storeCounter"><?php echo $ramen_posts_count; ?></span>店舗制覇
            <img src="<?php echo $common_img_dir; ?>/crown.jpg" alt="王冠" />
          </div>
        </div>

        <div class="categoryRecommendExplain">
          <img src="<?php echo $ramen_img_dir; ?>/ramen_butace.png" alt="ラーメンブタコ" />
          <p>
            三重県にあるラーメン店は<span class="p_crimson">326</span>店舗。<br>
            ケンチェ飯では、全ラーメン店を巡り、<strong>味・量・値段・麺の太さ・お店情報</strong>について詳しくまとめています。<br>
            三重のラーメンを食べたくなったら、当ページをご活用下さい！
          </p>
        </div>

        <div class="catRcmdRank">
          <div class="catRcmdRankHeader commonHeader"><i class="fas fa-crown"></i> ケンチェ激押しラーメン <i class="fas fa-crown"></i></div>
          <div class="catRcmdRankContainer">
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('kazamidori'); ?>
            <div class="catRcmdRankRow first">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">1位</span>
                  <span class="catRcmRankTitle">風見鶏</span>
                  <span class="catRcmRankArea">【尾鷲】</span>
                </div>
                <div class="catRcmRankDescription">ミシュランお墨付きの鶏白湯。三重県で一番美味い説。</div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('hatinoasiha'); ?>
            <div class="catRcmdRankRow second">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">2位</span>
                  <span class="catRcmRankTitle">蜂ノ葦葉</span>
                  <span class="catRcmRankArea">【四日市】</span>
                </div>
                <div class="catRcmRankDescription">県内食べログ評価ナンバーワン。独学で行きついた究極の塩ラーメン。</div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('ise-kippu'); ?>
            <div class="catRcmdRankRow third">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">3位</span>
                  <span class="catRcmRankTitle">吉風</span>
                  <span class="catRcmRankArea">【伊勢】</span>
                </div>
                <div class="catRcmRankDescription">前代未聞の美味さ！？一度食べる死ぬまで忘れない鶏豚骨ラーメン。</div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('maruyama-syouten'); ?>
            <div class="catRcmdRankRow">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">4位</span>
                  <span class="catRcmRankTitle">丸山商店</span>
                  <span class="catRcmRankArea">【津】</span>
                </div>
                <div class="catRcmRankDescription">シンプルな鶏白湯。調和のとれた異次元のレベルのチャーシュー。</div>
              </a>
            </div>
            <?php $recommend_articles_id = Habakiri_Base_Functions::get_post_id_by_slug('momofuku'); ?>
            <div class="catRcmdRankRow">
              <a href="<?php echo the_permalink($recommend_articles_id); ?>">
                <div class="catRcmRankHead">
                  <span class="catRcmRankNum">5位</span>
                  <span class="catRcmRankTitle">京風担々麵 百福</span>
                  <span class="catRcmRankArea">【松阪】</span>
                </div>
                <div class="catRcmRankDescription">松阪市唯一無二の担々麵専門店。辛くないスープに病み付き者続出！？</div>
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
