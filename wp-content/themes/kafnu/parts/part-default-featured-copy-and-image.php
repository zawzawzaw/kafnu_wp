<?php 


  $default_featured_copy_and_image_copy = wds_page_builder_get_this_part_data( PREFIX . "default_featured_copy_and_image_copy" );

  $default_featured_copy_and_image_image = wds_page_builder_get_this_part_data( PREFIX . "default_featured_copy_and_image_image" );
  $default_featured_copy_and_image_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "default_featured_copy_and_image_image_tablet" );
  $default_featured_copy_and_image_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "default_featured_copy_and_image_image_mobile" );

  $default_featured_copy_and_image_image_id = wds_page_builder_get_this_part_data( PREFIX . 'default_featured_copy_and_image_image_id' );
  $default_featured_copy_and_image_image_tablet = get_manic_tablet_image($default_featured_copy_and_image_image_id, $default_featured_copy_and_image_image_tablet);  
  $default_featured_copy_and_image_image_mobile = get_manic_mobile_image($default_featured_copy_and_image_image_id, $default_featured_copy_and_image_image_mobile);
?>


<article id="page-play-slider-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">

        <div id="page-play-slider-title">
          <?php if (isset($default_featured_copy_and_image_copy) && $default_featured_copy_and_image_copy != ''): ?>
            <h3><?php echo $default_featured_copy_and_image_copy; ?></h3>
          <?php else: ?>
            <h3>No Title</h3>
          <?php endif; ?>
        </div> <!-- page-play-slider-title -->

        <div id="page-play-slider-container">

          <div id="page-play-slider" class="kafnu-slick-slider">
            <div class="page-play-slider-item">
              <div class="manic-image-container">
                <img src=""
                  data-image-desktop="<?php echo $default_featured_copy_and_image_image; ?>"
                  data-image-tablet="<?php echo $default_featured_copy_and_image_image_tablet; ?>"
                  data-image-mobile="<?php echo $default_featured_copy_and_image_image_mobile; ?>" alt="">
              </div>
            </div>                                  
          </div>                

        </div> <!-- page-play-slider-container -->

      </div>
    </div> <!-- row -->
  </div>
</article> <!-- page-play-slider-section -->