<?php 
  $press_release_gallery_download_masonry_selected_list = wds_page_builder_get_this_part_data( PREFIX . "press_release_gallery_download_masonry_selected_list" );
  $press_release_gallery_download_masonry_copyright = wds_page_builder_get_this_part_data( PREFIX . "press_release_gallery_download_masonry_copyright" );

  $site_language = manic_get_option( PREFIX . 'site_language' );
?>

<article id="page-press-filtered-section">
  <div id="filter-sticky-trigger-mobile"></div>
  <div class="container-fluid reduce-padding">
    
    <div class="row row-eq-height">
      <div class="col-md-4 no-padding column-eq-sidebar">
        <div id="page-press-filter-options-container">
          <div class="bg"></div>

          <div id="press-filters-wrapper">
            <div class="press-links">
              
              <?php 
                $defaults = array(
                  'echo' => true,
                  'container' => false,
                  'theme_location'  => 'press-release-menu',
                );
                wp_nav_menu($defaults);
              ?>

            </div>            
            <div class="press-filters-title">
              <a href="#">
                <?php if($site_language == 'english'): ?>
                  <h5 class="hidden-xs hidden-sm">filter by location</h5>
                  <h5 class="visible-xs visible-sm">filter by</h5>

                <?php else: ?>
                  <h5 class="hidden-xs hidden-sm">依據點篩選</h5>
                  <h5 class="visible-xs visible-sm">依據點篩選</h5>
                <?php endif; ?>

              </a>
            </div>
            <div class="press-filters-content">

              
              <?php if($site_language == 'english'): ?>
                <h5 class="visible-xs visible-sm">filter by location</h5>

              <?php else: ?>
                <h5 class="visible-xs visible-sm">依據點篩選</h5>

              <?php endif; ?>


              <?php 
                $current_categories = post_type_categories('gallery-download');
              ?>
              <?php if (count($current_categories) > 0): ?>
                <ul class="filters">
                  <?php foreach($current_categories as $current_categories_item): ?>
                    <li>                  
                      <label>
                        <input type="checkbox" name="media_filter" class="media-filter" value="<?php echo $current_categories_item->slug; ?>" checked>
                        <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $current_categories_item->name; ?></span>
                      </label>
                    </li>
                  <?php endforeach; ?>

                </ul> <!-- filters -->
              <?php endif; ?>


              <?php 
                $filter_by_type_copy = "filter by type";
                $filter_by_images = "Images";
                $fitler_by_videos = "Videos";
                
                if($site_language == 'english'){
                  $filter_by_type_copy = "filter by type";
                  $filter_by_images = "Images";
                  $fitler_by_videos = "Videos";
                } else {
                  $filter_by_type_copy = "依類型篩選";
                  $filter_by_images = "圖片";
                  $fitler_by_videos = "影片";
                }
              ?>

              
              <h5 class="visible-xs visible-sm"><?php echo $filter_by_type_copy; ?></h5>
              <ul class="filters visible-xs visible-sm">
                <li>                  
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="images" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text"><?php echo $filter_by_images; ?></span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="videos" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text"><?php echo $fitler_by_videos; ?></span>
                  </label>
                </li>
              </ul>
              <div class="cta-container visible-xs visible-sm">
                <?php if($site_language == 'english'): ?>
                  <a href="#" id="filter-apply-btn-mobile" class="square-cta">Apply</a>
                <?php else: ?>
                  <a href="#" id="filter-apply-btn-mobile" class="square-cta">確定</a>
                <?php endif; ?>
              </div>
            </div>

            <div class="press-filters-title-02 hidden-xs hidden-sm">
              <a href="#">
                <h5><?php echo $filter_by_type_copy; ?></h5>
              </a>
            </div>
            <div class="press-filters-content-02 hidden-xs hidden-sm">              
              <ul class="filters">
                <li>                  
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="images" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text"><?php echo $filter_by_images; ?></span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="videos" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text"><?php echo $fitler_by_videos; ?></span>
                  </label>
                </li>                
              </ul>


              <?php echo $press_release_gallery_download_masonry_copyright; ?>


            </div>
          </div> <!-- press-filters-wrapper -->
        </div>  
      </div>              
      <div class="col-md-8 no-padding">
        <div id="page-press-media-container" class="page-press-content-container container-fluid reduce-padding">

          <div class="row">  

            <?php 

              //    ____ _____  _    ____ _____
              //   / ___|_   _|/ \  |  _ \_   _|
              //   \___ \ | | / _ \ | |_) || |
              //    ___) || |/ ___ \|  _ < | |
              //   |____/ |_/_/   \_\_| \_\|_|
              //

              $selected_list = $press_release_gallery_download_masonry_selected_list;

              if ($selected_list != ''):
                global $post;

                for ($i=0; $i < count($selected_list) ; $i++):

                  $selected_item_index = $i + 1;
                  $selected_item_id = $selected_list[$i%count($selected_list)];
                  $post = get_post( $selected_item_id );
                  setup_postdata( $post );

                  $selected_item_status = get_post_status();

                  if ($selected_item_status == 'publish'):

                    $banner = get_post_meta( $selected_item_id, PREFIX . "banner", true );
                    $banner_tablet = get_post_meta( $selected_item_id, PREFIX . "banner_tablet", true );
                    $banner_mobile = get_post_meta( $selected_item_id, PREFIX . "banner_mobile", true );

                    $masonry = get_post_meta( $selected_item_id, PREFIX . "masonry", true );
                    $masonry_grey = get_post_meta( $selected_item_id, PREFIX . "masonry_grey", true );

                    $title = get_post_meta( $selected_item_id, PREFIX . "title", true );
                    $copy = get_post_meta( $selected_item_id, PREFIX . "copy", true );
                    $asset_type = get_post_meta( $selected_item_id, PREFIX . "asset_type", true );

                    $digital_download_file = get_post_meta( $selected_item_id, PREFIX . "digital_download_file", true );

                    $vertical = get_post_meta( $selected_item_id, PREFIX . "vertical", true );
                    $video_file = get_post_meta( $selected_item_id, PREFIX . "video_file", true );

                    $category = '';
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        $category = esc_html( $categories[0]->slug );
                    }

            ?>

              <div class="media-gallery-item" 

                <?php if ($asset_type == 'image'): ?>
                  data-filters="<?php echo $category ?>, images" 
                <?php else: ?>
                  data-filters="<?php echo $category ?>, videos"
                  data-video="<?php echo $video_file; ?>"
                <?php endif; ?>

                data-title="<?php echo $title; ?>" 
                data-desc="<?php echo $copy; ?>" 
                data-img="<?php echo $banner; ?>"
                data-img-tablet="<?php echo $banner_tablet; ?>"
                data-img-mobile="<?php echo $banner_mobile; ?>"

                <?php if ($vertical == 'on'): ?>
                  data-vertical="true"
                <?php else: ?>
                  
                <?php endif; ?>

                data-digital-download="<?php echo $digital_download_file; ?>">

                <div class="col-md-4 col-sm-12 no-padding">                  
                  <div class="manic-image-container color-version">
                    <img src="" data-image="<?php echo $masonry; ?>" alt="">
                  </div>
                  <div class="manic-image-container white-version">
                    <img src="" data-image="<?php echo $masonry_grey; ?>" alt="">
                  </div>
                  <div class="overlay-content">
                    <div class="text-container">
                      <h5><?php echo $title; ?></h5>
                    </div>
                    <div class="cta-container">
                      <a href="#" class="plus-icon"></a>
                    </div>
                    <div class="cta-container-02">
                      
                      <?php if($site_language == 'english'): ?>
                        <a href="<?php echo $digital_download_file; ?>" target="_blank" download class="download-cta digital-download">Download High Resolution</a>
                      <?php else: ?>
                        <a href="<?php echo $digital_download_file; ?>" target="_blank" download class="download-cta digital-download">高清下載</a>
                      <?php endif; ?>

                    </div>                  
                  </div>                  
                </div><!-- end col-md-4 -->
              </div>

            <?php
                  endif;
                endfor; 

                wp_reset_postdata();
              endif;

              //    _____ _   _ ____
              //   | ____| \ | |  _ \
              //   |  _| |  \| | | | |
              //   | |___| |\  | |_| |
              //   |_____|_| \_|____/
              //

            ?>

            <div id="cloneable-media-gallery-item-large-container">
              <div class="col-md-12 no-padding">
                <div class="media-gallery-item-large">
                  <div class="close-btn"></div>
                  <!-- <div class="manic-video-container auto-replay" data-video="<?php echo THEMEROOT; ?>/images_cms/press/press-media-video-01.mp4">
                    <video class="video-js vjs-default-skin" poster="<?php echo THEMEROOT; ?>/images_cms/press/press-media-video-01.jpg" preload="auto" data-setup='{"controls": false}'>
                      <source src="" type="video/mp4">
                    </video>
                  </div> -->
                  <div class="normal-video-container">
                    <video controls="controls" style="width:100%" title="press-media-video-01">
                    </video>
                  </div>
                  <div class="normal-image-container">
                    <img src="<?php echo THEMEROOT; ?>/images_cms/press/press-media-03.jpg" class="img-responsive" alt="">
                  </div>             
                  <div class="overlay-content">
                    <div class="cta-container">

                      <?php if($site_language == 'english'): ?>
                        <a href="#" target="_blank" download class="digital-download download-cta">Download High Resolution</a>
                      <?php else: ?>
                        <a href="#" target="_blank" download class="digital-download download-cta">高清下載</a>
                      <?php endif; ?>
                      
                    </div>
                    <div class="text-container">
                      <h5>Kafnu Hong Kong Harbourfront</h5>
                      <p>Lorem ipsum dolor sit amet</p>
                    </div>                    
                  </div>
                </div>                
              </div>
            </div>

          </div> <!-- end row -->

        </div> <!-- end page-press-media-container -->
      </div>
    </div>
  </div>
</article>


<div id="page-press-filtered-section-end"></div>