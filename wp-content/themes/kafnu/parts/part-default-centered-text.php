<?php 
  

$default_centered_text_title = wds_page_builder_get_this_part_data( PREFIX . 'default_centered_text_title');
$default_centered_text_copy = wds_page_builder_get_this_part_data( PREFIX . 'default_centered_text_copy');
$default_centered_text_is_white_bg = wds_page_builder_get_this_part_data( PREFIX . 'default_centered_text_is_white_bg');


$extra_class = '';

if (isset($default_centered_text_is_white_bg) && $default_centered_text_is_white_bg == "on") {
  $extra_class = 'country-version';
}

?>

<div class="has-wow-element"></div>

<article id="page-default-connect-with-world-section" class="<?php echo $extra_class; ?>">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <?php if (isset($default_centered_text_title) && $default_centered_text_title != ''): ?>
          <h4 data-wow-offset="50" class="wow fadeInUp"><?php echo $default_centered_text_title; ?></h4>
        <?php endif; ?>

        <?php if (isset($default_centered_text_copy) && $default_centered_text_copy != ''): ?>
          <p data-wow-offset="100" class="wow fadeInUp"><?php echo $default_centered_text_copy; ?></p>
        <?php endif; ?>
        
      </div>
    </div>
  </div>
</article>