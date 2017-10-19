<?php get_header(); ?>

<div id="page-wrapper">
  <div id="page-wrapper-content">


    <div id="page-home-nav-trigger"></div>

    <!-- <div class="header-mobile-spacer hidden-lg hidden-md"></div> -->


    <!--
       ____    _    _   _ _   _ _____ ____
      | __ )  / \  | \ | | \ | | ____|  _ \
      |  _ \ / _ \ |  \| |  \| |  _| | |_) |
      | |_) / ___ \| |\  | |\  | |___|  _ <
      |____/_/   \_\_| \_|_| \_|_____|_| \_\

    -->

    <article id="page-default-banner-section">
      <div id="page-default-banner-image" class="visible-lg visible-md test">
        <div class="manic-image-container has-window-height">
          <img src="" data-image-desktop="<?php echo home_url(); ?>/wp-content/uploads/2017/10/404-banner.jpg">
        </div>
      </div>
      <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
        <div class="manic-image-container has-window-height">
          <img src="" data-image-tablet="<?php echo home_url(); ?>/wp-content/uploads/2017/10/404-banner.jpg"
                      data-image-mobile="<?php echo home_url(); ?>/wp-content/uploads/2017/10/404-banner.jpg">
        </div>
      </div>

      <div id="page-default-banner-copy-container" class="left-version vertical-center-version">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

              <div id="page-default-banner-copy">
                <h1>Sorry, we can’t seem to find <br class="hidden-xs"> the page you’re looking for.</h1>
                <a href="index.html" class="return-cta"><h5>Return to Home Page</h5></a>
              </div> <!-- page-default-banner-copy -->

            </div>
          </div>
        </div>
      </div> <!-- page-default-banner-copy-container -->

    </article> <!-- page-default-banner-section -->


  </div> <!-- #page-wrapper-content -->
</div> <!-- #page-wrapper -->

<?php get_footer(); ?>