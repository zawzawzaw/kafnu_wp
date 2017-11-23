<?php 
  // don't need any variables here, just call all the 'press-release' posts arranged by date
?>


<article id="page-press-filtered-section">
  <div id="filter-sticky-trigger-mobile"></div>
  <div class="container-fluid reduce-padding">
    
    <div class="row row-eq-height">
      <div class="col-md-4">
        <div id="page-press-filter-options-container">
          <div class="bg"></div>
          <div class="press-links">

            <?php 
              $defaults = array(
                'echo' => true,
                'container' => false,
                'theme_location'  => 'press-release-menu',
              );
              wp_nav_menu($defaults);
            ?>
          </div> <!-- press-links -->
          <div class="press-filters-title">
            <a href="#">
              <h5 class="hidden-xs hidden-sm">filter by location</h5>
              <h5 class="visible-xs visible-sm">filter by</h5>
            </a>
          </div>
          <div class="press-filters-content">

            
            <?php 
              $current_categories = post_type_categories('press-release');
            ?>

            <?php if (count($current_categories) > 0): ?>
              <ul class="filters">

                <?php foreach($current_categories as $current_categories_item): ?>
                  <li>
                    <label>
                      <input type="checkbox" name="article_filter" class="article-filter" value="<?php echo $current_categories_item->slug; ?>" checked>
                      <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                      <span class="text"><?php echo $current_categories_item->name; ?></span>
                    </label>
                  </li>
                <?php endforeach; ?>

              </ul> <!-- filters -->
            <?php endif; ?>

            <div class="cta-container visible-xs visible-sm">
              <a href="#" id="filter-apply-btn-mobile" class="square-cta">Apply</a>
            </div>

          </div>
        </div> <!-- page-press-filter-options-container -->
      </div>
      <div class="col-md-6 col-md-offset-1">
        <div id="page-press-articles-container" class="page-press-content-container">

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
              'posts_per_page' => -1,
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

                  // temp
                  // $item_date = '20 october 2017';
                  $item_date = get_the_date( 'j  F, Y' );

                  $category = '';
                  $categories = get_the_category();
                  if ( ! empty( $categories ) ) {
                      $category = esc_html( $categories[0]->slug );
                  }
          ?>
            <div class="press-article" data-country="<?php echo $category; ?>">
              <div class="text-container">
                <?php if (isset($subtitle) && $subtitle != ''): ?>
                  <h6><?php echo $item_date; ?>, <?php echo $subtitle ?></h6>
                <?php else: ?>
                  <h6><?php echo $item_date; ?></h6>
                <?php endif; ?>

                <h5><?php echo get_the_title(); ?></h5>
                <p><?php echo get_the_excerpt(); ?></p>
              </div>

              <div class="cta-container">
                <a href="<?php echo get_the_permalink(); ?>" class="plus-cta">Read More</a>
                <?php if (isset($download_article_file) && $download_article_file !=''): ?>
                  <a href="<?php echo $download_article_file; ?>" target="_blank" class="download-cta color-version">Download Article</a>
                <?php endif; ?>
              </div>
            </div>

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


        </div> <!-- page-press-articles-container -->
      </div>
    </div>
  </div> <!-- container-fluid -->
</article>