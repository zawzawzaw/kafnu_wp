<?php 
  $footer_copyright = manic_get_option( PREFIX . 'footer_copyright' );
  $site_language = manic_get_option( PREFIX . 'site_language' );
?>

  

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

              <?php if (has_nav_menu('footer-links')): ?>

                <div class="col-lg-7 col-md-5">
                  <p id="footer-copyright-container"><?php echo $footer_copyright; ?></p>
                </div>
                <div class="col-lg-5 col-md-7">
                  <?php
                    $defaults = array(
                      'echo' => true,
                      'container' => false,
                      'items_wrap'      => '<ul id="footer-links-container">%3$s</ul>',
                      'theme_location'  => 'footer-links',
                      'menu_class'      => 'footer-links'
                    );


                    wp_nav_menu($defaults);
                  ?>  
                </div>

              <?php else: ?>

                <div class="col-lg-12">
                  <p id="footer-copyright-container" class="chinese-version"><?php echo $footer_copyright; ?></p>
                </div>

              <?php endif; ?>
              
            </div>
          </div>
          
        </div>
        
      </div> <!-- row -->

    </div>
  </footer> <!-- footer-desktop -->
