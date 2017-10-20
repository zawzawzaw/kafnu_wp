<?php 

  $location_play_image = wds_page_builder_get_this_part_data( PREFIX . "location_play_image" );
  $location_play_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "location_play_image_tablet" );
  $location_play_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "location_play_image_mobile" );
  $location_play_image_02 = wds_page_builder_get_this_part_data( PREFIX . "location_play_image_02" );
  $location_play_image_02_tablet = wds_page_builder_get_this_part_data( PREFIX . "location_play_image_02_tablet" );
  $location_play_image_02_mobile = wds_page_builder_get_this_part_data( PREFIX . "location_play_image_02_mobile" );
  $location_play_title = wds_page_builder_get_this_part_data( PREFIX . "location_play_title" );
  $location_play_subtitle = wds_page_builder_get_this_part_data( PREFIX . "location_play_subtitle" );
  $location_play_icons = wds_page_builder_get_this_part_data( PREFIX . "location_play_icons" );
  $location_play_lists = wds_page_builder_get_this_part_data( PREFIX . "location_play_list" );

    // image
  $location_play_image_id = wds_page_builder_get_this_part_data( PREFIX . 'location_play_image_id' );
  $location_play_image_tablet = get_manic_tablet_image($location_play_image_id, $location_play_image_tablet);  
  $location_play_image_mobile = get_manic_mobile_image($location_play_image_id, $location_play_image_mobile);

  $location_play_image_02_id = wds_page_builder_get_this_part_data( PREFIX . 'location_play_image_02_id' );
  $location_play_image_02_tablet = get_manic_tablet_image($location_play_image_02_id, $location_play_image_02_tablet);  
  $location_play_image_02_mobile = get_manic_mobile_image($location_play_image_02_id, $location_play_image_02_mobile);
?>
<article id="page-country-main-content-section">
  <div class="container-fluid reduce-padding">

    <div id="page-country-main-content-item-container" class="hidden-xs hidden-sm">

      <div class="page-country-main-content-item">
        <div class="row">
          <div class="col-md-8 no-padding v-align-col">
            <div class="two-col-image-container">
              <div class="manic-image-container two-col-image">
                <img src="" data-image-desktop="<?php echo $location_play_image; ?>"
              data-image-tablet="<?php echo $location_play_image_tablet; ?>"
              data-image-mobile="<?php echo $location_play_image_mobile; ?>" alt="">
              </div><!--
              --><div class="manic-image-container two-col-image">
                <img src="" data-image-desktop="<?php echo $location_play_image_02; ?>"
              data-image-tablet="<?php echo $location_play_image_02_tablet; ?>"
              data-image-mobile="<?php echo $location_play_image_02_mobile; ?>" alt="">
              </div>
            </div>
          </div><!--
          --><div class="col-md-4 no-padding v-align-col right-col">
            <div class="page-country-main-content-item-text">
              <h5><?php echo $location_play_title; ?></h5>
              <ul>
                <?php foreach ($location_play_icons as $key => $location_play_icon): ?>
                  <li class="<?php echo $location_play_icon; ?>">
                    <p class="title"><?php echo $location_play_lists[$key]; ?></p>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div> <!-- page-country-main-content-item-text -->
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
            data-image-tablet="<?php echo $location_play_image_tablet; ?>"
            data-image-mobile="<?php echo $location_play_image_mobile; ?>" alt="">
        </div>
      </div>
      <div class="col-sm-12 no-padding">
        <div class="page-country-main-content-item-text">
          <h5><?php echo $location_play_title; ?></h5>
          <ul>
            <?php foreach ($location_play_icons as $key => $location_play_icon): ?>
              <li>
                <i class="<?php echo $location_play_icon; ?>"></i>
                <p class="title"><?php echo $location_play_lists[$key]; ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        </div> <!-- page-country-main-content-item-text -->
      </div>
    </div> <!-- row -->
  </div> <!-- page-country-main-content-item -->
</div> <!-- page-country-hidden-mobile-slider-part -->