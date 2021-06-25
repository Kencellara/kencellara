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
        <div class="areaSelectZone" style="display:none;">
          <div class="areaButtonZone">
            <div class="areaButtonTitle">エリアを選択</div>
            <div class="areaButtonContainer">
              <div class="hokuchubuButton"><a href="#hokuchubu">北中部</a></div>
              <div class="nambuButton"><a href="#nambu">南部</a></div>
            </div>
          </div>
          <div class="areaColorListZone">
            <div class="areaListTitle">Area Colors</div>
            <div class="areaColorItem"><div class="areaColorTitle">北部エリア</div><div class="p_hokubu colorBar"></div></div>
            <div class="areaColorItem"><div class="areaColorTitle">伊賀エリア</div><div class="p_iga colorBar"></div></div>
            <div class="areaColorItem"><div class="areaColorTitle">中部エリア</div><div class="p_chubu colorBar"></div></div>
            <div class="areaColorItem"><div class="areaColorTitle">伊勢志摩エリア</div><div class="p_iseShima colorBar"></div></div>
            <div class="areaColorItem"><div class="areaColorTitle">東紀州エリア</div><div class="p_higashikishu colorBar"></div></div>
          </div>
        </div>
        <div class="categoryRecommendContent" style="display:none;">
          <div id="hokuchubu" class="categoryRecommendAreaHeader">北中部</div>
          <div class="recommendArticle hokubu">
            <div><a href="https://www.kencellara.com/entry/menya-sonidori"><img class="thumbnail" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20201204/20201204152119.jpg" /></a></div>
            <div>
              <div><span class="articleTitle"><a href="https://www.kencellara.com/entry/menya-sonidori">麵屋 そにどり</a></span><span class="articleArea"><i class="fas fa-map-marker-alt"></i> 四日市</span></div>
              <p>東京の名店で修業した店主が作る激うまラーメン！</p>
            </div>
            <div class="recommendArticleVisit">2020-12-03</div>
            <div class="genre shoyu">醤油</div>
          </div>
          <div class="recommendArticle chubu">
            <div><a href="https://www.kencellara.com/entry/menya-banbi"><img class="thumbnail" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210204/20210204212507.jpg" /></a></div>
            <div>
              <div><span class="articleTitle"><a href="https://www.kencellara.com/entry/menya-banbi">麵屋 ばんび</a></span><span class="articleArea"><i class="fas fa-map-marker-alt"></i> 松阪</span></div>
              <p>野菜たっぷりの博多豚骨を食べるならココ！最高の接客は神クラス！？</p>
            </div>
            <div class="recommendArticleVisit">2021-02-05</div>
            <div class="genre tonkotsu">豚骨</div>
          </div>
          <div class="recommendArticle chubu">
            <div><a href="https://www.kencellara.com/entry/ramen-nari"><img class="thumbnail" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210202/20210202165141.jpg" /></a></div>
            <div>
              <div><span class="articleTitle"><a href="https://www.kencellara.com/entry/ramen-nari">らーめん 也</a></span><span class="articleArea"><i class="fas fa-map-marker-alt"></i> 津</span></div>
              <p>2019年ミシュランガイド掲載の超人気ラーメン店</p>
            </div>
            <div class="recommendArticleVisit">2021-02-02</div>
            <div class="genre shoyu">醤油</div>
          </div>
          <div class="recommendArticle chubu">
            <div><a href="https://www.kencellara.com/entry/yotuba"><img class="thumbnail" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210120/20210120084954.jpg" /></a></div>
            <div>
              <div><span class="articleTitle"><a href="https://www.kencellara.com/entry/yotuba">麵屋 よつ葉</a></span><span class="articleArea"><i class="fas fa-map-marker-alt"></i> 松阪</span></div>
              <p>松阪で有名な濃厚鶏ラーメンを喰らえ！一度食べると病みつき！？</p>
            </div>
            <div class="recommendArticleVisit">2021-01-20</div>
            <div class="genre tori">鶏</div>
          </div>
          <div class="recommendArticle chubu manyGenre">
            <div><a href="https://www.kencellara.com/entry/oiranopinokio"><img class="thumbnail" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20201117/20201117142623.jpg" /></a></div>
            <div>
              <div><span class="articleTitle"><a href="https://www.kencellara.com/entry/oiranopinokio">おいらのらーめんピノキオ</a></span><span class="articleArea"><i class="fas fa-map-marker-alt"></i> 松阪</span></div>
              <p>ケンチェが一番好きなラーメン屋！一度食べると感動すること間違いなし！</p>
            </div>
            <div class="recommendArticleVisit">2020-11-17</div>
            <div class="genreWrapper">
              <div class="genre tonkotsu">豚骨</div>
              <div class="genre shoyu">醤油</div>
              <div class="genre shio">塩</div>
            </div>
          </div>
          <div class="recommendArticle chubu">
            <div><a href="https://www.kencellara.com/entry/nikoniko-ramen"><img class="thumbnail" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20201013/20201013231015.png" /></a></div>
            <div>
              <div><span class="articleTitle"><a href="https://www.kencellara.com/entry/nikoniko-ramen">にこにこ屋</a></span><span class="articleArea"><i class="fas fa-map-marker-alt"></i> 津</span></div>
              <p>醤油ネギラーメンが至高の味！優しさあふれる一杯</p>
            </div>
            <div class="recommendArticleVisit">2020-10-14</div>
            <div class="genre shoyu">醤油</div>
          </div>

          <div id="nambu" class="categoryRecommendAreaHeader">南部</div>
          <div class="recommendArticle iseShima">
            <div><a href="https://www.kencellara.com/entry/goshichiya"><img class="thumbnail" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210206/20210206203252.jpg" /></a></div>
            <div>
              <div><span class="articleTitle"><a href="https://www.kencellara.com/entry/goshichiya">麵屋 五七屋</a></span><span class="articleArea"><i class="fas fa-map-marker-alt"></i> 伊勢</span></div>
              <p>伊勢市で超絶怒涛の人気を誇る激辛担々麵のお店</p>
            </div>
            <div class="recommendArticleVisit">2021-02-07</div>
            <div class="genre tantammen">担々麵</div>
          </div>
          <div class="recommendArticle iseShima">
            <div><a href="https://www.kencellara.com/entry/wanfu"><img class="thumbnail" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210115/20210115115031.jpg" /></a></div>
            <div>
              <div><span class="articleTitle"><a href="https://www.kencellara.com/entry/wanfu">王富</a></span><span class="articleArea"><i class="fas fa-map-marker-alt"></i> 伊勢</span></div>
              <p>チャーシューは三重県随一の旨さ！肉厚なお肉が激うま！</p>
            </div>
            <div class="recommendArticleVisit">2021-01-15</div>
            <div class="genre tonkotsu">豚骨</div>
          </div>
          <div class="recommendArticle iseShima">
            <div><a href="https://www.kencellara.com/entry/menya-appare"><img class="thumbnail" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210111/20210111202618.jpg" /></a></div>
            <div>
              <div><span class="articleTitle"><a href="https://www.kencellara.com/entry/menya-appare">麵屋 あっ晴れ</a></span><span class="articleArea"><i class="fas fa-map-marker-alt"></i> 伊勢</span></div>
              <p>三重県で食べる本格二郎系ラーメン！大食いチャレンジあり！</p>
            </div>
            <div class="recommendArticleVisit">2021-01-12</div>
            <div class="genre jiro">二郎系</div>
          </div>
          <div class="recommendArticle iseShima">
            <div><a href="https://www.kencellara.com/entry/kura-de-ramen"><img class="thumbnail" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210127/20210127172958.jpg" /></a></div>
            <div>
              <div><span class="articleTitle"><a href="https://www.kencellara.com/entry/kura-de-ramen">蔵deらーめん</a></span><span class="articleArea"><i class="fas fa-map-marker-alt"></i> 伊勢</span></div>
              <p>伊勢の味噌ラーメン専門店！三種類の味噌ラーメンを堪能</p>
            </div>
            <div class="recommendArticleVisit">2021-01-28</div>
            <div class="genre miso">味噌</div>
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
