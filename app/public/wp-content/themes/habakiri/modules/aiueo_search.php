<?php
  $a_row_array = array('wa'=>'わ','ra'=>'ら', 'ya'=>'や', 'ma'=>'ま', 'ha'=>'は', 'na'=>'な', 'ta'=>'た', 'sa'=>'さ', 'ka'=>'か', 'a'=>'あ');
  $i_row_array = array('brank_1'=>'','ri'=>'り', 'brank_2'=>'', 'mi'=>'み', 'hi'=>'ひ', 'ni'=>'に', 'ti'=>'ち', 'si'=>'し', 'ki'=>'き', 'i'=>'い');
  $u_row_array = array('brank'=>'','ru'=>'る', 'yu'=>'ゆ', 'mu'=>'む', 'hu'=>'ふ', 'nu'=>'ぬ', 'tu'=>'つ', 'su'=>'す', 'ku'=>'く', 'u'=>'う');
  $e_row_array = array('brank_1'=>'','re'=>'れ', 'brank_2'=>'', 'me'=>'め', 'he'=>'へ', 'ne'=>'ね', 'te'=>'て', 'se'=>'せ', 'ke'=>'け', 'e'=>'え');
  $o_row_array = array('brank'=>'','ro'=>'ろ', 'yo'=>'よ', 'mo'=>'も', 'ho'=>'ほ', 'no'=>'の', 'to'=>'と', 'so'=>'そ', 'ko'=>'こ', 'o'=>'お');
?>
<div class="aiueoSearchZone">
  <div class="aiueoSearchHeader topPageHeader">あいうえお検索 <i class="fas fa-search"></i></div>
  <table>
    <tbody>
      <tr>
        <?php
          foreach ($a_row_array as $key => $value):
            $tags = get_tags(array('slug' => $key));
            $tag_id = $tags[0]->term_id;
            $tag_link = get_tag_link($tag_id);
        ?>
          <td class="aiueoTableTd <?php echo $key ?>">
            <?php if ($tag_link === ""): ?>
              <span><?php echo $value; ?></span>
            <?php else: ?>
              <a href=<?php echo $tag_link ?>><?php echo $value; ?></a>
            <?php endif; ?>
          </td>
        <?php endforeach; ?>
      </tr>
      <tr>
        <?php
          foreach ($i_row_array as $key => $value):
            if (strpos($key, 'brank') === false):
              $class_name = $key;
              $tags = get_tags(array('slug' => $key));
              $tag_id = $tags[0]->term_id;
              $tag_link = get_tag_link($tag_id);
            else:
              $class_name = 'brank';
              $tag_link = '';
            endif
        ?>
          <td class="aiueoTableTd <?php echo $class_name ?>">
            <?php if ($tag_link === ""): ?>
              <span><?php echo $value; ?></span>
            <?php else: ?>
              <a href=<?php echo $tag_link ?>><?php echo $value; ?></a>
            <?php endif; ?>
          </td>
        <?php endforeach; ?>
      </tr>
      <tr>
        <?php
          foreach ($u_row_array as $key => $value):
            $tags = get_tags(array('slug' => $key));
            $tag_id = $tags[0]->term_id;
            $tag_link = get_tag_link($tag_id);
        ?>
          <td class="aiueoTableTd <?php echo $key ?>">
            <?php if ($tag_link === ""): ?>
              <span><?php echo $value; ?></span>
            <?php else: ?>
              <a href=<?php echo $tag_link ?>><?php echo $value; ?></a>
            <?php endif; ?>
          </td>
        <?php endforeach; ?>
      </tr>
      <tr>
        <?php
          foreach ($e_row_array as $key => $value):
            if (strpos($key, 'brank') === false):
              $class_name = $key;
              $tags = get_tags(array('slug' => $key));
              $tag_id = $tags[0]->term_id;
              $tag_link = get_tag_link($tag_id);
            else:
              $class_name = 'brank';
              $tag_link = '';
            endif
        ?>
          <td class="aiueoTableTd <?php echo $class_name ?>">
            <?php if ($tag_link === ""): ?>
              <span><?php echo $value; ?></span>
            <?php else: ?>
              <a href=<?php echo $tag_link ?>><?php echo $value; ?></a>
            <?php endif; ?>
          </td>
        <?php endforeach; ?>
      </tr>
      <tr>
        <?php
          foreach ($o_row_array as $key => $value):
            $tags = get_tags(array('slug' => $key));
            $tag_id = $tags[0]->term_id;
            $tag_link = get_tag_link($tag_id);
        ?>
          <td class="aiueoTableTd <?php echo $key ?>">
            <?php if ($tag_link === ""): ?>
              <span><?php echo $value; ?></span>
            <?php else: ?>
              <a href=<?php echo $tag_link ?>><?php echo $value; ?></a>
            <?php endif; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    </tbody>
  </table>
</div>
