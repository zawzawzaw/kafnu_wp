<?php 
  

  $default_image_and_note_title = wds_page_builder_get_this_part_data( PREFIX . "default_image_and_note_title" );
  $default_image_and_note_copy = wds_page_builder_get_this_part_data( PREFIX . "default_image_and_note_copy" );

  $default_image_and_note_image = wds_page_builder_get_this_part_data( PREFIX . "default_image_and_note_image" );
  $default_image_and_note_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "default_image_and_note_image_tablet" );
  $default_image_and_note_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "default_image_and_note_image_mobile" );

  $default_image_and_note_image_id = wds_page_builder_get_this_part_data( PREFIX . 'default_image_and_note_image_id' );
  $default_image_and_note_image_tablet = get_manic_tablet_image($default_image_and_note_image_id, $default_image_and_note_image_tablet);  
  $default_image_and_note_image_mobile = get_manic_mobile_image($default_image_and_note_image_id, $default_image_and_note_image_mobile);
?>








<!--
   ___ __  __    _    ____ _____      _    _   _ ____    _   _  ___ _____ _____
  |_ _|  \/  |  / \  / ___| ____|    / \  | \ | |  _ \  | \ | |/ _ \_   _| ____|
   | || |\/| | / _ \| |  _|  _|     / _ \ |  \| | | | | |  \| | | | || | |  _|
   | || |  | |/ ___ \ |_| | |___   / ___ \| |\  | |_| | | |\  | |_| || | | |___
  |___|_|  |_/_/   \_\____|_____| /_/   \_\_| \_|____/  |_| \_|\___/ |_| |_____|

-->

<article id="page-play-extra-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-1">
            
        <div class="page-play-extra-content-container drink-tab active-tab">
          <div id="page-play-extra-content">
            <div class="manic-image-container hidden-xs hidden-sm">
              <img src="" data-image-desktop="<?php echo $default_image_and_note_image; ?>" alt="">
            </div>

            <div class="text-container">
              <?php if (isset($default_image_and_note_title) && $default_image_and_note_title != '' ): ?>
                <h2><?php echo $default_image_and_note_title; ?></h2>
              <?php endif; ?>

              <?php if (isset($default_image_and_note_copy) && $default_image_and_note_copy != '' ): ?>
                <p><?php echo $default_image_and_note_copy; ?></p>
              <?php endif; ?>
              
            </div>

            <div class="manic-image-container visible-xs visible-sm">
              <img src="" data-image-tablet="<?php echo $default_image_and_note_image_tablet; ?>"
                          data-image-mobile="<?php echo $default_image_and_note_image_mobile; ?>" alt="">
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</article>

