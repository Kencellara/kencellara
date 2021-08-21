<div class="aboveArticle">
  <!--シェアボタン-->
  <div class="snsShare">
    <div class="snsShareInner">
      <span>シェアする <i class="fas fa-share-alt"></i></span>
      <!--Facebook-->
      <a class="facebook-button" href="//www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&t=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" title="facebookでシェアする">
        <i class="fab fa-facebook-square"></i>
      </a>
      <!--Twitter-->
      <a class="twitter-button" href="//twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&<?php echo urlencode(get_permalink()); ?>&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Twitterでシェアする">
        <i class="fab fa-twitter-square"></i>
      </a>
      <!--LINE-->
      <a class="line-button" href="//timeline.line.me/social-plugin/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="LINEでシェアする">
        <i class="fab fa-line"></i>
      </a>
    </div>
  </div>
</div>
