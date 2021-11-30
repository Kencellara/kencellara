<?php
  $upload_dir = wp_upload_dir();
  $sticker_img_dir = $upload_dir['baseurl'] . '/sticker';
  $magazine_img_dir = $upload_dir['baseurl'] . '/magazine';
?>
<div class="mzInner">
  <div class="mzHeader">
    <img class="mzHeaderLogo" src=<?= $magazine_img_dir . '/magazine_header.png' ?> alt="ケンチェ・マガジン">
  </div>
  <div class="mzTopImgZone">
    <img class="zTopImg" src=<?= $magazine_img_dir . '/magazine_top.png' ?> alt="ケンチェマガジントップ画像">
  </div>
  <div class="mzCopyZone">
    <div class="mzCopy">
      <p>三重県初！電子グルメ雑誌</p>
      <p>これでもうお店探しに困らない</p>
    </div>
    <div class="mzCopyStickerZone">
      <img class="mzCopySticker" src="<?php echo $sticker_img_dir . '/300/三重グルメならけんちぇ飯_300.png'; ?>" alt="三重グルメならけんちぇ飯" />
    </div>
  </div>
  <div class="mzIntroZone">
    <img class="mzIntroImg" src=<?= $magazine_img_dir . '/merit.jpg' ?> alt="有料会員になるメリット" />
  </div>
  <div class="mzPlanZone">
    <div class="mzPlanHeader mzContentsHeader">各種プラン</div>
    <div class="mzPlanEntrance">
      <div class="freePlanZone mzEachPlanZone">
        <div class="mzPlanTitle">無料体験</div>
        <div class="mzPlanCost">費用：￥0</div>
        <div class="mzPlanPoints">
          <ul>
            <li>10日間雑誌読み放題</li>
          </ul>
        </div>
        <div class="linkToCodoc"><a href="https://codoc.jp/sites/kencellara/subscriptions/v5mIjI7pQQ">無料体験</a></div>
      </div>
      <div class="monthPlanZone mzEachPlanZone">
        <div class="mzPlanTitle">月額プラン</div>
        <div class="mzPlanCost">費用：￥500/月</div>
        <div class="mzPlanPoints">
          <ul>
            <li>1か月全雑誌読み放題</li>
            <li>月4本以上の新作雑誌</li>
            <li>定期的な交流会イベント</li>
          </ul>
        </div>
        <div class="linkToCodoc"><a href="https://codoc.jp/sites/kencellara/subscriptions/v5mIjI7pQQ">入会する</a></div>
      </div>
      <div class="yearPlanZone mzEachPlanZone">
        <div class="mzPlanTitle">年額プラン</div>
        <div class="mzPlanCost">費用：￥5000/年</div>
        <div class="mzPlanPoints">
          <ul>
            <li>1年間全雑誌読み放題</li>
            <li>月額プランより￥1000お得</li>
          </ul>
        </div>
        <div class="linkToCodoc"><a href="https://codoc.jp/sites/kencellara/subscriptions/v5mIjI7pQQ">入会する</a></div>
      </div>
    </div>
  </div>
  <div class="mzSampleZone">
    <div class="mzSampleHeader mzContentsHeader">雑誌サンプル</div>
  </div>
  <div class="mzPointZone">
    <div class="mzPointHeader mzContentsHeader">サービス概要</div>
    <div class="mzPointContentsZone">
      <div class="mzPointContents">
        <div class="mzPointTitle">グルメ雑誌はどんな感じ？</div>
        <div class="mzPointList">
          <ul>
            <li>誰にでも見やすいデザイン</li>
            <li>広告非表示</li>
          </ul>
        </div>
      </div>
      <div class="mzPointContents">
        <div class="mzPointTitle">有料会員限定のイベント</div>
        <div class="mzPointList">
          <ul>
            <li>毎月開催される交流会</li>
            <li>有料会員同士でご飯に行く</li>
            <li>LINEグループまたはメールで告知</li>
            <li>グルメ愛好家同士で繋がれる</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="mzPointContentsZone">
      <div class="mzPointContents">
        <div class="mzPointTitle">毎月お得な特典がある！</div>
        <div class="mzPointList">
          <ul>
            <li>月ごとに魅力的な特典を準備</li>
            <li>加盟飲食店で〇％off</li>
            <li>抽選で〇名様に商品券プレゼント</li>
            <li>パーティーにご招待</li>
            <li>オリジナルグッズプレゼント</li>
          </ul>
        </div>
      </div>
      <div class="mzPointContents">
        <div class="mzPointTitle">ケンチェ飯の想い</div>
        <div class="mzPointList">
          <ul>
            <li>〇〇〇</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="mzFixedFooter">
    <div class="footerBtn">
      <a href="https://codoc.jp/sites/kencellara/subscriptions/v5mIjI7pQQ">10日間無料体験する</a>
    </div>
  </div>
</div>