<?php 
  $contact_map_02_id = wds_page_builder_get_this_part_data( PREFIX . "contact_map_02_id" );
  $contact_map_02_latitude = wds_page_builder_get_this_part_data( PREFIX . "contact_map_02_latitude" );
  $contact_map_02_longitude = wds_page_builder_get_this_part_data( PREFIX . "contact_map_02_longitude" );

  $contact_map_02_country = wds_page_builder_get_this_part_data( PREFIX . "contact_map_02_country" );
  $contact_map_02_address = wds_page_builder_get_this_part_data( PREFIX . "contact_map_02_address" );
  $contact_map_02_email = wds_page_builder_get_this_part_data( PREFIX . "contact_map_02_email" );
?>

<div class="has-map-element"></div>

<article id="page-contact-find-us-section">
  <div class="container-fluid">
    <div id="taipei-map-container" class="hidden-xs hidden-sm">
      <div class="row">
        <div class="col-md-4 text-col hidden-xs hidden-sm">
          <div class="page-contact-find-us-text-box-container">
            <h2><?php echo $contact_map_02_country; ?></h2>
            <div class="address">
              <h6>Address</h6>
              <p><?php echo $contact_map_02_address; ?></p>
            </div>
            
            <div class="email">
              <h6>Email</h6>
              <a href="mailto:<?php echo $contact_map_02_email; ?>"><?php echo $contact_map_02_email; ?></a>
            </div>
          </div>
        </div>
        <div class="col-md-8 map-col col-md-offset-4">

          <div id="<?php echo $contact_map_02_id; ?>"
            class="kafnu-google-map"
            data-pin="<?php echo THEMEROOT; ?>/kafnu_assets/images/icons/map-pin.svg"
            data-lat="<?php echo $contact_map_02_latitude; ?>"
            data-lng="<?php echo $contact_map_02_longitude; ?>"> 
          </div>

        </div>        
      </div>
    </div>
  </div>

  <div id="taipei-map-container-mobile" class="visible-xs visible-sm">
     <div class="manic-expand-container mobile-open-version">
        <div class="scroll-target" data-value="taipei-map"></div>
        <div class="manic-expand-container-title">
            <h5><?php echo $contact_map_02_country; ?></h5> 
        </div>
        <div class="manic-expand-container-btn"></div>
        <div class="manic-expand-container-content">
          <div class="container-fluid reduce-padding">
            <div class="row">              
              <div class="col-md-8 map-col">

                <div id="<?php echo $contact_map_02_id; ?>-mobile"
                  class="kafnu-google-map mobile-version"
                  data-pin="<?php echo THEMEROOT; ?>/kafnu_assets/images/icons/map-pin.svg"
                  data-lat="<?php echo $contact_map_02_latitude; ?>"
                  data-lng="<?php echo $contact_map_02_longitude; ?>"> 
                </div>

              </div>
              <div class="col-md-4 text-col">
                <div class="page-contact-find-us-text-box-container">
                  <h2><?php echo $contact_map_02_country; ?></h2>
                  <div class="address">
                    <h6>Address</h6>
                    <p><?php echo $contact_map_02_address; ?></p>
                  </div>
                  
                  <div class="email">
                    <h6>Email</h6>
                    <a href="mailto:<?php echo $contact_map_02_email; ?>"><?php echo $contact_map_02_email; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</article>