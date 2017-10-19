<?php

  $social_media_grid_large_items = manic_get_option( PREFIX . 'social_media_grid_large_items' );

?>



<!--
   ____   ___   ____ ___    _    _       __  __ _____ ____ ___    _       ____ ____  ___ ____    _        _    ____   ____ _____
  / ___| / _ \ / ___|_ _|  / \  | |     |  \/  | ____|  _ \_ _|  / \     / ___|  _ \|_ _|  _ \  | |      / \  |  _ \ / ___| ____|
  \___ \| | | | |    | |  / _ \ | |     | |\/| |  _| | | | | |  / _ \   | |  _| |_) || || | | | | |     / _ \ | |_) | |  _|  _|
   ___) | |_| | |___ | | / ___ \| |___  | |  | | |___| |_| | | / ___ \  | |_| |  _ < | || |_| | | |___ / ___ \|  _ <| |_| | |___
  |____/ \___/ \____|___/_/   \_\_____| |_|  |_|_____|____/___/_/   \_\  \____|_| \_\___|____/  |_____/_/   \_\_| \_\\____|_____|

-->

<div class="has-wow-element"></div>

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

              $selected_item_post_array = $social_media_grid_large_items;                  // IMPORTANT

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

            

            <!-- 
            <div data-wow-offset="50" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/videos/1943871022519532/" target="_blank" class="social-media-source-tag" target="_blank">
                <div class="manic-image-container video-version">
                  <img src="" data-image-desktop="images_cms/home/fb-video-thumb-01.jpg" alt="">
                </div>                      
              </a>
            </div>
            <div data-wow-offset="55" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook color-version">
                <div class="grid-item-text-container">
                  <h5>Bill - Company of Dreamers</h5>
                  <p class="minimize-text" data-length="-1" data-tablet-length="35" data-mobile-length="60">Bill Black, ex-hotelier and Director at Next Story Group, discusses what sets Kafnu apart as a...</p>                      
                </div>
              </a>
            </div>
            <div data-wow-offset="60" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/fb-image-thumb-01.jpg" alt="">
                </div>
              </a>
            </div>
            <div data-wow-offset="65" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/fb-image-thumb-02.jpg" alt="">
                </div>
              </a>
            </div>
            <div data-wow-offset="70" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/in-image-thumb-01.jpg" alt="">
                </div>
              </a>
            </div>
            <div data-wow-offset="75" class="grid-item wow fadeInUp">
              <a href="https://www.youtube.com/watch?v=Wx-O38D0WuA" target="_blank" class="social-media-source-tag youtube" target="_blank">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/youtube-thumb-01.jpg" alt="">
                </div>
              </a>
            </div>

            <div data-wow-offset="80" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/in-image-thumb-02.jpg" alt="">
                </div>
              </a>
            </div>
            <div data-wow-offset="85" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/in-image-thumb-03.jpg" alt="">
                </div>
              </a>
            </div>
            <div data-wow-offset="90" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/in-image-thumb-04.jpg" alt="">
                </div>
              </a>
            </div>
            <div data-wow-offset="95" class="grid-item wow fadeInUp">
              <a href="https://www.youtube.com/watch?v=FiVGdSg_pDk" target="_blank" class="social-media-source-tag youtube" target="_blank">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/youtube-thumb-02.jpg" alt="">
                </div>
              </a>
            </div>                  
            <div data-wow-offset="100" class="grid-item grid-item--width2 grid-item--height2 wow fadeInUp">
              <a href="http://www.webintravel.com/next-story-reimagines-urban-spaces-kafnu-vertical-village/" target="_blank" class="social-media-source-tag news color-version">
                <div class="grid-item-text-container">
                  <h5 class="minimize-text" data-length="-1" data-tablet-length="50" data-tablet-length="10">Next Story reimagines urban spaces with Kafnu, the vertical village</h5>
                  <p class="minimize-text" data-length="-1" data-tablet-length="80" data-tablet-length="10">Next Story Group, formerly Silver Needle Hospitality, will be launching two spaces in Taipei and Hong Kong under a new brand, Kafnu, by year end.</p>
                  <p class="minimize-text" data-length="-1" data-tablet-length="0" data-tablet-length="10">Seeking to reimagine urban spaces through technology and story, the company says the new spaces will synthesise “the best aspects of co-working, co-living, hotel, retail and private club”.</p>
                </div>
              </a>
            </div>

            <div data-wow-offset="105" class="grid-item wow fadeInUp">
              <a href="https://www.youtube.com/watch?v=Q1EgmSBFql0" target="_blank" class="social-media-source-tag youtube" target="_blank">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/youtube-thumb-03.jpg" alt="">
                </div>
              </a>
            </div>
            <div data-wow-offset="110" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/fb-image-thumb-03.jpg" alt="">
                </div>
              </a>
            </div>
            <div data-wow-offset="115" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/in-image-thumb-05.jpg" alt="">
                </div>
              </a>
            </div>
            <div data-wow-offset="120" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/fb-image-thumb-04.jpg" alt="">
                </div>
              </a>
            </div>   

            <div data-wow-offset="125" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/fb-image-thumb-05.jpg" alt="">
                </div>
              </a>
            </div>   
            <div data-wow-offset="130" class="grid-item grid-item--width2 wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook color-version">
                <div class="grid-item-text-container">
                  <h5 class="minimize-text" data-length="-1" data-tablet-length="50" data-tablet-length="10">Anyone curious about the space and its design for Kafnu Hong Kong?</h5>
                  <p class="minimize-text" data-length="-1" data-tablet-length="80" data-tablet-length="10">Each space is inline with our brand's innovative spirit and local elements. The most special element</p>
                </div>
              </a>
            </div>
            <div data-wow-offset="135" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/in-image-thumb-06.jpg" alt="">
                </div>
              </a>
            </div>   
            <div data-wow-offset="140" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/fb-image-thumb-06.jpg" alt="">
                </div>
              </a>
            </div>   
            <div data-wow-offset="145" class="grid-item wow fadeInUp">
              <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/home/in-image-thumb-07.jpg" alt="">
                </div>
              </a>
            </div>

            
            -->


          </div> <!-- grid -->

        </div> <!-- home-masonry-grid-container -->
        
        <div id="default-grid-container-mobile" class="visible-xs visible-sm">
          <div class="grid-item">
            <a href="http://www.youtube.com" target="_blank" class="social-media-source-tag youtube" target="_blank">
              <div class="manic-image-container video-version">
                <img src="" data-image-desktop="images_cms/home/fb-video-thumb-01.jpg"
                            data-image-tablet="images_cms/home/fb-video-thumb-01.jpg"
                            data-image-mobile="images_cms/home/fb-video-thumb-01.jpg" alt="">
              </div>                      
            </a>
          </div>
          <div class="grid-item">
            <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook color-version">
              <div class="grid-item-text-container">
                <h5>Bill - Company of Dreamers</h5>
                <p>Bill Black, ex-hotelier and Director at Next Story Group...</p>                      
              </div>
            </a>
          </div>
          <div class="grid-item">
            <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
              <div class="manic-image-container">
                <img src="" data-image-desktop="images_cms/home/in-image-thumb-02.jpg"
                            data-image-tablet="images_cms/home/in-image-thumb-02.jpg"
                            data-image-mobile="images_cms/home/in-image-thumb-02.jpg" alt="">
              </div>
            </a>
          </div>
          <div class="grid-item">
            <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
              <div class="manic-image-container">
                <img src="" data-image-desktop="images_cms/home/in-image-thumb-03.jpg"
                            data-image-tablet="images_cms/home/in-image-thumb-03.jpg"
                            data-image-mobile="images_cms/home/in-image-thumb-03.jpg"
                 alt="">
              </div>
            </a>
          </div>
        </div>


      </div>
    </div> <!-- row -->
  </div>
</article> <!-- page-home-social-media-masonry-section -->