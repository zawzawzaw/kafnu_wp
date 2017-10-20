<?php

  $social_media_grid_items = manic_get_option( PREFIX . 'social_media_grid_items' );

?>



<!--
   ____   ___   ____ ___    _    _       __  __ _____ ____ ___    _       ____ ____  ___ ____    _        _    ____   ____ _____
  / ___| / _ \ / ___|_ _|  / \  | |     |  \/  | ____|  _ \_ _|  / \     / ___|  _ \|_ _|  _ \  | |      / \  |  _ \ / ___| ____|
  \___ \| | | | |    | |  / _ \ | |     | |\/| |  _| | | | | |  / _ \   | |  _| |_) || || | | | | |     / _ \ | |_) | |  _|  _|
   ___) | |_| | |___ | | / ___ \| |___  | |  | | |___| |_| | | / ___ \  | |_| |  _ < | || |_| | | |___ / ___ \|  _ <| |_| | |___
  |____/ \___/ \____|___/_/   \_\_____| |_|  |_|_____|____/___/_/   \_\  \____|_| \_\___|____/  |_____/_/   \_\_| \_\\____|_____|

-->

<div class="has-wow-element"></div>
<div class="has-grid-element"></div>

<article id="page-default-social-media-masonry-section">
  <div class="container-fluid reduce-padding">
    <div class="row">
      <div class="col-md-12 no-padding">

        <div id="default-masonry-grid-container" class="hidden-xs hidden-sm">

          <div class="grid">
            <div class="grid-sizer"></div>

            
            

            <?php

              //    ____ _____  _    ____ _____
              //   / ___|_   _|/ \  |  _ \_   _|
              //   \___ \ | | / _ \ | |_) || |
              //    ___) || |/ ___ \|  _ < | |
              //   |____/ |_/_/   \_\_| \_\|_|
              //

              global $post;

              $selected_item_post_array = $social_media_grid_items;                  // IMPORTANT

              if ($selected_item_post_array != ''):


                // init
                $wow_offset = 45;


                for ($i=0; $i < count($selected_item_post_array) ; $i++):

                $selected_item_post_index = $i + 1;
                $selected_item_post_id = $selected_item_post_array[$i%count($selected_item_post_array)];
                $post = get_post( $selected_item_post_id );
                setup_postdata( $post );

                $selected_item_post_status = get_post_status();

                  if ($selected_item_post_status == 'publish'):

                    // CMB2 custom fields
                    
                    $social_media_type    = get_post_meta( $selected_item_post_id, PREFIX . "social_media_type", true );
                    $social_media_image   = get_post_meta( $selected_item_post_id, PREFIX . "social_media_image", true );
                    $social_media_url     = get_post_meta( $selected_item_post_id, PREFIX . "social_media_url", true );
                    $social_media_title   = get_post_meta( $selected_item_post_id, PREFIX . "social_media_title", true );
                    $social_media_copy    = get_post_meta( $selected_item_post_id, PREFIX . "social_media_copy", true );

                    $wow_offset = $wow_offset + 5;
            ?>




                <?php if ($social_media_type == 'image_facebook_video'): ?>

                  <div data-wow-offset="<?php echo $wow_offset; ?>" class="grid-item wow fadeInUp">
                    <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag" target="_blank">
                      <div class="manic-image-container video-version">
                        <img src="" data-image-desktop="<?php echo $social_media_image; ?>" alt="">
                      </div>                      
                    </a>
                  </div>

                <?php elseif($social_media_type == 'image_facebook'): ?>

                  <div data-wow-offset="<?php echo $wow_offset; ?>" class="grid-item wow fadeInUp">
                    <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="<?php echo $social_media_image; ?>" alt="">
                      </div>
                    </a>
                  </div>

                <?php elseif($social_media_type == 'image_youtube'): ?>

                  <div data-wow-offset="<?php echo $wow_offset; ?>" class="grid-item wow fadeInUp">
                    <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag youtube" target="_blank">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="<?php echo $social_media_image; ?>" alt="">
                      </div>
                    </a>
                  </div>

                <?php elseif($social_media_type == 'text_facebook'): ?>
                                    
                  <div data-wow-offset="<?php echo $wow_offset; ?>" class="grid-item wow fadeInUp">
                    <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag facebook color-version">
                      <div class="grid-item-text-container">
                        <?php if($social_media_title != ''): ?>
                          <h5><?php echo $social_media_title; ?></h5>
                        <?php endif; ?>
                        <?php if($social_media_title != ''): ?>
                          <p class="minimize-text" data-length="-1" data-tablet-length="35" data-mobile-length="60"><?php echo $social_media_copy; ?></p>
                        <?php endif; ?>
                      </div>
                    </a>
                  </div>

                <?php elseif($social_media_type == 'text_facebook_wide'): ?>

                  <div data-wow-offset="<?php echo $wow_offset; ?>" class="grid-item grid-item--width2 wow fadeInUp">
                    <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag facebook color-version">
                      <div class="grid-item-text-container">
                        <?php if($social_media_title != ''): ?>
                          <h5 class="minimize-text" data-length="-1" data-tablet-length="50" data-tablet-length="10"><?php echo $social_media_title; ?></h5>
                        <?php endif; ?>
                        <?php if($social_media_title != ''): ?>
                          <p class="minimize-text" data-length="-1" data-tablet-length="80" data-tablet-length="10"><?php echo $social_media_copy; ?></p>
                        <?php endif; ?>
                      </div>
                    </a>
                  </div>

                <?php elseif($social_media_type == 'text_article'): ?>
                  
                  <div data-wow-offset="<?php echo $wow_offset; ?>" class="grid-item grid-item--width2 grid-item--height2 wow fadeInUp">
                    <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag news color-version">
                      <div class="grid-item-text-container">
                        <h5 class="minimize-text" data-length="-1" data-tablet-length="50" data-tablet-length="10"><?php echo $social_media_title; ?></h5>
                        <p class="minimize-text" data-length="-1" data-tablet-length="80" data-tablet-length="10"><?php echo $social_media_copy; ?></p>
                      </div>
                    </a>
                  </div>

                <?php else: ?>

                  <!-- default = image_facebook -->
                  <div data-wow-offset="<?php echo $wow_offset; ?>" class="grid-item wow fadeInUp">
                    <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="<?php echo $social_media_image; ?>" alt="">
                      </div>
                    </a>
                  </div>

                <?php endif; ?>

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

            



          </div> <!-- grid -->

        </div> <!-- home-masonry-grid-container -->
        
        <div id="default-grid-container-mobile" class="visible-xs visible-sm">
          <?php

              //    ____ _____  _    ____ _____
              //   / ___|_   _|/ \  |  _ \_   _|
              //   \___ \ | | / _ \ | |_) || |
              //    ___) || |/ ___ \|  _ < | |
              //   |____/ |_/_/   \_\_| \_\|_|
              //

              global $post;

              $selected_item_post_array = $social_media_grid_items;                  // IMPORTANT

              if ($selected_item_post_array != ''):

                $max_l = count($selected_item_post_array);
                $max_l = $max_l >= 4 ? 4 : $max_l;

                for ($i=0; $i < $max_l ; $i++):

                $selected_item_post_index = $i + 1;
                $selected_item_post_id = $selected_item_post_array[$i%count($selected_item_post_array)];
                $post = get_post( $selected_item_post_id );
                setup_postdata( $post );

                $selected_item_post_status = get_post_status();

                  if ($selected_item_post_status == 'publish'):

                    // CMB2 custom fields
                    
                    $social_media_type    = get_post_meta( $selected_item_post_id, PREFIX . "social_media_type", true );
                    $social_media_image   = get_post_meta( $selected_item_post_id, PREFIX . "social_media_image", true );
                    $social_media_url     = get_post_meta( $selected_item_post_id, PREFIX . "social_media_url", true );
                    $social_media_title   = get_post_meta( $selected_item_post_id, PREFIX . "social_media_title", true );
                    $social_media_copy    = get_post_meta( $selected_item_post_id, PREFIX . "social_media_copy", true );
            ?>

            


              <?php if ($social_media_type == 'image_facebook_video'): ?>

                <div class="grid-item">
                  <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag" target="_blank">
                    <div class="manic-image-container video-version">
                      <img src="" data-image-tablet="<?php echo $social_media_image; ?>" data-image-mobile="<?php echo $social_media_image; ?>" alt="">
                    </div>                      
                  </a>
                </div>

              <?php elseif($social_media_type == 'image_facebook'): ?>

                <div class="grid-item">
                  <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag facebook">
                    <div class="manic-image-container">
                      <img src="" data-image-tablet="<?php echo $social_media_image; ?>" data-image-mobile="<?php echo $social_media_image; ?>" alt="">
                    </div>
                  </a>
                </div>

              <?php elseif($social_media_type == 'image_youtube'): ?>

                <div class="grid-item">
                  <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag youtube" target="_blank">
                    <div class="manic-image-container">
                      <img src="" data-image-tablet="<?php echo $social_media_image; ?>" data-image-mobile="<?php echo $social_media_image; ?>" alt="">
                    </div>
                  </a>
                </div>

              <?php elseif($social_media_type == 'text_facebook'): ?>
                                  
                <div class="grid-item">
                  <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag facebook color-version">
                    <div class="grid-item-text-container">
                      <?php if($social_media_title != ''): ?>
                        <h5><?php echo $social_media_title; ?></h5>
                      <?php endif; ?>
                      <?php if($social_media_title != ''): ?>
                        <p class="minimize-text" data-length="-1" data-tablet-length="35" data-mobile-length="60"><?php echo $social_media_copy; ?></p>
                      <?php endif; ?>
                    </div>
                  </a>
                </div>

              <?php elseif($social_media_type == 'text_facebook_wide'): ?>

                <div class="grid-item grid-item--width2">
                  <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag facebook color-version">
                    <div class="grid-item-text-container">
                      <?php if($social_media_title != ''): ?>
                        <h5 class="minimize-text" data-length="-1" data-tablet-length="50" data-tablet-length="10"><?php echo $social_media_title; ?></h5>
                      <?php endif; ?>
                      <?php if($social_media_title != ''): ?>
                        <p class="minimize-text" data-length="-1" data-tablet-length="80" data-tablet-length="10"><?php echo $social_media_copy; ?></p>
                      <?php endif; ?>
                    </div>
                  </a>
                </div>

              <?php elseif($social_media_type == 'text_article'): ?>
                
                <div class="grid-item grid-item--width2 grid-item--height2">
                  <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag news color-version">
                    <div class="grid-item-text-container">
                      <h5 class="minimize-text" data-length="-1" data-tablet-length="50" data-tablet-length="10"><?php echo $social_media_title; ?></h5>
                      <p class="minimize-text" data-length="-1" data-tablet-length="80" data-tablet-length="10"><?php echo $social_media_copy; ?></p>
                    </div>
                  </a>
                </div>

              <?php else: ?>

                <!-- default = image_facebook -->
                <div class="grid-item">
                  <a href="<?php echo $social_media_url; ?>" target="_blank" class="social-media-source-tag facebook">
                    <div class="manic-image-container">
                      <img src="" data-image-tablet="<?php echo $social_media_image; ?>" data-image-mobile="<?php echo $social_media_image; ?>" alt="">
                    </div>
                  </a>
                </div>

              <?php endif; ?>





          
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
          
        </div> <!-- default-grid-container-mobile -->


      </div>
    </div> <!-- row -->
  </div>
</article> <!-- page-home-social-media-masonry-section -->