<?php
  $contact_banner_title = wds_page_builder_get_this_part_data( PREFIX . "contact_banner_title" );
  $contact_banner_image = wds_page_builder_get_this_part_data( PREFIX . "contact_banner_image" );
  $contact_banner_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "contact_banner_image_tablet" );
  $contact_banner_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "contact_banner_image_mobile" );

  // image
  $contact_banner_image_id = wds_page_builder_get_this_part_data( PREFIX . 'contact_banner_image_id' );
  $contact_banner_image_tablet = get_manic_tablet_image($contact_banner_image_id, $contact_banner_image_tablet);
  $contact_banner_image_mobile = get_manic_mobile_image($contact_banner_image_id, $contact_banner_image_mobile);
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

            <form name="contact-form" id="contact-form" action="<?php echo THEMEROOT; ?>/php/contact.php" class="default-form">
                    <div class="message">

                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-container">
                          <input type="text" name="first_name" placeholder="First Name*" maxlength="50" class="required">
                        </div>
                        <div class="input-container">
                          <input type="text" name="last_name" placeholder="Last Name*" maxlength="50" required>
                        </div>
                        <div class="input-container">
                          <input type="text" name="email" placeholder="Email Address*" maxlength="100" required>
                        </div>
                        <div class="input-container">
                          <div class="dropdown">
                            <select id="country_id" name="country_id">
                              <option value="general">General Enquiry</option>
                              <option value="1095">Kafnu Hong Kong</option>
                              <option value="1204">Kafnu Taipei</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-container">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Ask us here"></textarea>
            </div>
            <div class="input-container">
            <div class="g-recaptcha" data-sitekey="6Lf-OzEUAAAAALlNdYmI0wE8Y3lLvR0LKTsuz85M" style="transform:scale(0.90);-webkit-transform:scale(0.90);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
            <label id="captcha_error" class="error"></label>
                        </div>
                        <button type="submit" id="contact-form-send" class="square-cta border-white-version" onclick="return validateCaptcha()" style="margin-top:-5px;">Send</button>
                      </div>
                    </div>

                  </form>
                  <!--js-->
          <script src='https://www.google.com/recaptcha/api.js'></script>
          <script type="text/javascript">
          function validateCaptcha()
          {
                if(grecaptcha.getResponse() == "")
                {
                        $("#captcha_error").text("Please complete the Captcha!");
                        return false;
                }
                return true;
          }
          </script>

          </div> <!-- page-default-banner-copy -->

        </div>
      </div>
    </div>
  </div> <!-- page-default-banner-copy-container -->

</article> <!-- page-default-banner-section -->
