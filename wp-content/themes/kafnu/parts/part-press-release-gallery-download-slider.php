<?php 
  $press_release_gallery_download_slider_selected_list = wds_page_builder_get_this_part_data( PREFIX . "press_release_gallery_download_slider_selected_list" );
  $press_release_gallery_download_slider_copyright = wds_page_builder_get_this_part_data( PREFIX . "press_release_gallery_download_slider_copyright" );
?>



<article id="page-press-main-content-section-02">
  <div id="page-press-slider-container">
    <div id="page-press-slider" class="kafnu-slick-slider">

      <?php 

        //    ____ _____  _    ____ _____
        //   / ___|_   _|/ \  |  _ \_   _|
        //   \___ \ | | / _ \ | |_) || |
        //    ___) || |/ ___ \|  _ < | |
        //   |____/ |_/_/   \_\_| \_\|_|
        //

        $selected_list = $press_release_gallery_download_slider_selected_list;

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

              $title = get_post_meta( $selected_item_id, PREFIX . "title", true );
              $copy = get_post_meta( $selected_item_id, PREFIX . "copy", true );
              $print_download_file = get_post_meta( $selected_item_id, PREFIX . "print_download_file", true );
              $digital_download_file = get_post_meta( $selected_item_id, PREFIX . "digital_download_file", true );

      ?>

        <div class="page-press-slider-item"
          data-title="<?php echo $title; ?>"
          data-copy="<?php echo $copy; ?>"
          data-print-download="<?php echo $print_download_file; ?>"
          data-digital-download="<?php echo $digital_download_file; ?>">

          <div class="manic-image-container">
            <img src="" 
              data-image-desktop="<?php echo $banner; ?>"
              data-image-tablet="<?php echo $banner_tablet; ?>"
              data-image-mobile="<?php echo $banner_mobile; ?>" alt="<?php echo $title; ?>">
          </div>        
        </div> <!-- end page-press-slider-item -->

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

    </div>
    <div id="page-press-slider-caption">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="text-container">
              <h5>Kafnu Hong Kong</h5>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
          <div class="col-md-8">
            <div class="cta-container">
              <a href="#" download="#" target="_blank" class="download-cta" id="page-press-slider-caption-digital-cta">download for digital</a>
              <a href="#" download="#" target="_blank" class="download-cta" id="page-press-slider-caption-print-cta">download for print</a>
              <?php echo $press_release_gallery_download_slider_copyright; ?>

            </div>      
          </div> <!-- end col-md-6 -->
        </div>
      </div> <!-- end container-fluid -->        
    </div>  
  </div> <!-- page-press-slider-caption -->

  <div id="page-press-thumbnail-slider" class="kafnu-slick-slider"> 

    <?php 

      //    ____ _____  _    ____ _____
      //   / ___|_   _|/ \  |  _ \_   _|
      //   \___ \ | | / _ \ | |_) || |
      //    ___) || |/ ___ \|  _ < | |
      //   |____/ |_/_/   \_\_| \_\|_|
      //

      $selected_list = $press_release_gallery_download_slider_selected_list;

      if ($selected_list != ''):
        global $post;

        for ($i=0; $i < count($selected_list) ; $i++):

          $selected_item_index = $i + 1;
          $selected_item_id = $selected_list[$i%count($selected_list)];
          $post = get_post( $selected_item_id );
          setup_postdata( $post );

          $selected_item_status = get_post_status();

          if ($selected_item_status == 'publish'):

            $title = get_post_meta( $selected_item_id, PREFIX . "title", true );
            $grey_thumbnail = get_post_meta( $selected_item_id, PREFIX . "grey_thumbnail", true );
    ?>
      
      <div class="page-press-thumbnail-slider-item">
        <div class="normal-image-container">
          <img src="<?php echo $grey_thumbnail; ?>" class="img-responsive" alt="<?php echo $title; ?>">
        </div>
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

  </div>
</article>