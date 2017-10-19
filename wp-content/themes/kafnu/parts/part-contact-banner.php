<?php 
  $contact_banner_title = wds_page_builder_get_this_part_data( PREFIX . "contact_banner_title" );
  $contact_banner_image = wds_page_builder_get_this_part_data( PREFIX . "contact_banner_image" );
  $contact_banner_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "contact_banner_image_tablet" );
  $contact_banner_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "contact_banner_image_mobile" );
  $contact_banner_form_submit_url = wds_page_builder_get_this_part_data( PREFIX . "contact_banner_form_submit_url" );
?>
<article id="page-default-banner-section">
  <div id="page-default-banner-image" class="visible-lg visible-md">
    <div class="manic-image-container">
      <img src="" data-image-desktop="<?php echo $contact_banner_image; ?>">
    </div>
  </div>
  <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
    <div class="manic-image-container">
      <img src="" data-image-tablet="<?php echo $contact_banner_image_tablet; ?>"
                  data-image-mobile="<?php echo $contact_banner_image_mobile; ?>">
    </div>
  </div>

  <div id="page-default-banner-copy-container" class="form-version">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-6 col-md-8 col-md-offset-4">

          <div id="page-default-banner-copy">
            <h1><?php echo $contact_banner_title; ?></h1>
            
            <form name="contact-form" id="contact-form" action="<?php echo THEMEROOT . $contact_banner_form_submit_url; ?>" class="default-form">
              <div class="message">
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="input-container">
                    <input type="text" name="first_name" placeholder="First Name*" class="required">
                  </div>
                  <div class="input-container">
                    <input type="text" name="last_name" placeholder="Last Name*" required>
                  </div>
                  <div class="input-container">
                    <input type="text" name="email" placeholder="Email Address*" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <textarea name="message" id="" cols="30" rows="10" placeholder="Ask us here"></textarea>
                  <button type="submit" id="contact-form-send" class="square-cta border-white-version">Send</button>
                </div>
              </div>                    

            </form>
            
          </div> <!-- page-default-banner-copy -->

        </div>
      </div>
    </div>
  </div> <!-- page-default-banner-copy-container -->

</article> <!-- page-default-banner-section -->