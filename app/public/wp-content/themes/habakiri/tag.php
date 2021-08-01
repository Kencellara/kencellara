<?php get_header(); ?>

<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">
  <div class="container">
  	<div class="row">
  		<div class="col-md-9 tag">
  			<main id="main" role="main">
  				<?php
  					get_template_part( 'content', 'tag_summary' );
  				?>
  			</main>
  		</div>
  		<div class="col-md-3">
  			<?php get_sidebar(); ?>
  		</div>
  	</div>
  </div>
</div>

<?php get_footer(); ?>
