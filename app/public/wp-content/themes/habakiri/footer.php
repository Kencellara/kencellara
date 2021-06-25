<?php
/**
 * Version    : 1.0.1
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 24, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php $upload_dir = wp_upload_dir(); ?>
<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('footer-style', get_template_directory_uri() . '/css/footer.css', array('common-style')));
	add_action('wp_enqueue_scripts', wp_enqueue_style('sp_footer-style', get_template_directory_uri() . '/css/sp_footer.css'));
	add_action('wp_enqueue_scripts', wp_enqueue_script('to_pagetop-script', get_template_directory_uri() . '/js/to_pagetop.js'));
?>
		<?php do_action( 'habakiri_after_contents_content' ); ?>
	<!-- end #contents --></div>
	<footer id="footer" class="footer">
		<div id="footer-menu">
		  <div id="blog-title-content">
	      <a href=<?php echo home_url() ?>>
	        <img title="ケンチェ飯" src="<?php echo $upload_dir['baseurl']; ?>/toppage/footer.jpg" alt="ケンチェ飯フッター" style="height: 50px;" loading="lazy" />
	      </a>
	    </div>
	    <nav>
	      <div class="footer-links">
	        <ul>
	          <li>
	            <a href="<?php echo esc_url(get_permalink(get_page_by_path('kence_work')->ID)); ?>">お仕事のご依頼</a>
	          </li>
	          <li>
	            <a href="<?php echo esc_url(get_permalink(get_page_by_path('kence_work')->ID)); ?>">お問い合わせ</a>
	          </li>
	          <li>
	            <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacy_policy')->ID)); ?>">プライバシーポリシー</a>
	          </li>
	        </ul>
	      </div>
	    </nav>
	    <p class="copyright">© 2020 kencellara.com All rights reserved.</p>
		</div>
	</footer>
	<ul class="toTop-nav">
    <li><a href="javascript:void(0);" onclick="smoothScroll(0);return false;"><i class="fas fa-chevron-up"></i></a></li>
  </ul>
<!-- end #container --></div>
<?php wp_footer(); ?>
</body>
</html>
