<?php 

  $community_slider_title = wds_page_builder_get_this_part_data( PREFIX . "community_slider_title" );
  $community_slider_selected_managers = wds_page_builder_get_this_part_data( PREFIX . "community_slider_selected_managers" );

?>

<div class="has-community-hash-element"></div>

<article id="page-community-slider-section" class="community-page-1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        
        <div id="page-community-slider-title-2">
          <h2><?php echo $community_slider_title; ?></h2>
        </div>

        <div id="page-community-slider-container" class="hidden-xs hidden-sm">

          <div id="page-community-slider" class="kafnu-slick-slider">
            
            <?php

              $first_selected_post_id = 0;

              //    ____ _____  _    ____ _____
              //   / ___|_   _|/ \  |  _ \_   _|
              //   \___ \ | | / _ \ | |_) || |
              //    ___) || |/ ___ \|  _ < | |
              //   |____/ |_/_/   \_\_| \_\|_|
              //

              global $post;

              $selected_post_array = $community_slider_selected_managers;                  // IMPORTANT

              if ($selected_post_array != ''):

                for ($i=0; $i < count($selected_post_array) ; $i++):

                $selected_post_index = $i + 1;
                $selected_post_id = $selected_post_array[$i%count($selected_post_array)];
                $post = get_post( $selected_post_id );
                setup_postdata( $post );

                $selected_post_status = get_post_status();

                if($selected_post_index == 1) {
                  $first_selected_post_id = $selected_post_id;
                }



                  if ($selected_post_status == 'publish'):


                    // CMB2 custom fields
                    $community_manager_banner_image = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image", true );
                    $community_manager_banner_image_tablet = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image_tablet", true );
                    $community_manager_banner_image_mobile = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image_mobile", true );
                    $community_manager_thumbnail_black = get_post_meta( $selected_post_id, PREFIX . "community_manager_thumbnail_black", true );
                    $community_manager_name = get_post_meta( $selected_post_id, PREFIX . "community_manager_name", true );
                    $community_manager_location = get_post_meta( $selected_post_id, PREFIX . "community_manager_location", true );
                    $community_manager_copy = get_post_meta( $selected_post_id, PREFIX . "community_manager_copy", true );

                    // image
                    $community_manager_banner_image_id = wds_page_builder_get_this_part_data( PREFIX . 'community_manager_banner_image_id' );
                    $community_manager_banner_image_tablet = get_manic_tablet_image($community_manager_banner_image_id, $community_manager_banner_image_tablet);  
                    $community_manager_banner_image_mobile = get_manic_mobile_image($community_manager_banner_image_id, $community_manager_banner_image_mobile);
            ?>

            <div class="page-community-slider-item">
              <div class="manic-image-container">
                <img src="" 
                  data-image-desktop="<?php echo $community_manager_banner_image; ?>"
                  data-image-tablet="<?php echo $community_manager_banner_image_tablet; ?>"
                  data-image-mobile="<?php echo $community_manager_banner_image_mobile; ?>" alt="">
              </div>
              <div class="page-community-slider-item-caption">
                <h5><?php echo $community_manager_location; ?></h5>
                <h4><?php echo $community_manager_name; ?></h4>
                <p><?php echo $community_manager_copy; ?></p>
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

          <div id="page-community-thumbnail-slider" class="kafnu-slick-slider">


            <?php

              //    ____ _____  _    ____ _____
              //   / ___|_   _|/ \  |  _ \_   _|
              //   \___ \ | | / _ \ | |_) || |
              //    ___) || |/ ___ \|  _ < | |
              //   |____/ |_/_/   \_\_| \_\|_|
              //

              global $post;

              $selected_post_array = $community_slider_selected_managers;                  // IMPORTANT

              if ($selected_post_array != ''):

                for ($i=0; $i < count($selected_post_array) ; $i++):

                $selected_post_index = $i + 1;
                $selected_post_id = $selected_post_array[$i%count($selected_post_array)];
                $post = get_post( $selected_post_id );
                setup_postdata( $post );

                $selected_post_status = get_post_status();

                  if ($selected_post_status == 'publish'):


                    // CMB2 custom fields
                    $community_manager_thumbnail_black = get_post_meta( $selected_post_id, PREFIX . "community_manager_thumbnail_black", true );
            ?>

              <div class="page-community-thumbnail-slider-item">
                <img src="<?php echo $community_manager_thumbnail_black; ?>" class="img-responsive" alt="">
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
          </div> <!-- page-community-thumbnail-slider -->

        </div> <!-- page-community-slider-container -->           



        <?php 

          global $post;

          if ($first_selected_post_id != 0):
            $post = get_post( $first_selected_post_id );
            setup_postdata( $post );

            $community_manager_banner_image = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image", true );
            $community_manager_banner_image_tablet = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image_tablet", true );
            $community_manager_banner_image_mobile = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image_mobile", true );

            $community_manager_thumbnail_black = get_post_meta( $selected_post_id, PREFIX . "community_manager_thumbnail_black", true );
            $community_manager_name = get_post_meta( $selected_post_id, PREFIX . "community_manager_name", true );
            $community_manager_location = get_post_meta( $selected_post_id, PREFIX . "community_manager_location", true );
            $community_manager_copy = get_post_meta( $selected_post_id, PREFIX . "community_manager_copy", true );

            // image
            $community_manager_banner_image_id = wds_page_builder_get_this_part_data( PREFIX . 'community_manager_banner_image_id' );
            $community_manager_banner_image_tablet = get_manic_tablet_image($community_manager_banner_image_id, $community_manager_banner_image_tablet);  
            $community_manager_banner_image_mobile = get_manic_mobile_image($community_manager_banner_image_id, $community_manager_banner_image_mobile);

        ?>

          <div id="page-community-managers-mobile" class="visible-xs visible-sm">
            <div class="page-community-managers-item-mobile">
              <div class="manic-image-container has-full-width">
                <img src="" data-image-tablet="<?php echo $community_manager_banner_image_tablet; ?>" 
                            data-image-mobile="<?php echo $community_manager_banner_image_mobile; ?>" alt="">
              </div>

              <div class="text-container">
                <h5><?php echo $community_manager_location; ?></h5>
                <h4><?php echo $community_manager_name; ?></h4>
                <p><?php echo $community_manager_copy; ?></p>
              </div>
            </div> <!-- page-community-managers-item-mobile -->

            <div class="page-community-managers-see-more-box">
              <div class="text-container">
                <a href="#see-more-managers" class="see-more-managers"><h4>see more  <br>community managers</h4></a>
              </div>
              <div class="cta-container">
                <a href="#see-more-managers" class="see-more-managers plus-icon"></a>
              </div>
            </div>
          </div>   

        <?php 
          endif;
          wp_reset_postdata(); 
        ?>

      </div>
    </div> 
  </div> <!-- container-fluid-->
