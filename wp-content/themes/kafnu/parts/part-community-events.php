<?php 
  $community_events_title = wds_page_builder_get_this_part_data( PREFIX . "community_events_title" );

  $selected_kafnu_events = manic_get_option( PREFIX . 'selected_kafnu_events' );

?>

<!--
    ____ ___  __  __ __  __ _   _ _   _ ___ _______   __  _______     _______ _   _ _____ ____
   / ___/ _ \|  \/  |  \/  | | | | \ | |_ _|_   _\ \ / / | ____\ \   / / ____| \ | |_   _/ ___|
  | |  | | | | |\/| | |\/| | | | |  \| || |  | |  \ V /  |  _|  \ \ / /|  _| |  \| | | | \___ \
  | |__| |_| | |  | | |  | | |_| | |\  || |  | |   | |   | |___  \ V / | |___| |\  | | |  ___) |
   \____\___/|_|  |_|_|  |_|\___/|_| \_|___| |_|   |_|   |_____|  \_/  |_____|_| \_| |_| |____/

-->

<article id="page-default-booking-section" class="community-version">
  <div class="container-fluid">
    <div class="scroll-target" data-value="events"></div>


    <div class="page-default-booking-item-title">
      <?php if (isset($community_events_title) && $community_events_title != ''): ?>
        <h2><?php echo $community_events_title; ?></h2>
      <?php else: ?>
        <h2>No Title</h2>
      <?php endif; ?>
    </div>

    <div id="page-default-booking-item-desktop" class="center-version hidden-sm hidden-xs">

      <?php

        //    ____ _____  _    ____ _____
        //   / ___|_   _|/ \  |  _ \_   _|
        //   \___ \ | | / _ \ | |_) || |
        //    ___) || |/ ___ \|  _ < | |
        //   |____/ |_/_/   \_\_| \_\|_|
        //

        global $post;

        $selected_kafnu_events_post_array = $selected_kafnu_events;                  // IMPORTANT

        if ($selected_kafnu_events_post_array != ''):

          for ($i=0; $i < count($selected_kafnu_events_post_array) ; $i++):

          $selected_kafnu_event_post_index = $i + 1;
          $selected_kafnu_event_post_id = $selected_kafnu_events_post_array[$i%count($selected_kafnu_events_post_array)];
          $post = get_post( $selected_kafnu_event_post_id );
          setup_postdata( $post );

          $selected_kafnu_event_post_status = get_post_status();

            if ($selected_kafnu_event_post_status == 'publish'):

              // CMB2 custom fields
              $kafnu_event_title     = get_the_title();
              $kafnu_event_image   = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_image", true );
              $kafnu_event_time    = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_time", true );
              $kafnu_event_location    = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_location", true );
              $kafnu_event_copy   = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_copy", true );
      ?>

      <div class="page-default-booking-item inline-block-version">
        <div class="page-default-booking-item-image">
          <div class="manic-image-container">
            <img src="" data-image="<?php echo $kafnu_event_image; ?>" alt="">
          </div>
          <div class="page-default-booking-item-image-caption">

            <h6>upcoming events</h6>

            <h5><?php echo $kafnu_event_title; ?></h5>
          </div>
        </div>
        <div class="page-default-booking-item-text">
          <ul>
            <li class="calendar icon"><?php echo $kafnu_event_time; ?></li>

            <?php if( isset($kafnu_event_location) && $kafnu_event_location != '' ): ?>
              <li class="map-pin icon"><?php echo $kafnu_event_location; ?></li>
            <?php endif; ?>
          </ul>
          <p><?php echo $kafnu_event_copy; ?></p>
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
    
    <!-- 
        __  _______  ____  ______    ______
       /  |/  / __ \/ __ )/  _/ /   / ____/
      / /|_/ / / / / __  |/ // /   / __/
     / /  / / /_/ / /_/ // // /___/ /___
    /_/  /_/\____/_____/___/_____/_____/

    -->          
    <div id="page-default-booking-item-mobile" class="visible-sm visible-xs kafnu-slick-slider">


      <?php

        //    ____ _____  _    ____ _____
        //   / ___|_   _|/ \  |  _ \_   _|
        //   \___ \ | | / _ \ | |_) || |
        //    ___) || |/ ___ \|  _ < | |
        //   |____/ |_/_/   \_\_| \_\|_|
        //

        global $post;

        $selected_kafnu_events_post_array = $selected_kafnu_events;                  // IMPORTANT

        if ($selected_kafnu_events_post_array != ''):

          for ($i=0; $i < count($selected_kafnu_events_post_array) ; $i++):

          $selected_kafnu_event_post_index = $i + 1;
          $selected_kafnu_event_post_id = $selected_kafnu_events_post_array[$i%count($selected_kafnu_events_post_array)];
          $post = get_post( $selected_kafnu_event_post_id );
          setup_postdata( $post );

          $selected_kafnu_event_post_status = get_post_status();

            if ($selected_kafnu_event_post_status == 'publish'):

              // CMB2 custom fields
              $kafnu_event_title     = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_title", true );
              $kafnu_event_image   = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_image", true );
              $kafnu_event_time    = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_time", true );
              $kafnu_event_location    = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_location", true );
              $kafnu_event_copy   = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_copy", true );
      ?>

      <div class="col-md-3 page-default-booking-item">
        <h6>upcoming events</h6>
        <div class="page-default-booking-item-image">
          <div class="manic-image-container">
            <img src="" data-image-desktop="<?php echo $kafnu_event_image; ?>"
            data-image-tablet="<?php echo $kafnu_event_image; ?>"
            data-image-mobile="<?php echo $kafnu_event_image; ?>" alt="">
          </div>                
        </div>
        <div class="page-default-booking-item-text">
          <h5><?php echo get_the_title(); ?></h5>
          <ul>
            <li class="calendar icon"><?php echo $kafnu_event_time; ?></li>

            <?php if( isset($kafnu_event_location) && $kafnu_event_location != '' ): ?>
              <li class="map-pin icon"><?php echo $kafnu_event_location; ?></li>
            <?php endif; ?>
          </ul>
          <p><?php echo $kafnu_event_copy; ?></p>
        </div>
        <div class="page-default-booking-item-cta-container">
          <!-- <a href="#" class="square-cta border-version">See More</a> -->
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
</article>