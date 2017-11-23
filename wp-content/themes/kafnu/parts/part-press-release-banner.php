<?php 
  $press_release_banner_title = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_title" );
  $press_release_banner_subtitle = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_subtitle" );
  $press_release_banner_copy = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_copy" );
  $press_release_banner_cta = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_cta" );
  $press_release_banner_image = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_image" );
  $press_release_banner_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_image_tablet" );
  $press_release_banner_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_image_mobile" );
  
?>

<article id="page-default-banner-section" class="">
  <div id="page-default-banner-image" class="press-version visible-lg visible-md">
    <div class="container-fluid reduce-padding">
      <div class="row">
        <div class="col-lg-8 col-md-8 no-padding">
          <div class="manic-image-container">
            <img src="" data-image-desktop="<?php echo $press_release_banner_image; ?>">
          </div>

          <div id="page-default-banner-copy-container" class="left-version press-version">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6 col-md-12">

                  <div id="page-default-banner-copy">
                    <?php if (isset($press_release_banner_subtitle) && $press_release_banner_subtitle != ''): ?>
                      <h5><?php echo $press_release_banner_subtitle; ?></h5>
                    <?php endif; ?>

                    <h2><?php echo $press_release_banner_title; ?></h2>

                    <?php if (isset($press_release_banner_copy) && $press_release_banner_copy != ''): ?>
                      <p><?php echo $press_release_banner_copy; ?></p>
                    <?php endif; ?>

                    <?php if (isset($press_release_banner_cta) && $press_release_banner_cta != ''): ?>
                      <a href="<?php echo $press_release_banner_cta['link']; ?>" class="plus-cta"><?php echo $press_release_banner_cta['copy']; ?></a>
                    <?php endif; ?>

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

              <?php 

                //    ____ _____  _    ____ _____
                //   / ___|_   _|/ \  |  _ \_   _|
                //   \___ \ | | / _ \ | |_) || |
                //    ___) || |/ ___ \|  _ < | |
                //   |____/ |_/_/   \_\_| \_\|_|
                //

                global $post;

                $args=array(
                  'post_type' => 'press-release',
                  'post_status' => 'publish',
                  'posts_per_page' => 4,
                );
                $my_query = new WP_Query($args);

                // var_dump($my_query);

                if( $my_query->have_posts() ):
                  while( $my_query->have_posts() ):
                    $my_query->the_post();

                      $post_id = get_the_ID();
                      $title = get_post_meta( $post_id, PREFIX . 'title', true );
                      $subtitle = get_post_meta( $post_id, PREFIX . 'subtitle', true );
                      $download_article_file = get_post_meta( $post_id, PREFIX . 'download_article_file', true );

                      // $item_date = '20 october 2017';
                      $item_date = get_the_date( 'j  F, Y' );
              ?>

                <div class="banner-sidebar-item">
                  <div class="banner-sidebar-item-text">
                    <?php if (isset($subtitle) && $subtitle != ''): ?>
                      <p><?php echo $item_date; ?>, <?php echo $subtitle ?></p>
                    <?php else: ?>
                      <p><?php echo $item_date; ?></p>
                    <?php endif; ?>
                    <a href="<?php echo get_the_permalink(); ?>"><h5><?php echo get_the_title(); ?></h5></a>
                  </div>
                </div><!-- banner-sidebar-item -->

              <?php 
                  endwhile;
                endif;
                wp_reset_query();

                //    _____ _   _ ____
                //   | ____| \ | |  _ \
                //   |  _| |  \| | | | |
                //   | |___| |\  | |_| |
                //   |_____|_| \_|____/
                //
              
              ?>

              <div class="banner-sidebar-cta">
                <a href="<?php echo home_url('wordpress-press-release'); ?>" class="square-cta border-version">See More Press Releases</a>
              </div><!-- banner-sidebar-item -->                   

            </div>           

          </div> <!-- banner-sidebar-container -->
        </div>
      </div> <!-- row -->
    </div>
  </div> <!-- page-default-banner-image -->
  
  <div id="page-default-banner-image-mobile" class="press-version visible-sm visible-xs">
    <div class="manic-image-container has-window-height">
      <img src="" data-image-tablet="<?php echo $press_release_banner_image_tablet; ?>"
                  data-image-mobile="<?php echo $press_release_banner_image_mobile; ?>">
    </div>
    <div id="page-default-banner-copy-container" class="left-version press-version">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12">

            <div id="page-default-banner-copy">

              <?php if (isset($press_release_banner_subtitle) && $press_release_banner_subtitle != ''): ?>
                <h5><?php echo $press_release_banner_subtitle; ?></h5>
              <?php endif; ?>

              <h2><?php echo $press_release_banner_title; ?></h2>

              <?php if (isset($press_release_banner_cta) && $press_release_banner_cta != ''): ?>
                <a href="<?php echo $press_release_banner_cta['link']; ?>" class="plus-cta"><?php echo $press_release_banner_cta['copy']; ?></a>
              <?php endif; ?>

            </div> <!-- page-default-banner-copy -->

          </div>
        </div>
      </div>
    </div> <!-- page-default-banner-copy-container -->      
  </div>
  <div id="banner-sidebar-container-02" class="visible-sm visible-xs">

    <div id="banner-sidebar-content">

      <div class="banner-sidebar-title">
        <h5>Press Releases</h5>                  
      </div>


      <?php 

        //    ____ _____  _    ____ _____
        //   / ___|_   _|/ \  |  _ \_   _|
        //   \___ \ | | / _ \ | |_) || |
        //    ___) || |/ ___ \|  _ < | |
        //   |____/ |_/_/   \_\_| \_\|_|
        //

        global $post;

        $args=array(
          'post_type' => 'press-release',
          'post_status' => 'publish',
          'posts_per_page' => 4,
        );
        $my_query = new WP_Query($args);

        // var_dump($my_query);

        if( $my_query->have_posts() ):
          while( $my_query->have_posts() ):
            $my_query->the_post();

              $post_id = get_the_ID();
              $title = get_post_meta( $post_id, PREFIX . 'title', true );
              $subtitle = get_post_meta( $post_id, PREFIX . 'subtitle', true );
              $download_article_file = get_post_meta( $post_id, PREFIX . 'download_article_file', true );

              // $item_date = '20 october 2017';
              $item_date = get_the_date( 'j  F, Y' );
      ?>

        <div class="banner-sidebar-item">              
          <div class="banner-sidebar-item-text">                
            <?php if (isset($subtitle) && $subtitle != ''): ?>
              <p><?php echo $item_date; ?>, <?php echo $subtitle ?></p>
            <?php else: ?>
              <p><?php echo $item_date; ?></p>
            <?php endif; ?>
            <a href="<?php echo get_the_permalink(); ?>"><h5><?php echo get_the_title(); ?></h5></a>
          </div>
        </div><!-- banner-sidebar-item -->

      <?php 
          endwhile;
        endif;
        wp_reset_query();

        //    _____ _   _ ____
        //   | ____| \ | |  _ \
        //   |  _| |  \| | | | |
        //   | |___| |\  | |_| |
        //   |_____|_| \_|____/
        //
      
      ?>

      <div class="banner-sidebar-cta">              
        <a href="<?php echo get_the_permalink('press'); ?>" class="square-cta border-version">See More Press Releases</a>
      </div><!-- banner-sidebar-item -->                   

    </div>           

  </div> <!-- banner-sidebar-container -->      

</article> <!-- page-default-banner-section -->
