<?php 
  $press_release_fsmc_factsheet_title = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_title" );
  $press_release_fsmc_factsheet_copy = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_copy" );
  $press_release_fsmc_factsheet_cta_01 = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_cta_01" );
  $press_release_fsmc_factsheet_cta_02 = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_cta_02" );

  $press_release_fsmc_factsheet_banner_image = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_banner_image" );
  $press_release_fsmc_factsheet_banner_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_banner_image_tablet" );
  $press_release_fsmc_factsheet_banner_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_banner_image_mobile" );

  $press_release_fsmc_contact_title = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_title" );
  $press_release_fsmc_contact_copy = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_copy" );
  $press_release_fsmc_contact_cta = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_cta" );
  $press_release_fsmc_contact_general_title = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_general_title" );
  $press_release_fsmc_contact_general_email = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_general_email" );
  
  $press_release_fsmc_contact_list = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_list" );
?>

<article id="page-press-main-content-section">
  <div class="container-fluid reduce-padding">
    
    <div id="page-press-fact-sheets">
      <div class="row">

        <div class="col-md-8 no-padding">
          <div class="manic-image-container">
            <img src="" data-image-desktop="<?php echo $press_release_fsmc_factsheet_banner_image; ?>"
             data-image-tablet="<?php echo $press_release_fsmc_factsheet_banner_image_tablet; ?>"
             data-image-mobile="<?php echo $press_release_fsmc_factsheet_banner_image_mobile; ?>" alt="">
          </div>
          <div class="image-caption">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-7">
                  
                    <div class="text-container">
                      <h5><?php echo $press_release_fsmc_factsheet_title; ?></h5>
                      <p><?php echo $press_release_fsmc_factsheet_copy; ?></p>
                    </div>

                    <?php if ((isset($press_release_fsmc_factsheet_cta_01) && $press_release_fsmc_factsheet_cta_01 != '') || 
                              (isset($press_release_fsmc_factsheet_cta_02) && $press_release_fsmc_factsheet_cta_02 != '') ): 
                    ?>
                      <div class="cta-container">
                        <?php if (isset($press_release_fsmc_factsheet_cta_01) && $press_release_fsmc_factsheet_cta_01 != ''): ?>
                          <a href="<?php echo $press_release_fsmc_factsheet_cta_01['link']; ?>" class="download-cta"><?php echo $press_release_fsmc_factsheet_cta_01['copy']; ?></a>
                        <?php endif; ?>

                        <?php if (isset($press_release_fsmc_factsheet_cta_02) && $press_release_fsmc_factsheet_cta_02 != ''): ?>
                          <a href="<?php echo $press_release_fsmc_factsheet_cta_02['link']; ?>" class="download-cta"><?php echo $press_release_fsmc_factsheet_cta_02['copy']; ?></a>
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>

                </div>
              </div>
            </div>
          </div> <!-- end image-caption -->      
          
        </div>

        <div class="col-md-4 no-padding">
          <div id="page-press-contact">
            <div class="text-container">
              <div class="text-content">
                <h6><?php echo $press_release_fsmc_contact_title; ?></h6>


                <?php 

                  //    ____ _____  _    ____ _____
                  //   / ___|_   _|/ \  |  _ \_   _|
                  //   \___ \ | | / _ \ | |_) || |
                  //    ___) || |/ ___ \|  _ < | |
                  //   |____/ |_/_/   \_\_| \_\|_|
                  //

                  if ($press_release_fsmc_contact_list != ''):
                    global $post;

                    for ($i=0; $i < count($press_release_fsmc_contact_list) ; $i++):

                      $ress_release_fsmc_contact_index = $i + 1;
                      $ress_release_fsmc_contact_id = $press_release_fsmc_contact_list[$i%count($press_release_fsmc_contact_list)];
                      $post = get_post( $ress_release_fsmc_contact_id );
                      setup_postdata( $post );

                      $ress_release_fsmc_contact_status = get_post_status();

                      if ($ress_release_fsmc_contact_status == 'publish'):

                        $detail_name = get_post_meta( $ress_release_fsmc_contact_id, PREFIX . "name", true );
                        $detail_position = get_post_meta( $ress_release_fsmc_contact_id, PREFIX . "position", true );
                        $detail_email_address = get_post_meta( $ress_release_fsmc_contact_id, PREFIX . "email_address", true );

                ?>

                  <h5><?php echo $detail_name; ?></h5>

                  <?php if (isset($detail_position) && $detail_position != ''): ?>
                    <p><?php echo $detail_position; ?></p>
                  <?php endif; ?>
                  
                  <a href="mailto:<?php echo $detail_email_address; ?>"><?php echo $detail_email_address; ?></a>  

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
              <div class="text-content">

                <h6><?php echo $press_release_fsmc_contact_general_title; ?></h6>
                <?php if (isset($press_release_fsmc_contact_general_email) && $press_release_fsmc_contact_general_email != ''): ?>
                  <a href="mailto:<?php echo $press_release_fsmc_contact_general_email; ?>"><?php echo $press_release_fsmc_contact_general_email; ?></a>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>

      </div> <!-- end row -->
    </div>  <!-- end page-press-fact-sheets -->

  </div>
</article>