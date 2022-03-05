<?php
$sns_img_dir = wp_upload_dir()['baseurl'] . '/sns';
?>
<div class="sb_snsLogosHeader sb_content">
  ケンチェ飯SNS <i class="fas fa-level-down-alt"></i><i class="fas fa-level-down-alt"></i><i class="fas fa-level-down-alt"></i>
</div>
<div class="sb_snsLogos sb_content">
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