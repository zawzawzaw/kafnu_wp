<?php 

  $plain_html_wysiwyg = wds_page_builder_get_this_part_data( PREFIX . "plain_html_wysiwyg" );
  
?>

<article id="page-default-plain-html">
  <?php
    // wp_kses_post($plain_html_wysiwyg);
    
    echo $plain_html_wysiwyg;
  ?>
</article>