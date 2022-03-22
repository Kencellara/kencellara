<nav class="headerMenuContainer">
  <div class="headerMenu">
    <div id="magazines" class="menuItem active">
      <a>
        マガジン
      </a>
    </div>
    <div id="top" class="menuItem">
      <a href="<?= home_url(); ?>">
        TOP
      </a>
    </div>
    <div id="collabo_coverage" class="menuItem">
      <a href="<?= home_url('collabo_coverage'); ?>">
        コラボ・取材
      </a>
    </div>
  </div>
</nav>
<div class="magazineArea">
  <div class="newMagazineZone contentBox">
    <div class="magazineHeader topPageHeader">マガジン新着 <i class="fas fa-bolt"></i></div>
    <div class="newMagazines">
      <div class="newMagazineBox">
        <a href="https://kencellara.com/magazine/ekichika" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/ekichika.jpg" alt="駅近飲食店オススメ8選" />
          <span class="magazineTitle">駅近飲食店オススメ8選</span>
        </a>
      </div>
      <div class="newMagazineBox">
        <a href="https://kencellara.com/magazine/march-osusume" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/march-osusume.jpg" alt="3月ケンチェオススメ特集" />
          <span class="magazineTitle">3月ケンチェオススメ特集</span>
        </a>
      </div>
    </div>
  </div>
  <div class="magazineSlideZone contentBox">
    <div class="magazineHeader topPageHeader">マガジン一覧 <i class="fas fa-book-open"></i></div>
    <div id="sliderMagazine" class="sliderMagazine">
      <div>
        <a href="https://kencellara.com/magazine/ise-ramen" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/ise-ramen.jpg" alt="伊勢のおすすめラーメン" />
          <span class="magazineTitle">伊勢のおすすめラーメン</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/chubu-oniku" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/chubu-oniku.jpg" alt="三重県中部至高のお肉" />
          <span class="magazineTitle">三重県中部至高のお肉</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/kakurega" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/kakurega.jpg" alt="隠れ家コレクション" />
          <span class="magazineTitle">隠れ家コレクション</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/cospa" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/cospa.jpg" alt="コスパ最強のお店１０選" />
          <span class="magazineTitle">コスパ最強のお店１０選</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/chubu-udon" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/chubu-udon.jpg" alt="中部の美味しい饂飩" />
          <span class="magazineTitle">中部の美味しい饂飩</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/kence-osusume-1" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/kence-osusume-1.jpg" alt="ケンチェのおすすめ店" />
          <span class="magazineTitle">ケンチェのおすすめ店</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/trend-cafe-1" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/trend-cafe-1.jpg" alt="今熱盛のカフェ８選" />
          <span class="magazineTitle">今熱盛のカフェ８選</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/meiwa-matome" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/meiwa-matome.jpg" alt="明和町グルメまとめ" />
          <span class="magazineTitle">明和町グルメまとめ</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/katu-matome-1" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/katu-matome-1.jpg" alt="三重県「カツ」まとめ" />
          <span class="magazineTitle">三重県「カツ」まとめ</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/sushi-matome-1" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/sushi-matome-1.jpg" alt="中南部お寿司特集" />
          <span class="magazineTitle">中南部お寿司特集</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/ekichika" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/ekichika.jpg" alt="駅近飲食店オススメ8選" />
          <span class="magazineTitle">駅近飲食店オススメ8選</span>
        </a>
      </div>
      <div>
        <a href="https://kencellara.com/magazine/march-osusume" target="_blank" rel="noreferrer">
          <img src="https://kencellara.com/magazine/image/cover/march-osusume.jpg" alt="3月ケンチェオススメ特集" />
          <span class="magazineTitle">3月ケンチェオススメ特集</span>
        </a>
      </div>
    </div>
  </div>
  <?php get_template_part('modules/slick-js-magazine'); ?>
</div>