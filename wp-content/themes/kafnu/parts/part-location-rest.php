<?php 

  $location_rest_image = wds_page_builder_get_this_part_data( PREFIX . "location_rest_image" );
  $location_rest_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "location_rest_image_tablet" );
  $location_rest_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "location_rest_image_mobile" );
  $location_rest_title = wds_page_builder_get_this_part_data( PREFIX . "location_rest_title" );
  $location_rest_subtitle = wds_page_builder_get_this_part_data( PREFIX . "location_rest_subtitle" );
  $location_rest_icons = wds_page_builder_get_this_part_data( PREFIX . "location_rest_icons" );
  $location_rest_lists = wds_page_builder_get_this_part_data( PREFIX . "location_rest_list" );

    // image
  $location_rest_image_id = wds_page_builder_get_this_part_data( PREFIX . 'location_rest_image_id' );
  $location_rest_image_tablet = get_manic_tablet_image($location_rest_image_id, $location_rest_image_tablet);  
  $location_rest_image_mobile = get_manic_mobile_image($location_rest_image_id, $location_rest_image_mobile);
?>
<article id="page-country-main-content-section">
  <div class="container-fluid reduce-padding">

    <div id="page-country-main-content-item-container" class="hidden-xs hidden-sm">

      <div class="page-country-main-content-item">
        <div class="row">
          <div class="col-md-6 no-padding v-align-col">
            <div class="manic-image-container">
              <img src="" data-image-desktop="<?php echo $location_rest_image; ?>"
              data-image-tablet="<?php echo $location_rest_image_tablet; ?>"
              data-image-mobile="<?php echo $location_rest_image_mobile; ?>" alt="">
            </div>
          </div><!--
          --><div class="col-md-4 col-md-offset-1 no-padding v-align-col">
            <div class="page-country-main-content-item-text">
              <h5><?php echo $location_rest_title; ?></h5>
              <h6><?php echo $location_rest_subtitle; ?></h6>
              <ul>
                <?php foreach ($location_rest_icons as $key => $location_rest_icon): ?>
                  <li class="<?php echo $location_rest_icon; ?>">
                    <p class="title"><?php echo $location_rest_lists[$key]; ?></p>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div> <!-- page-country-main-content-item-text -->
          </div>
        </div> <!-- row -->
      </div> <!-- page-country-main-content-item -->

    </div>
  </div>
</article>