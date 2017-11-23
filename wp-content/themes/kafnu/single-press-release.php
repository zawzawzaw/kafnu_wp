<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
  $page_id = get_the_ID();

  $subtitle = get_post_meta( $page_id, PREFIX . "subtitle", true );
  $download_article_file = get_post_meta( $page_id, PREFIX . "download_article_file", true );

  $post_date = get_the_date( 'j F Y' );

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
          
          <?php 
            $share_message = 'Check this out!';
            $current_url = get_permalink();

            $facebook_share_url = 'http://www.facebook.com/sharer.php?u=' . custom_encodeURIComponent($current_url);
            $twitter_share_url = 'https://twitter.com/share?url=' . custom_encodeURIComponent($current_url) . '&amp;text=' . custom_encodeURIComponent($share_message);
          ?>

          <div class="press-sidebar-social-container">
            <h5>Share</h5>
            <ul>
              <li><a href="<?php echo $facebook_share_url; ?>" class="fa fa-facebook"></a></li>
              <li><a href="<?php echo $twitter_share_url; ?>" class="fa fa-twitter"></a></li>
              <!-- 
              <li><a href="" class="fa fa-envelope"></a></li>
              -->
            </ul>
          </div> <!-- press-sidebar-social-container -->

          <div class="press-sidebar-cta-container">
            <a href="<?php echo home_url('wordpress-press-release'); ?>" id="press-sidebar-back-cta"  class="download-cta color-version">Back to list</a>

            <?php if (isset($download_article_file) && $download_article_file != ''): ?>
              <div class="press-sidebar-cta-seperator"></div>
              <a href="<?php echo $download_article_file; ?>" target="_blank" id="press-sidebar-download-cta" class="download-cta color-version">Download article</a>
            <?php endif; ?>
            
            
          </div> <!-- press-sidebar-cta-container -->

        </div>  
      </div>              
      <div class="col-md-6 col-md-offset-1">

        <div id="press-release-content-copy">
          <div class="default-copy">


            <div class="press-release-content-title">
              <?php if (isset($subtitle) && $subtitle != ''): ?>
                <h4><?php echo $post_date; ?>, <?php echo $subtitle ?></h4>
              <?php else: ?>
                <h4><?php echo $post_date; ?></h4>
              <?php endif; ?>
              
              <h1><?php echo get_the_title(); ?></h1>
            </div> <!-- press-release-content-title -->

            <?php the_content(); ?>

          </div> <!-- default-copy -->
        </div> <!-- press-release-content-copy -->

      </div>
    </div>
  </div>
</article>

<?php endwhile; else : ?>

  <article>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="default-copy">
            <h1>Post not found.</h1>
          </div> <!-- default-copy -->

        </div>
      </div>
    </div>
  </article>

<?php endif; ?>

<?php get_footer(); ?>