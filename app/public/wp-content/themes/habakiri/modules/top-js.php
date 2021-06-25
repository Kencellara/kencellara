<!-- 固定ヘッダー -->
<?php add_filter('wp_footer', function() { ?>
	<script>
		const fixedNode = jQuery('#jsFixedSNS');
		const scrollStart = fixedNode.offset().top;
		let distance = 0;

		jQuery(document).scroll(() => {
			distance = jQuery(this).scrollTop();

			if (scrollStart <= distance) {
				fixedNode.addClass('fixed');
			} else if (scrollStart >= distance) {
				fixedNode.removeClass('fixed');
			}
		});
	</script>
<?php } ); ?>

<!-- ケンチェの窓口モーダル -->
<?php add_filter('wp_footer', function() { ?>
  <script>
    jQuery('.js-modal-open').on('click', () => {
      const target = jQuery('.js-modal-open').data('target');
      const modal = document.getElementById(target);
      jQuery(modal).fadeIn(300);
      return false;
    });

    jQuery('.js-modal-close').on('click', () => {
      jQuery('.js-modal').fadeOut( 300 );
      return false;
    });
  </script>
<?php } ); ?>

<!--ページトップボタン-->
<?php add_filter('wp_footer', function() { ?>
  <script>
    function smoothScroll(o){var e=window.pageYOffset,l=o>e;setTimeout(function(){l&&o>=e?(e=e+(o-e)/20+1,window.scrollTo(0,e),setTimeout(arguments.callee,10)):!l&&e>=o?(e=e-(e-o)/20-1,window.scrollTo(0,e),setTimeout(arguments.callee,10)):window.scrollTo(0,o)},10)}
  </script>
<?php } ); ?>

<!-- slick -->
<?php
	add_action('wp_enqueue_scripts', wp_enqueue_script('slick-script', get_theme_file_uri('/src/js/slick/slick.min.js'), array('jquery')));
?>
