<?php 
  $press_release_banner_title = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_title" );
  $press_release_banner_subtitle = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_subtitle" );
  $press_release_banner_copy = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_copy" );
  $press_release_banner_cta = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_cta" );
  $press_release_banner_image = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_image" );
  $press_release_banner_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_image_tablet" );
  $press_release_banner_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "press_release_banner_image_mobile" );
  
?>



<?php echo $press_release_banner_title; ?>

<?php if (isset($press_release_banner_subtitle) && $press_release_banner_subtitle != ''): ?>
  <?php echo $press_release_banner_subtitle; ?>
<?php endif; ?>


<?php echo $press_release_banner_copy; ?>


<?php if (isset($press_release_banner_cta) && $press_release_banner_cta != ''): ?>
  <?php echo $press_release_banner_cta; ?>
<?php endif; ?>

<img src="" data-image-desktop="<?php echo $press_release_banner_image; ?>">
<img src="" data-image-desktop="<?php echo $press_release_banner_image_tablet; ?>">
<img src="" data-image-desktop="<?php echo $press_release_banner_image_mobile; ?>">
