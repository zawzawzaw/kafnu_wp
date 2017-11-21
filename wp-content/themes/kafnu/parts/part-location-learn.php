<?php 

  $location_learn_image = wds_page_builder_get_this_part_data( PREFIX . "location_learn_image" );
  $location_learn_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "location_learn_image_tablet" );
  $location_learn_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "location_learn_image_mobile" );
  $location_learn_title = wds_page_builder_get_this_part_data( PREFIX . "location_learn_title" );
  $location_learn_subtitle = wds_page_builder_get_this_part_data( PREFIX . "location_learn_subtitle" );
  $location_learn_icons = wds_page_builder_get_this_part_data( PREFIX . "location_learn_icons" );
  $location_learn_lists = wds_page_builder_get_this_part_data( PREFIX . "location_learn_list" );

    // image
  $location_learn_image_id = wds_page_builder_get_this_part_data( PREFIX . 'location_learn_image_id' );
  $location_learn_image_tablet = get_manic_tablet_image($location_learn_image_id, $location_learn_image_tablet);  
  $location_learn_image_mobile = get_manic_mobile_image($location_learn_image_id, $location_learn_image_mobile);
?>
<article id="page-country-main-content-section">
  <div class="container-fluid reduce-padding">

    <div id="page-country-main-content-item-container" class="hidden-xs hidden-sm">

      <div class="page-country-main-content-item">
        <div class="row">
          <div class="col-md-4 col-md-offset-1 no-padding v-align-col">
            <div class="page-country-main-content-item-text">
              <h5><?php echo $location_learn_title; ?></h5>
              <h6><?php echo $location_learn_subtitle; ?></h6>
              <ul>
                <?php foreach ($location_learn_icons as $key => $location_learn_icon): ?>
                  <li class="<?php echo $location_learn_icon; ?>">
                    <p class="title"><?php echo $location_learn_lists[$key]; ?></p>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div> <!-- page-country-main-content-item-text -->
          </div><!--
          --><div class="col-md-6 col-md-offset-1 no-padding v-align-col">
            <div class="manic-image-container">
              <img src="" data-image-desktop="<?php echo $location_learn_image; ?>"
              data-image-tablet="<?php echo $location_learn_image_tablet; ?>"
              data-image-mobile="<?php echo $location_learn_image_mobile; ?>" alt="">
            </div>
          </div>
        </div> <!-- row -->
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
            data-image-tablet="<?php echo $location_learn_image_tablet; ?>"
            data-image-mobile="<?php echo $location_learn_image_mobile; ?>" alt="">
        </div>
      </div>
      <div class="col-sm-12 no-padding">
        <div class="page-country-main-content-item-text">
          <h5><?php echo $location_learn_title; ?></h5>
          <h6><?php echo $location_learn_subtitle; ?></h6>
          <ul>
            <?php foreach ($location_learn_icons as $key => $location_learn_icon): ?>
              <li>
                <i class="<?php echo $location_learn_icon; ?>"></i>
                <p class="title"><?php echo $location_learn_lists[$key]; ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        </div> <!-- page-country-main-content-item-text -->
      </div>
    </div> <!-- row -->
  </div> <!-- page-country-main-content-item -->
</div> <!-- page-country-hidden-mobile-slider-part -->