</article> <!-- page-community-slider-section -->    










<article class="community-page-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div id="page-2-community-managers-mobile">
          <div class="page-community-managers-item-mobile">

            <?php 
              global $post;

                if ($first_selected_post_id != 0):

                  $community_manager_banner_image = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image", true );
                  $community_manager_banner_image_tablet = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image_tablet", true );
                  $community_manager_banner_image_mobile = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image_mobile", true );

                  $community_manager_thumbnail_black = get_post_meta( $selected_post_id, PREFIX . "community_manager_thumbnail_black", true );
                  $community_manager_name = get_post_meta( $selected_post_id, PREFIX . "community_manager_name", true );
                  $community_manager_location = get_post_meta( $selected_post_id, PREFIX . "community_manager_location", true );
                  $community_manager_copy = get_post_meta( $selected_post_id, PREFIX . "community_manager_copy", true );

                  // image
                  $community_manager_banner_image_id = wds_page_builder_get_this_part_data( PREFIX . 'community_manager_banner_image_id' );
                  $community_manager_banner_image_tablet = get_manic_tablet_image($community_manager_banner_image_id, $community_manager_banner_image_tablet);  
                  $community_manager_banner_image_mobile = get_manic_mobile_image($community_manager_banner_image_id, $community_manager_banner_image_mobile);
            ?>

            <div class="manic-image-container has-full-width">
              <img class="image" src="" 
                data-image-tablet="<?php echo $community_manager_banner_image_tablet; ?>" 
                data-image-mobile="<?php echo $community_manager_banner_image_mobile; ?>" alt="">
            </div>
            <div class="text-container">
              <h5 class="country"><?php echo $community_manager_location; ?></h5>
              <h4 class="name"><?php echo $community_manager_name; ?></h4>
              <p class="description"><?php echo $community_manager_copy; ?></p>
            </div>

            <?php 
                endif;
              wp_reset_postdata(); 
            ?>


          </div> <!-- page-community-managers-item-mobile -->                
        </div> <!-- page-community-managers-mobile -->              
      </div>
    </div> <!-- row -->
  </div>
  <div id="page-community-managers-thumbnails-mobile">
      <?php

        $first_selected_post_id = 0;

        //    ____ _____  _    ____ _____
        //   / ___|_   _|/ \  |  _ \_   _|
        //   \___ \ | | / _ \ | |_) || |
        //    ___) || |/ ___ \|  _ < | |
        //   |____/ |_/_/   \_\_| \_\|_|
        //

        global $post;

        $selected_post_array = $community_slider_selected_managers;                  // IMPORTANT

        if ($selected_post_array != ''):

          for ($i=0; $i < count($selected_post_array) ; $i++):

          $selected_post_index = $i + 1;
          $selected_post_id = $selected_post_array[$i%count($selected_post_array)];
          $post = get_post( $selected_post_id );
          setup_postdata( $post );

          $selected_post_status = get_post_status();

          if($selected_post_index == 1) {
            $first_selected_post_id = $selected_post_id;
          }



            if ($selected_post_status == 'publish'):


              // CMB2 custom fields
              $community_manager_banner_image = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image", true );
              $community_manager_banner_image_tablet = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image_tablet", true );
              $community_manager_banner_image_mobile = get_post_meta( $selected_post_id, PREFIX . "community_manager_banner_image_mobile", true );
              $community_manager_thumbnail_black = get_post_meta( $selected_post_id, PREFIX . "community_manager_thumbnail_black", true );
              $community_manager_name = get_post_meta( $selected_post_id, PREFIX . "community_manager_name", true );
              $community_manager_location = get_post_meta( $selected_post_id, PREFIX . "community_manager_location", true );
              $community_manager_copy = get_post_meta( $selected_post_id, PREFIX . "community_manager_copy", true );

              // image
              $community_manager_banner_image_id = wds_page_builder_get_this_part_data( PREFIX . 'community_manager_banner_image_id' );
              $community_manager_banner_image_tablet = get_manic_tablet_image($community_manager_banner_image_id, $community_manager_banner_image_tablet);  
              $community_manager_banner_image_mobile = get_manic_mobile_image($community_manager_banner_image_id, $community_manager_banner_image_mobile);

    ?>

      <div class="community-manager manic-image-container" 
        data-image-tablet="<?php echo $community_manager_banner_image_tablet; ?>" 
        data-image-mobile="<?php echo $community_manager_banner_image_mobile; ?>" 
        data-name="<?php echo $community_manager_name; ?>" 
        data-country="<?php echo $community_manager_location; ?>" 
        data-description="<?php echo $community_manager_copy; ?>">

        <img src="<?php echo $community_manager_thumbnail_black; ?>" class="img-responsive" alt="">
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
</article>