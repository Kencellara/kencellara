<?php $upload_dir = wp_upload_dir(); ?>

<?php do_action( 'habakiri_before_site_branding' ); ?>
<div class="site-branding">
	<h1 class="site-branding__heading">
		<a href=<?php echo home_url() ?>>
	    <img src="<?php echo $upload_dir['baseurl']; ?>/toppage/header_2.jpg" alt="ケンチェ飯" width="100%">
	  </a>
	</h1>
</div>
<?php do_action( 'habakiri_after_site_branding' ); ?>
