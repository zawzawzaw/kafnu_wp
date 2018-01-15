<?php 
  

$default_centered_text_title = wds_page_builder_get_this_part_data( PREFIX . 'default_centered_text_title');
$default_centered_text_copy = wds_page_builder_get_this_part_data( PREFIX . 'default_centered_text_copy');
$default_centered_text_is_white_bg = wds_page_builder_get_this_part_data( PREFIX . 'default_centered_text_is_white_bg');
$default_centered_text_cta = wds_page_builder_get_this_part_data( PREFIX . 'default_centered_text_cta');


$extra_class = '';
$country_version = false;

if (isset($default_centered_text_is_white_bg) && $default_centered_text_is_white_bg == "on") {
  $extra_class = 'country-version';
  $country_version = true;
}

// new version
if (isset($default_centered_text_cta) && $default_centered_text_cta != '') {

  if (isset($default_centered_text_cta['copy']) && $default_centered_text_cta['copy'] != '' &&
      isset($default_centered_text_cta['link']) && $default_centered_text_cta['link'] != '') {

    $extra_class .= ' press-version';
  }
  
}

  



?>



<?php if ($country_version): ?>

  <article id="page-default-connect-with-world-section" class="country-version">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <?php if (isset($default_centered_text_title) && $default_centered_text_title != ''): ?>
            <h4><?php echo $default_centered_text_title; ?></h4>
          <?php endif; ?>

          <?php if (isset($default_centered_text_copy) && $default_centered_text_copy != ''): ?>
            <p><?php echo $default_centered_text_copy; ?></p>
          <?php endif; ?>
          
        </div>
      </div>
    </div>
  </article>

<?php else: ?>

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

          <?php if(isset($default_centered_text_cta) && $default_centered_text_cta != ''): ?>
            <?php if (isset($default_centered_text_cta['copy']) && $default_centered_text_cta['copy'] != '' &&
                      isset($default_centered_text_cta['link']) && $default_centered_text_cta['link'] != ''): ?>
                    
              <a href="<?php echo $default_centered_text_cta['link']; ?>" class="square-cta border-version"><?php echo $default_centered_text_cta['copy']; ?></a>

            <?php endif; ?>
          <?php endif; ?>
          
        </div>
      </div>
    </div>
  </article>
<?php endif; ?>
