<?php 
  $press_release_banner_title = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_title" );
  $press_release_banner_subtitle = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_subtitle" );
  $press_release_banner_copy = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_copy" );
  $press_release_banner_cta = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_cta" );
  $press_release_banner_image = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_image" );
  $press_release_banner_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_image_tablet" );
  $press_release_banner_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_image_mobile" );
  
?>



<?php echo $press_release_banner_title; ?>




<?php echo $press_release_banner_copy; ?>


<?php if (isset($press_release_banner_cta) && $press_release_banner_cta != ''): ?>
  <?php echo $press_release_banner_cta; ?>
<?php endif; ?>

<img src="" data-image-desktop="<?php echo $press_release_banner_image; ?>">
<img src="" data-image-desktop="<?php echo $press_release_banner_image_tablet; ?>">
<img src="" data-image-desktop="<?php echo $press_release_banner_image_mobile; ?>">



<article id="page-default-banner-section" class="">
  <div id="page-default-banner-image" class="press-version visible-lg visible-md">
    <div class="container-fluid reduce-padding">
      <div class="row">
        <div class="col-lg-8 col-md-8 no-padding">
          <div class="manic-image-container">
            <img src="" data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-landing-banner.jpg">
          </div>

          <div id="page-default-banner-copy-container" class="left-version press-version">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">

                  <div id="page-default-banner-copy">
                    <?php if (isset($press_release_banner_subtitle) && $press_release_banner_subtitle != ''): ?>
                      <?php echo $press_release_banner_subtitle; ?>
                    <?php endif; ?>
                    <h5>Featured Story</h5>
                    <h2>Lorem ipsum dolor sitamet, cons ectetur adipiscring elit.</h2>
                    <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsan. Nulla facilisi. Fusce at aliquam magna, quis condimentum lacus. Curabitur in interdum sem praesent quis eros afsapien.</p>
                    
                    <a href="#" class="plus-cta">Read More</a>

                  </div> <!-- page-default-banner-copy -->

                </div>
              </div>
            </div>
          </div> <!-- page-default-banner-copy-container -->
        </div>
        <div class="col-lg-4 col-md-4 no-padding">
          <div id="banner-sidebar-container-02">

            <div id="banner-sidebar-content">

              <div class="banner-sidebar-title">
                <h5>Press Releases</h5>                  
              </div>              

              <div class="banner-sidebar-item">              
                <div class="banner-sidebar-item-text">                
                  <p>20 October 2017, Kafnu Taipei</p>
                  <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>
                </div>
              </div><!-- banner-sidebar-item -->                              

              <div class="banner-sidebar-item">              
                <div class="banner-sidebar-item-text">                
                  <p>20 October 2017, Kafnu Taipei</p>
                  <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>
                </div>
              </div><!-- banner-sidebar-item -->                              

              <div class="banner-sidebar-item">              
                <div class="banner-sidebar-item-text">                
                  <p>20 October 2017, Kafnu Taipei</p>
                  <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>
                </div>
              </div><!-- banner-sidebar-item -->                              

              <div class="banner-sidebar-item">              
                <div class="banner-sidebar-item-text">                
                  <p>20 October 2017, Kafnu Taipei</p>
                  <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>
                </div>
              </div><!-- banner-sidebar-item -->                              

              <div class="banner-sidebar-cta">              
                <a href="<?php echo get_the_permalink('press'); ?>" class="square-cta border-version">See More Press Releases</a>
              </div><!-- banner-sidebar-item -->                   

            </div>           

          </div> <!-- banner-sidebar-container -->
        </div>
      </div> <!-- row -->
    </div>
  </div> <!-- page-default-banner-image -->
  
  <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
    <div class="manic-image-container has-window-height">
      <img src="" data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-landing-banner-tablet.jpg""
                  data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-landing-banner-mobile.jpg"">
    </div>
    <div id="banner-sidebar-container-02">

      <div id="banner-sidebar-content">

        <div class="banner-sidebar-title">
          <h5>Press Releases</h5>                  
        </div>              

        <div class="banner-sidebar-item">              
          <div class="banner-sidebar-item-text">                
            <p>20 October 2017, Kafnu Taipei</p>
            <a href=""><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>
          </div>
        </div><!-- banner-sidebar-item -->                              

        <div class="banner-sidebar-item">              
          <div class="banner-sidebar-item-text">                
            <p>20 October 2017, Kafnu Taipei</p>
            <a href=""><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>
          </div>
        </div><!-- banner-sidebar-item -->                              

        <div class="banner-sidebar-item">              
          <div class="banner-sidebar-item-text">                
            <p>20 October 2017, Kafnu Taipei</p>
            <a href=""><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>
          </div>
        </div><!-- banner-sidebar-item -->                              

        <div class="banner-sidebar-item">              
          <div class="banner-sidebar-item-text">                
            <p>20 October 2017, Kafnu Taipei</p>
            <a href=""><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>
          </div>
        </div><!-- banner-sidebar-item -->                              

        <div class="banner-sidebar-cta">              
          <a href="<?php echo get_the_permalink('press'); ?>" class="square-cta border-version">See More Press Releases</a>
        </div><!-- banner-sidebar-item -->                   

      </div>           

    </div> <!-- banner-sidebar-container -->      
  </div>

</article> <!-- page-default-banner-section -->