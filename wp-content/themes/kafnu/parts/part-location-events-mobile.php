<?php 
  $selected_kafnu_events = manic_get_option( PREFIX . 'selected_kafnu_events' );

?>

<article id="page-country-event-content-section-mobile" class="visible-sm visible-xs">
  <div id="banner-sidebar-container-mobile" class="kafnu-slick-slider">

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

    <div class="banner-sidebar-item">
      <div class="banner-sidebar-item-title">
        <h6>upcoming events</h6>
      </div>
      <div class="banner-sidebar-item-image">
        <div class="manic-image-container">
          <img src="" data-image="<?php echo $kafnu_event_image; ?>" alt="">
        </div>
      </div>
      <div class="banner-sidebar-item-text">
        <h5><?php echo $kafnu_event_title; ?></h5>
        <p><?php echo $kafnu_event_time; ?></p>
        <p class="minimize-text" data-length="-1" data-tablet-length="-1" data-mobile-length="-1"><?php echo $kafnu_event_copy; ?></p>
      </div>
    </div><!-- banner-sidebar-item -->

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

  </div> <!-- banner-sidebar-container -->
</article>