<div class="sb_archive sb_content">
  <div class="archiveHeader sb_header">アーカイブ</div>
  <ul class="archive_list">
    <?php
    $string = wp_get_archives(
      array(
        'show_post_count' => 1,
        'echo' => 0
      )
    );
    echo preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</span></a>', $string);
    ?>
  </ul>
</div>