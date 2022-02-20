<section class="typeA">
  <input id="TAB-A01" type="radio" name="TAB-A">
  <label class="tabLabel" for="TAB-A01">最新記事</label>
  <div class="content">
    <?php get_template_part( 'modules/new-posts' ); ?>
  </div>
  <input id="TAB-A02" type="radio" name="TAB-A" checked="checked">
  <label class="tabLabel" for="TAB-A02">トップ</label>
  <div class="content">
    <?php get_template_part( 'modules/toppage-main' ); ?>
  </div>
  <input id="TAB-A03" type="radio" name="TAB-A">
  <label class="tabLabel" for="TAB-A03">コラボ・取材</label>
  <div class="content kence_work">
    <?php get_template_part( 'modules/kence_work' ); ?>
  </div>
</section>