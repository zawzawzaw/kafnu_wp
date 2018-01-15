<?php 
  
  $default_copy_and_image_copy = wds_page_builder_get_this_part_data( PREFIX . "default_copy_and_image_copy" );

  $default_copy_and_image_link_copy = wds_page_builder_get_this_part_data( PREFIX . "default_copy_and_image_link_copy" );
  $default_copy_and_image_link_url = wds_page_builder_get_this_part_data( PREFIX . "default_copy_and_image_link_url" );

  $default_copy_and_image_image = wds_page_builder_get_this_part_data( PREFIX . "default_copy_and_image_image" );
  $default_copy_and_image_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "default_copy_and_image_image_tablet" );
  $default_copy_and_image_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "default_copy_and_image_image_mobile" );

  $default_copy_and_image_image_id = wds_page_builder_get_this_part_data( PREFIX . 'default_copy_and_image_image_id' );
  $default_copy_and_image_image_tablet = get_manic_tablet_image($default_copy_and_image_image_id, $default_copy_and_image_image_tablet);  
  $default_copy_and_image_image_mobile = get_manic_mobile_image($default_copy_and_image_image_id, $default_copy_and_image_image_mobile);
?>


<article id="page-play-location-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-md-offset-1 v-align-col">
          <div class="text-container">
            <?php if ( isset($default_copy_and_image_copy) && $default_copy_and_image_copy != ''): ?>
              <h3 class="minimize-text" data-length="-1" data-tablet-length="130" data-mobile-length="-1"><?php echo $default_copy_and_image_copy; ?></h3>
            <?php else: ?>
              <h3 class="minimize-text" data-length="-1" data-tablet-length="130" data-mobile-length="-1">No Copy</h3>
            <?php endif; ?>
          </div>

          <?php if (isset($default_copy_and_image_link_copy) && 
                    $default_copy_and_image_link_copy != '' &&
                    isset($default_copy_and_image_link_url) && 
                    $default_copy_and_image_link_url != ''): ?>
            <div class="cta-container hidden-xs hidden-sm">
              <a href="<?php echo home_url().$default_copy_and_image_link_url; ?>" class="plus-cta"><?php echo $default_copy_and_image_link_copy; ?></a>
            </div>
          <?php endif; ?>

      </div><!--
      --><div class="col-md-7 v-align-col">
        <div class="page-play-location-content-container">
          <div class="manic-image-container">
            <img src="" data-image-desktop="<?php echo $default_copy_and_image_image; ?>"
                          data-image-tablet="<?php echo $default_copy_and_image_image_tablet; ?>"
                          data-image-mobile="<?php echo $default_copy_and_image_image_mobile; ?>" alt="">
          </div>
        </div>


        <?php if (isset($default_copy_and_image_link_copy) && 
                    $default_copy_and_image_link_copy != '' &&
                    isset($default_copy_and_image_link_url) && 
                    $default_copy_and_image_link_url != ''): ?>
          <div class="cta-container visible-sm visible-xs">
            <a href="<?php echo home_url().$default_copy_and_image_link_url; ?>" class="plus-cta"><?php echo $default_copy_and_image_link_copy; ?></a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</article>