<?php 
  $press_release_fsmc_factsheet_title = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_title" );
  $press_release_fsmc_factsheet_copy = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_copy" );
  $press_release_fsmc_factsheet_cta_01 = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_cta_01" );
  $press_release_fsmc_factsheet_cta_02 = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_factsheet_cta_02" );
  $press_release_fsmc_contact_title = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_title" );
  $press_release_fsmc_contact_copy = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_copy" );
  $press_release_fsmc_contact_cta = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_cta" );
  $press_release_fsmc_contact_general_title = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_general_title" );
  $press_release_fsmc_contact_general_email = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_general_email" );
  
  $press_release_fsmc_contact_list = wds_page_builder_get_this_part_data( PREFIX . "press_release_fsmc_contact_list" );
?>





<?php echo $press_release_fsmc_factsheet_title; ?>
<?php echo $press_release_fsmc_factsheet_copy; ?>


<?php if (isset($press_release_fsmc_factsheet_cta_01) && $press_release_fsmc_factsheet_cta_01 != ''): ?>
  <?php echo $press_release_fsmc_factsheet_cta_01; ?>
<?php endif; ?>



<?php if (isset($press_release_fsmc_factsheet_cta_02) && $press_release_fsmc_factsheet_cta_02 != ''): ?>
  <?php echo $press_release_fsmc_factsheet_cta_02; ?>
<?php endif; ?>



<?php echo $press_release_fsmc_contact_title; ?>
<?php echo $press_release_fsmc_contact_copy; ?>

<?php if (isset($press_release_fsmc_contact_cta) && $press_release_fsmc_contact_cta != ''): ?>
  <?php echo $press_release_fsmc_contact_cta; ?>
<?php endif; ?>



<?php echo $press_release_fsmc_contact_general_title; ?>

<?php if (isset($press_release_fsmc_contact_general_email) && $press_release_fsmc_contact_general_email != ''): ?>
  <?php echo $press_release_fsmc_contact_general_email; ?>
<?php endif; ?>



<h1>data</h1>
<?php var_dump($press_release_fsmc_contact_list); ?>