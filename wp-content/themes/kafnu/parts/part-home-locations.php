<?php 

$home_locations_item_01 = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_item_01');
$home_locations_item_01_image = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_item_01_image');

$home_locations_item_02 = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_item_02');
$home_locations_item_02_image = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_item_02_image');

$home_locations_upcoming_01 = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_upcoming_01');
$home_locations_upcoming_02 = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_upcoming_02');
$home_locations_upcoming_03 = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_upcoming_03');
$home_locations_upcoming_04 = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_upcoming_04');
$home_locations_upcoming_05 = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_upcoming_05');
$home_locations_upcoming_06 = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_upcoming_06');

$home_locations_upcoming_title_mobile = wds_page_builder_get_this_part_data( PREFIX . 'home_locations_upcoming_title_mobile');
?>









<!--
   _   _  ___  __  __ _____   _     ___   ____    _  _____ ___ ___  _   _ ____
  | | | |/ _ \|  \/  | ____| | |   / _ \ / ___|  / \|_   _|_ _/ _ \| \ | / ___|
  | |_| | | | | |\/| |  _|   | |  | | | | |     / _ \ | |  | | | | |  \| \___ \
  |  _  | |_| | |  | | |___  | |__| |_| | |___ / ___ \| |  | | |_| | |\  |___) |
  |_| |_|\___/|_|  |_|_____| |_____\___/ \____/_/   \_\_| |___\___/|_| \_|____/

-->

<div class="has-wow-element"></div>

