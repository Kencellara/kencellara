<?php
  add_action('wp_enqueue_scripts', wp_enqueue_style('tag-style', get_template_directory_uri() . '/css/tag.css', array('habakiri', 'common-style')));
  add_action('wp_enqueue_scripts', wp_enqueue_style('sp_tag-style', get_template_directory_uri() . '/css/sp_tag.css', array()));
?>
<?php
  $tag = get_queried_object();
  $tag_name = $tag->name;
?>
<?php get_header(); ?>

<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">
  <div class="container">
  	<div class="row">
  		<div class="col-md-9 tag">
  			<main id="main" role="main">
          <div class="tagSearchZone">
            <div class="commonHeader tagSearchHeader">『<?php echo $tag_name ?>』のお店一覧</div>
            <?php while ( have_posts() ) : the_post(); ?>
      				<?php get_template_part( 'content', 'tag_summary' ); ?>
      			<?php endwhile; ?>
            <?php get_template_part( 'modules/pagination' ); ?>
          </div>
          <div class="toTopBtnZone">
            <a class="toTopBtn" href=<?php echo home_url('#areaSearch') ?>>地域で検索</a>
            <a class="toTopBtn" href=<?php echo home_url('#genreSearch') ?>>ジャンルで検索</a>
          </div>
  			</main>
  		</div>
  		<div class="col-md-3">
  			<?php get_sidebar(); ?>
  		</div>
  	</div>
  </div>
</div>

<?php get_footer(); ?>
