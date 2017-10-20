<?php
$selected_location_booking_items = wds_page_builder_get_this_part_data( PREFIX . "location_booking_items" );
?>

<article id="page-default-booking-section" class="country-version">
  <div class="container-fluid reduce-padding">

    <div id="page-default-booking-item-desktop" class="hidden-sm hidden-xs">
      <div class="row">
        <?php

          //    ____ _____  _    ____ _____
          //   / ___|_   _|/ \  |  _ \_   _|
          //   \___ \ | | / _ \ | |_) || |
          //    ___) || |/ ___ \|  _ < | |
          //   |____/ |_/_/   \_\_| \_\|_|
          //

          global $post;

          $selected_location_booking_items_post_array = $selected_location_booking_items;                  // IMPORTANT

          if ($selected_location_booking_items_post_array != ''):


            // init
            $wow_offset = 45;


            for ($i=0; $i < count($selected_location_booking_items_post_array) ; $i++):

            $selected_booking_item_post_index = $i + 1;
            $selected_booking_item_post_id = $selected_location_booking_items_post_array[$i%count($selected_location_booking_items_post_array)];
            $post = get_post( $selected_booking_item_post_id );
            setup_postdata( $post );

            $selected_booking_item_post_status = get_post_status();

              if ($selected_booking_item_post_status == 'publish'):

                // CMB2 custom fields
                                        
                $booking_item_image   = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_image", true );   
                $booking_item_image_tablet   = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_image_tablet", true );   
                $booking_item_image_mobile   = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_image_mobile", true );   
                $booking_item_title     = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_title", true );                            
                $booking_item_copy   = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_copy", true );
                $booking_item_URLs = get_post_meta( $selected_booking_item_post_id, PREFIX."booking_item_URLs", true );        

                $post_title = strtolower(get_the_title($selected_booking_item_post_id));


        ?>

        <div class="col-md-3 no-padding page-default-booking-item <?php if(strpos($post_title, 'tp') !== false) echo 'tp-version'; else echo $post_title; ?>">                   
            <div class="manic-image-container">
              <img src="" data-image-desktop="<?php echo $booking_item_image; ?>"
              data-image-tablet="<?php echo $booking_item_image_tablet; ?>"
              data-image-mobile="<?php echo $booking_item_image_mobile; ?>" alt="">
            </div>
            <div class="page-default-booking-item-text">
              <h5><?php echo $booking_item_title; ?></h5>
              <p><?php echo $booking_item_copy; ?></p>
              <span id="price-changes" class="price"><?php echo isset($booking_item_URLs[0]['_kafnu_booking_item_price']) ? $booking_item_URLs[0]['_kafnu_booking_item_price'] : ""; ?></span>                
            </div>
            <?php if(count($booking_item_URLs) > 1): ?>
              <div class="page-default-booking-item-cta-container dropdown-version">
                  <a href="javascript:void(0);" class="square-cta border-version">Book Now</a>
                  <ul id="book-now-dropdown">
                    <?php foreach ( (array) $booking_item_URLs as $key => $url ): ?>
                      <li><a href="<?php echo $url['_kafnu_booking_item_url'] ?>" data-price="<?php echo $url['_kafnu_booking_item_price'] ?>" target="_blank"><?php echo $url['_kafnu_booking_item_type'] ?></a></li>
                    <?php endforeach; ?>              
                  </ul>                            
              </div>
            <?php else: ?>
              <?php if(isset($booking_item_URLs[0]['_kafnu_booking_item_url'])): ?>
                <div class="page-default-booking-item-cta-container">
                  <a href="<?php echo $booking_item_URLs[0]['_kafnu_booking_item_url']; ?>" target="_blank" class="square-cta border-version">Book Now</a>            
                </div>
              <?php endif; ?>  
            <?php endif; ?>
        </div>

        <?php 
            endif;
          endfor;
        endif;

        wp_reset_postdata();

        //    _____ _   _ ____
        //   | ____| \ | |  _ \
        //   |  _| |  \| | | | |
        //   | |___| |\  | |_| |
        //   |_____|_| \_|____/
        //            
        ?>

        
      </div> <!-- row -->
    </div>    
    
    <!-- 
        __  _______  ____  ______    ______
       /  |/  / __ \/ __ )/  _/ /   / ____/
      / /|_/ / / / / __  |/ // /   / __/
     / /  / / /_/ / /_/ // // /___/ /___
    /_/  /_/\____/_____/___/_____/_____/

    -->

    <div id="page-default-booking-item-mobile" class="visible-sm visible-xs">
          
      <div class="row">
        <?php

          //    ____ _____  _    ____ _____
          //   / ___|_   _|/ \  |  _ \_   _|
          //   \___ \ | | / _ \ | |_) || |
          //    ___) || |/ ___ \|  _ < | |
          //   |____/ |_/_/   \_\_| \_\|_|
          //

          global $post;

          $selected_location_booking_items_post_array = $selected_location_booking_items;                  // IMPORTANT

          if ($selected_location_booking_items_post_array != ''):


            // init
            $wow_offset = 45;


            for ($i=0; $i < count($selected_location_booking_items_post_array) ; $i++):

            $selected_booking_item_post_index = $i + 1;
            $selected_booking_item_post_id = $selected_location_booking_items_post_array[$i%count($selected_location_booking_items_post_array)];
            $post = get_post( $selected_booking_item_post_id );
            setup_postdata( $post );

            $selected_booking_item_post_status = get_post_status();

              if ($selected_booking_item_post_status == 'publish'):

                // CMB2 custom fields
                                        
                $booking_item_image   = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_image", true );                   
                $booking_item_title     = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_title", true );                            
                $booking_item_copy   = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_copy", true );
                $booking_item_URLs = get_post_meta( $selected_booking_item_post_id, PREFIX."booking_item_URLs", true );         

                // image
                $booking_item_image_id = wds_page_builder_get_this_part_data( PREFIX . 'booking_item_image_id' );
                $booking_item_image_tablet = get_manic_tablet_image($booking_item_image_id, $booking_item_image_tablet);  
                $booking_item_image_mobile = get_manic_mobile_image($booking_item_image_id, $booking_item_image_mobile);              
        ?>

        <div class="col-sm-12 no-padding page-default-booking-item">

          <?php if ($selected_booking_item_post_index == 1): ?>
          <div class="manic-expand-container mobile-open-version">
          <?php else: ?>
          <div class="manic-expand-container">
          <?php endif; ?>

          
              <div class="scroll-target" data-value="hot-desk"></div>
              <div class="manic-expand-container-title">
                  <h5><?php echo $booking_item_title; ?></h5> 
              </div>
              <div class="manic-expand-container-btn"></div>
              <div class="manic-expand-container-content">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="<?php echo $booking_item_image; ?>"
                  data-image-tablet="<?php echo $booking_item_image; ?>"
                  data-image-mobile="<?php echo $booking_item_image; ?>" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5><?php echo $booking_item_title; ?></h5>
                  <p><?php echo $booking_item_copy; ?></p>                        
                  <?php if(count($booking_item_URLs) < 2): ?>
                    <?php if(isset($booking_item_URLs[0]['_kafnu_booking_item_price'])): ?>
                      <span class="price"><?php echo $booking_item_URLs[0]['_kafnu_booking_item_price']; ?></span>                
                    <?php endif; ?>
                  <?php endif; ?>
                </div>                

                  <?php if(count($booking_item_URLs) > 1): ?>
                    
                    <div class="booknow-slider kafnu-slick-slider">

                      <?php foreach ( (array) $booking_item_URLs as $key => $url ): ?>
                        <div class="booknow-slider-item">
                          <span class="time"><?php echo $url['_kafnu_booking_item_type'] ?></span>
                          <span class="price"><?php echo isset($url['_kafnu_booking_item_price']) ? $url['_kafnu_booking_item_price'] : ""; ?></span>                
                          <div class="page-default-booking-item-cta-container">
                            <a href="<?php echo $url['_kafnu_booking_item_url'] ?>" target="_blank" class="square-cta border-version">Book Now</a>
                          </div>
                        </div>
                      <?php endforeach; ?>                  

                    </div>  

                <?php else: ?>
                  <div class="page-default-booking-item-cta-container">
                    <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361933" target="_blank" class="square-cta border-version">Book Now</a>
                    <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                  </div>     

                <?php endif; ?>

              </div>
          </div>                  
        </div>

        <?php 
            endif;
          endfor;
        endif;

        wp_reset_postdata();

        //    _____ _   _ ____
        //   | ____| \ | |  _ \
        //   |  _| |  \| | | | |
        //   | |___| |\  | |_| |
        //   |_____|_| \_|____/
        //            
        ?>
        
      </div>
    </div>  
      
  </div>
</article>