<article id="page-home-boxes-section">
  <div class="container-fluid reduce-padding">
    
    <div class="row">
      <div data-wow-offset="50" class="col-md-8 no-padding wow fadeInUp">
        <div class="scroll-target" data-value="location"></div>          
        <div id="home-box-slider" class="kafnu-slick-slider">

          <?php 
            // this is weird array of id's with strings inside
            foreach ($home_locations_item_01_image as $location_image_id => $value): 

              $location_image = $value;
              // $location_image_tablet = get_manic_tablet_image($location_image_id, $location_image_tablet);   // tablet same size as the desktop
              
              $location_image_mobile = null;
              $location_image_mobile = get_manic_mobile_image($location_image_id, $location_image_mobile);
          ?>

            <div class="home-box-slider-item <?php echo $location_image_id; ?>">
              <div class="manic-image-container">
                <img src="" 
                  data-image-desktop="<?php echo $location_image; ?>"
                  data-image-tablet="<?php echo $location_image; ?>"
                  data-image-mobile="<?php echo $location_image_mobile; ?>" alt="">
              </div>
            </div>

          <?php endforeach; ?>
        </div>

      </div>
      <div data-wow-offset="100" class="col-md-4 no-padding wow fadeInUp">
        
        <div class="home-box-item text-version color-version">
          <div class="text-container">
            <h2><?php echo $home_locations_item_01['title']; ?></h2>
            <p><?php echo $home_locations_item_01['copy']; ?></p>                  
          </div>

          <?php if (isset($home_locations_item_01['url'])): ?>
            <div class="cta-container">
              <a href="<?php echo home_url( $home_locations_item_01['url'] ); ?>" class="plus-icon"></a>
            </div>
          <?php endif; ?>
        </div>

      </div>            
    </div> <!-- row -->

    <div class="row">
      <div data-wow-offset="50" class="col-md-8 no-padding wow fadeInUp ">
        <div id="home-box-slider-02" class="kafnu-slick-slider">

          <?php 
            // this is weird array of id's with strings inside
            foreach ($home_locations_item_02_image as $location_image_id => $value): 

              $location_image = $value;
              // $location_image_tablet = get_manic_tablet_image($location_image_id, $location_image_tablet);   // tablet same size as the desktop
              
              $location_image_mobile = null;
              $location_image_mobile = get_manic_mobile_image($location_image_id, $location_image_mobile);
          ?>

            <div class="home-box-slider-item">
              <div class="manic-image-container">
                <img src="" 
                  data-image-desktop="<?php echo $location_image; ?>"
                  data-image-tablet="<?php echo $location_image; ?>"
                  data-image-mobile="<?php echo $location_image_mobile; ?>" alt="">
              </div>
            </div>

          <?php endforeach; ?>

        </div>
      </div>
      <div data-wow-offset="100" class="col-md-4 no-padding wow fadeInUp">
        
        <div class="home-box-item text-version">
          
          
          
          <div class="text-container">
            <h2><?php echo $home_locations_item_02['title']; ?></h2>
            <p><?php echo $home_locations_item_02['copy']; ?></p>                  
          </div>

          <?php if (isset($home_locations_item_02['url'])): ?>
            <div class="cta-container">
              <a href="<?php echo home_url( $home_locations_item_02['url'] ); ?>" class="plus-icon"></a>
            </div>
          <?php endif; ?>
        </div>

      </div>            
    </div> <!-- row -->

    <div id="home-box-items-container" class="hidden-xs hidden-sm">

      <div class="row">


        <div class="home-box-item-column">
          <div class="col-md-4 no-padding">
            <?php if (isset($home_locations_upcoming_01['title']) && $home_locations_upcoming_01['title'] != ''): ?>
              <div class="home-box-item text-version-02 no-link-version">
                <div class="overlay-bg"></div>
                <div class="text-container">
                  <h4><?php echo $home_locations_upcoming_01['title']; ?></h4>
                  <?php if (isset($home_locations_upcoming_01['titlehover'])): ?>
                    <h6><?php echo $home_locations_upcoming_01['titlehover']; ?></h6>
                  <?php endif; ?>
                </div>
              </div>

            <?php else: ?>
              <div class="home-box-item text-version-02 no-link-version coming-soon"><div class="overlay-bg"></div><div class="text-container">
                <h4>Coming <br class="visible-xs">soon</h4>
              </div></div>

            <?php endif; ?>
            
          </div>
        </div>
        
        <div class="home-box-item-column">
          <div class="col-md-4 no-padding">
            <?php if (isset($home_locations_upcoming_02['title']) && $home_locations_upcoming_02['title'] != ''): ?>
              <div class="home-box-item text-version-02 no-link-version">
                <div class="overlay-bg"></div>
                <div class="text-container">
                  <h4><?php echo $home_locations_upcoming_02['title']; ?></h4>
                  <?php if (isset($home_locations_upcoming_02['titlehover'])): ?>
                    <h6><?php echo $home_locations_upcoming_02['titlehover']; ?></h6>
                  <?php endif; ?>
                </div>
              </div>

            <?php else: ?>
              <div class="home-box-item text-version-02 no-link-version coming-soon"><div class="overlay-bg"></div><div class="text-container">
                <h4>Coming <br class="visible-xs">soon</h4>
              </div></div>

            <?php endif; ?>

          </div>
        </div>
        
        <div class="home-box-item-column">
          <div class="col-md-4 no-padding">
            <?php if (isset($home_locations_upcoming_03['title']) && $home_locations_upcoming_03['title'] != ''): ?>
              <div class="home-box-item text-version-02 no-link-version">
                <div class="overlay-bg"></div>
                <div class="text-container">                    
                  <h4><?php echo $home_locations_upcoming_03['title']; ?></h4>
                  <?php if (isset($home_locations_upcoming_03['titlehover'])): ?>
                    <h6><?php echo $home_locations_upcoming_03['titlehover']; ?></h6>
                  <?php endif; ?>
                </div>
              </div>

            <?php else: ?>
              <div class="home-box-item text-version-02 no-link-version coming-soon"><div class="overlay-bg"></div><div class="text-container">
                <h4>Coming <br class="visible-xs">soon</h4>
              </div></div>

            <?php endif; ?>
          </div>
        </div>
      </div> <!-- row -->

      <div class="row">

        <div class="home-box-item-column last-row-version">
          <div class="col-md-4 no-padding">
            <?php if (isset($home_locations_upcoming_04['title']) && $home_locations_upcoming_04['title'] != ''): ?>
              <div class="home-box-item text-version-02 no-link-version">
                <div class="overlay-bg"></div>
                <div class="text-container">                    
                  <h4><?php echo $home_locations_upcoming_04['title']; ?></h4>
                  <?php if (isset($home_locations_upcoming_04['titlehover'])): ?>
                    <h6><?php echo $home_locations_upcoming_04['titlehover']; ?></h6>
                  <?php endif; ?>
                </div>
              </div>

            <?php else: ?>
              <div class="home-box-item text-version-02 no-link-version coming-soon"><div class="overlay-bg"></div><div class="text-container">
                <h4>Coming <br class="visible-xs">soon</h4>
              </div></div>

            <?php endif; ?>

          </div>
        </div>
        
        <div class="home-box-item-column last-row-version">
          <div class="col-md-4 no-padding">
            <?php if (isset($home_locations_upcoming_05['title']) && $home_locations_upcoming_05['title'] != ''): ?>
              <div class="home-box-item text-version-02 no-link-version">
                <div class="overlay-bg"></div>
                <div class="text-container">                    
                  <h4><?php echo $home_locations_upcoming_05['title']; ?></h4>
                  <?php if (isset($home_locations_upcoming_05['titlehover'])): ?>
                    <h6><?php echo $home_locations_upcoming_05['titlehover']; ?></h6>
                  <?php endif; ?>
                </div>
              </div>

            <?php else: ?>
              <div class="home-box-item text-version-02 no-link-version coming-soon"><div class="overlay-bg"></div><div class="text-container">
                <h4>Coming <br class="visible-xs">soon</h4>
              </div></div>

            <?php endif; ?>

          </div>
        </div>
        
        <div class="home-box-item-column coming-soon-version">
          <div class="col-md-4 no-padding">              

            <?php if (isset($home_locations_upcoming_06['title']) && $home_locations_upcoming_06['title'] != ''): ?>
              <div class="home-box-item text-version-02 no-link-version">
                <div class="overlay-bg"></div>
                <div class="text-container">                    
                  <h4><?php echo $home_locations_upcoming_06['title']; ?></h4>
                  <?php if (isset($home_locations_upcoming_06['titlehover'])): ?>
                    <h6><?php echo $home_locations_upcoming_06['titlehover']; ?></h6>
                  <?php endif; ?>
                </div>
              </div>

            <?php else: ?>
              <div class="home-box-item text-version-02 no-link-version coming-soon"><div class="overlay-bg"></div><div class="text-container">
                <h4>Coming <br class="visible-xs">soon</h4>
              </div></div>

            <?php endif; ?>


          </div>
        </div>
      </div> <!-- row -->

    </div> <!-- home-box-items-container -->



    
    <div id="home-box-items-wrapper-mobile" class="visible-xs visible-sm">
      <div id="home-box-items-container-mobile-toggle">
        <div class="row">
          <div class="col-sm-12 no-padding">
            <h4><?php echo $home_locations_upcoming_title_mobile; ?></h4>
            <div class="cta-container">
              <a href="#" class="dropdown-arrow-icon up-icon"></a>
            </div>
          </div>
        </div>
      </div>
      <div id="home-box-items-container-mobile">

        <div class="row no-margin">


          <?php if (isset($home_locations_upcoming_01['title']) && $home_locations_upcoming_01['title'] != ''): ?>
            <div class="home-box-item-column no-link-version">
              <div class="col-sm-12 no-padding">              
                <div class="home-box-item text-version-02 no-link-version">
                  <div class="text-container">
                    <h4><?php echo $home_locations_upcoming_01['title']; ?></h4>
                  </div>                    
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if (isset($home_locations_upcoming_02['title']) && $home_locations_upcoming_02['title'] != ''): ?>
            <div class="home-box-item-column no-link-version">
              <div class="col-sm-12 no-padding">              
                <div class="home-box-item text-version-02 no-link-version">
                  <div class="text-container">
                    <h4><?php echo $home_locations_upcoming_02['title']; ?></h4>
                  </div>                    
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if (isset($home_locations_upcoming_03['title']) && $home_locations_upcoming_03['title'] != ''): ?>
            <div class="home-box-item-column no-link-version">
              <div class="col-sm-12 no-padding">              
                <div class="home-box-item text-version-02 no-link-version">
                  <div class="text-container">
                    <h4><?php echo $home_locations_upcoming_03['title']; ?></h4>
                  </div>                    
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if (isset($home_locations_upcoming_04['title']) && $home_locations_upcoming_04['title'] != ''): ?>
            <div class="home-box-item-column no-link-version">
              <div class="col-sm-12 no-padding">              
                <div class="home-box-item text-version-02 no-link-version">
                  <div class="text-container">
                    <h4><?php echo $home_locations_upcoming_04['title']; ?></h4>
                  </div>                    
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if (isset($home_locations_upcoming_05['title']) && $home_locations_upcoming_05['title'] != ''): ?>
            <div class="home-box-item-column no-link-version">
              <div class="col-sm-12 no-padding">              
                <div class="home-box-item text-version-02 no-link-version">
                  <div class="text-container">
                    <h4><?php echo $home_locations_upcoming_05['title']; ?></h4>
                  </div>                    
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if (isset($home_locations_upcoming_06['title']) && $home_locations_upcoming_06['title'] != ''): ?>
            <div class="home-box-item-column no-link-version">
              <div class="col-sm-12 no-padding">              
                <div class="home-box-item text-version-02 no-link-version">
                  <div class="text-container">
                    <h4><?php echo $home_locations_upcoming_06['title']; ?></h4>
                  </div>                    
                </div>
              </div>
            </div>
          <?php endif; ?>


        </div> <!-- row --> 
      </div> <!-- home-box-items-container-mobile -->
    </div>





  </div> <!-- container-fluid -->
</div> <!-- page-home-boxes-section -->