<?php
  $sns_img_dir = wp_upload_dir()['baseurl'] . '/sns';
?>
<div id="jsFixedSNS" class="miniInfoArea">
  <a href=<?php echo home_url() ?>><div class="fixedHeaderKencemeshi">三重県グルメは<i class="fas fa-utensils"></i><strong>ケンチェ飯</strong><i class="fas fa-utensils"></i></div></a>
  <div class="snsContainer">
    <span class="leadToSns">
      おトク情報GET! <i class="far fa-hand-point-right"></i>
    </span>
    <span class="leadToSnsShort">
      SNS <i class="far fa-hand-point-right"></i>
    </span>
    <a href="https://www.instagram.com/kencellara_food" target="_blank" rel="noopener noreferrer">
      <img class="InstagramIcon" src="<?php echo $sns_img_dir; ?>/Instagram.jpg" alt="instagram" />
    </a>
    <a class="twitter-button" href="https://twitter.com/kencellara_food" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-twitter-square"></i>
    </a>
    <a href="https://lin.ee/kjAkh3g" target="_blank" rel="noopener noreferrer">
      <img class="LINEIcon" src="<?php echo $sns_img_dir; ?>/LINE.jpg" alt="LINE" />
    </a>
    <a class="facebook-button" href="https://www.facebook.com/kencellarafood" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-facebook-square"></i>
    </a>
  </div>
  <div class="fixedHeaderHomeBtn">
    <a href=<?php echo home_url() ?>><i class="fas fa-home"></i></a>
  </div>
</div>
