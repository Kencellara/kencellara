<div class="container">
	<div class="row">
		<div class="col-md-9 archive">
			<main id="main" role="main">
				<?php
					$name = ( is_search() ) ? 'search' : 'archive';
					if ( have_posts() ) {
						get_template_part( 'content', $name );
					} else {
						get_template_part( 'content', 'none' );
					}
				?>
			</main>
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
