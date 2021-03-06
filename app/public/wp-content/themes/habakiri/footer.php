<?php $upload_dir = wp_upload_dir(); ?>
<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('footer-style', get_template_directory_uri() . '/scss-css/footer.css', array('common-style'), '3.0'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('sp_footer-style', get_template_directory_uri() . '/scss-css/sp_footer.css', [], '3.0'));
	add_action('wp_enqueue_scripts', wp_enqueue_script('to_pagetop-script', get_template_directory_uri() . '/js/to_pagetop.js'));
?>
		<?php do_action( 'habakiri_after_contents_content' ); ?>
	<!-- end #contents --></div>
	<footer id="footer" class="footer">
		<div id="footer-menu">
		  <div id="blog-title-content">
	      <a href=<?php echo home_url() ?>>
	        <img title="ケンチェ飯" src="<?php echo $upload_dir['baseurl']; ?>/common/footer_300.jpg" alt="ケンチェ飯フッター" style="height:50px;width:268px" loading="lazy" />
	      </a>
	    </div>
	    <nav>
	      <div class="footer-links">
	        <ul>
	          <li>
	            <a href=<?php echo home_url() ?>>トップページ</a>
	          </li>
	          <li>
	            <a href="https://www.yuruchariders.com/" target="_blank">ロードバイク</a>
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
