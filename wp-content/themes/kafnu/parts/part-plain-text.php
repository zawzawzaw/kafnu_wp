<?php 

  $plain_text_wysiwyg = wds_page_builder_get_this_part_data( PREFIX . "plain_text_wysiwyg" );
  
?>

<article id="page-default-plain-text">
  <div class="container-fluid has-breakpoint">
    <div class="row">

      <div class="col-md-12 col-md-push-0 col-sm-10 col-sm-push-1 col-xs-12 col-xs-push-0">

        <div id="page-default-plain-text-content">
          <div class="default-copy">

            <?php
              // wp_kses_post($plain_text_wysiwyg);              
              echo $plain_text_wysiwyg;
            ?>

          </div>
        </div> <!-- page-default-plain-text-content -->

      </div>
    </div>
  </div>
  
</article>