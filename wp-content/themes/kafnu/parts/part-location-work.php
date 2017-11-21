<?php 

  $location_work_image = wds_page_builder_get_this_part_data( PREFIX . "location_work_image" );
  $location_work_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "location_work_image_tablet" );
  $location_work_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "location_work_image_mobile" );
  $location_work_title = wds_page_builder_get_this_part_data( PREFIX . "location_work_title" );
  $location_work_subtitle = wds_page_builder_get_this_part_data( PREFIX . "location_work_subtitle" );
  $location_work_icons = wds_page_builder_get_this_part_data( PREFIX . "location_work_icons" );
  $location_work_lists = wds_page_builder_get_this_part_data( PREFIX . "location_work_list" );

    // image
  $location_work_image_id = wds_page_builder_get_this_part_data( PREFIX . 'location_work_image_id' );
  $location_work_image_tablet = get_manic_tablet_image($location_work_image_id, $location_work_image_tablet);  
  $location_work_image_mobile = get_manic_mobile_image($location_work_image_id, $location_work_image_mobile);
?>
<article id="page-country-main-content-section">
  <div class="container-fluid reduce-padding">

    <div id="page-country-main-content-item-container" class="hidden-xs hidden-sm">

      <div class="page-country-main-content-item">
        <div class="row">
          <div class="col-md-4 no-padding v-align-col left-col">
            <div class="page-country-main-content-item-text">
              <h5><?php echo $location_work_title; ?></h5>
              <h6><?php echo $location_work_subtitle; ?></h6>
              <ul>
                <?php foreach ($location_work_icons as $key => $location_work_icon): ?>
                  <li class="<?php echo $location_work_icon; ?>">
                    <p class="title"><?php echo $location_work_lists[$key]; ?></p>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div> <!-- page-country-main-content-item-text -->
          </div><!--
          --><div class="col-md-8 no-padding v-align-col">
            <div class="manic-image-container">
              <img src="" data-image-desktop="<?php echo $location_work_image; ?>"
              data-image-tablet="<?php echo $location_work_image_tablet; ?>"
              data-image-mobile="<?php echo $location_work_image_mobile; ?>" alt="">
            </div>
          </div>
        </div>
      </div> <!-- page-country-main-content-item -->      

    </div>
  </div>
</article>

<div class="page-country-hidden-mobile-slider-part" style="display:none">
  <div class="page-country-main-content-item">
    <div class="row no-margin">
      <div class="col-sm-12 no-padding">
        <div class="manic-image-container">
          <img src=""
            data-image-tablet="<?php echo $location_work_image_tablet; ?>"
            data-image-mobile="<?php echo $location_work_image_mobile; ?>" alt="">
        </div>
      </div>
      <div class="col-sm-12 no-padding">
        <div class="page-country-main-content-item-text">
          <h5><?php echo $location_work_title; ?></h5>
          <h6><?php echo $location_work_subtitle; ?></h6>
          <ul>

            <?php foreach ($location_work_icons as $key => $location_work_icon): ?>
              <li>
                <i class="<?php echo $location_work_icon; ?>"></i>
                <p class="title"><?php echo $location_work_lists[$key]; ?></p>
              </li>
            <?php endforeach; ?>
            
          </ul>
        </div> <!-- page-country-main-content-item-text -->
      </div>
    </div> <!-- row -->
  </div> <!-- page-country-main-content-item -->
</div> <!-- page-country-hidden-mobile-slider-part -->