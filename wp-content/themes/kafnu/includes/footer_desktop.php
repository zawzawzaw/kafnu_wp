<?php 
  $footer_copyright = manic_get_option( PREFIX . 'footer_copyright' );
?>

  <!--
     _____ ___   ___ _____ _____ ____
    |  ___/ _ \ / _ \_   _| ____|  _ \
    | |_ | | | | | | || | |  _| | |_) |
    |  _|| |_| | |_| || | | |___|  _ <
    |_|   \___/ \___/ |_| |_____|_| \_\

  -->

  <footer id="footer-desktop">
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-md-3">
          <div id="footer-desktop-logo-container">
            <a id="footer-desktop-logo" href="<?php echo home_url(); ?>"></a>
          </div>
        </div>
        <div class="col-md-9">

          <div id="footer-copyright-and-links-container">
            <div class="row">
              <div class="col-lg-7 col-md-5">
                <p id="footer-copyright-container"><?php echo $footer_copyright; ?></p>
              </div>
              <div class="col-lg-5 col-md-7">
                <ul id="footer-links-container">
                  <li><a href="https://hongkong.kafnu.com/en/page/termsandconditions">Terms & Conditions</a></li>
                  <li><a href="https://hongkong.kafnu.com/en/page/privacy-policy">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
        
      </div> <!-- row -->

    </div>
  </footer> <!-- footer-desktop -->
