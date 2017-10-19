<?php 
  $contact_map_title = wds_page_builder_get_this_part_data( PREFIX . "contact_map_title" );

  $contact_map_id = wds_page_builder_get_this_part_data( PREFIX . "contact_map_id" );
  $contact_map_latitude = wds_page_builder_get_this_part_data( PREFIX . "contact_map_latitude" );
  $contact_map_longitude = wds_page_builder_get_this_part_data( PREFIX . "contact_map_longitude" );

  $contact_map_country = wds_page_builder_get_this_part_data( PREFIX . "contact_map_country" );
  $contact_map_address = wds_page_builder_get_this_part_data( PREFIX . "contact_map_address" );
  $contact_map_email = wds_page_builder_get_this_part_data( PREFIX . "contact_map_email" );
?>

<div class="has-map-element"></div>

<article id="page-contact-find-us-section">
  <div class="container-fluid">

    <?php if (isset($contact_map_title) && $contact_map_title != ''): ?>
      <div id="page-contact-find-us-title">
        <h2><?php echo $contact_map_title; ?></h2>
      </div>
    <?php endif; ?>

    <div id="hong-kong-map-container" class="hidden-xs hidden-sm">

      <div class="row">              
        <div class="col-md-8 map-col">
          <div id="<?php echo $contact_map_id; ?>" 
            class="kafnu-google-map"
            data-pin="<?php echo THEMEROOT; ?>/kafnu_assets/images/icons/map-pin.svg"
            data-lat="<?php echo $contact_map_latitude; ?>" 
            data-lng="<?php echo $contact_map_longitude; ?>"></div>
        </div>
        <div class="col-md-4 text-col">
          <div class="page-contact-find-us-text-box-container">
            <h2><?php echo $contact_map_country; ?></h2>
            <div class="address">
              <h6>Address</h6>
              <?php echo $contact_map_address; ?>                
            </div>
            
            <div class="email">
              <h6>Email</h6>
              <a href="mailto:<?php echo $contact_map_email; ?>"><?php echo $contact_map_email; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="hong-kong-map-container-mobile" class="visible-xs visible-sm">
    <div class="manic-expand-container mobile-open-version">
      <div class="scroll-target" data-value="hong-kong-map"></div>
      <div class="manic-expand-container-title">
          <h5><?php echo $contact_map_country; ?></h5> 
      </div>
      <div class="manic-expand-container-btn"></div>
      <div class="manic-expand-container-content">
        <div class="container-fluid reduce-padding">
          <div class="row">              
            <div class="col-md-8 no-padding">

              <div id="<?php echo $contact_map_id; ?>-mobile" 
                class="kafnu-google-map mobile-version"
                data-pin="<?php echo THEMEROOT; ?>/kafnu_assets/images/icons/map-pin.svg"
                data-lat="<?php echo $contact_map_latitude; ?>" 
                data-lng="<?php echo $contact_map_longitude; ?>">
              </div>

            </div>
            <div class="col-md-4 no-padding text-col">
              <div class="page-contact-find-us-text-box-container">
                <h2><?php echo $contact_map_country; ?></h2>
                <div class="address">
                  <h6>Address</h6>
                  <?php echo $contact_map_address; ?>
                </div>
                
                <div class="email">
                  <h6>Email</h6>
                  <a href="mailto:<?php echo $contact_map_email; ?>"><?php echo $contact_map_email; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>