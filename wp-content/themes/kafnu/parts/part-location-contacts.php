<?php
$location_contacts_title = wds_page_builder_get_this_part_data( PREFIX . "location_contacts_title" );
$location_contacts_copy = wds_page_builder_get_this_part_data( PREFIX . "location_contacts_copy" );
$location_contacts_list = wds_page_builder_get_this_part_data( PREFIX . "location_contacts_list" );
$location_contacts_cta_text = wds_page_builder_get_this_part_data( PREFIX . "location_contacts_cta_text" );
$location_contacts_cta_url = wds_page_builder_get_this_part_data( PREFIX . "location_contacts_cta_url" );
$location_contacts_image = wds_page_builder_get_this_part_data( PREFIX . "location_contacts_image" );
$location_contacts_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "location_contacts_image_tablet" );
$location_contacts_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "location_contacts_image_mobile" );

  // image
$location_contacts_image_id = wds_page_builder_get_this_part_data( PREFIX . 'location_contacts_image_id' );
$location_contacts_image_tablet = get_manic_tablet_image($location_contacts_image_id, $location_contacts_image_tablet);  
$location_contacts_image_mobile = get_manic_mobile_image($location_contacts_image_id, $location_contacts_image_mobile);
?>

<article id="page-country-extra-content-section">
  <div class="container-fluid reduce-padding">
    <div class="page-country-extra-content-item <?php if(count($location_contacts_list) > 6) echo 'taipei-version'; ?>">
      <div class="row">
        <div class="col-md-6 no-padding v-align-col">
          <div class="manic-image-container">
            <img src="" data-image-desktop="<?php echo $location_contacts_image; ?>"
            data-image-tablet="<?php echo $location_contacts_image_tablet; ?>"
            data-image-mobile="<?php echo $location_contacts_image_mobile; ?>" alt="">
          </div>
        </div><!--
        --><div class="col-md-4 col-md-offset-1 no-padding v-align-col">
          <div class="page-country-main-content-item-text">
            <h4><?php echo $location_contacts_title; ?></h4>
            <!-- <h4>justin lorem</h4> -->
            <p><?php echo $location_contacts_copy; ?></p>
            <ul>
            <?php $col_break = 3; if(count($location_contacts_list) > 6) $col_break = 5; ?>

            <?php $counter = 1; foreach ($location_contacts_list as $key => $list): ?>              
              <li><span><?php echo $list; ?></span></li>
              <?php if($counter%$col_break==0) echo '</ul><ul>'; ?>
            <?php $counter++; endforeach; ?>                            
            </ul>
          </div> <!-- page-country-main-content-item-text -->
          <div class="page-country-main-content-item-cta-container">
            <a href="<?php echo home_url().$location_contacts_cta_url; ?>" class="square-cta border-white-version"><?php echo $location_contacts_cta_text; ?></a>
          </div>
        </div>
      </div> <!-- row -->
    </div> <!-- page-country-extra-content-item -->
  </div>
</article>