<?php
	$is_sp = Habakiri_Base_Functions::is_sp();
?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<main id="main" role="main">
				<?php
					if ( is_404() ) {
						get_template_part( 'content', 'none' );
					} else {
						while ( have_posts() ) {
							the_post();
							get_template_part( 'content', 'single' );
						}
					}
				?>
			</main>
		</div>
		<div class="col-md-3">
			<?php if ($is_sp) {
				get_sidebar('sp');
			} else {
				get_sidebar();
			} ?>
		</div>
	</div>
</div>
