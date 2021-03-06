  <!-- INSERT GOOGLE ANALYTICS HERE -->


  <!-- INSERT FONTS HERE -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700" rel="stylesheet">

  <?php if(DEBUG): ?>

    <!--
       ____  _______     _______ _     ___  ____  __  __ _____ _   _ _____   __  __  ___  ____  _____
      |  _ \| ____\ \   / / ____| |   / _ \|  _ \|  \/  | ____| \ | |_   _| |  \/  |/ _ \|  _ \| ____|
      | | | |  _|  \ \ / /|  _| | |  | | | | |_) | |\/| |  _| |  \| | | |   | |\/| | | | | | | |  _|
      | |_| | |___  \ V / | |___| |__| |_| |  __/| |  | | |___| |\  | | |   | |  | | |_| | |_| | |___
      |____/|_____|  \_/  |_____|_____\___/|_|   |_|  |_|_____|_| \_| |_|   |_|  |_|\___/|____/|_____|

    -->


    <!-- INSERT CSS HERE -->
    <link rel="stylesheet" type="text/css" href="<?php echo THEMEROOT; ?>/kafnu_assets/css/style.css">

    <!-- INSERT JS HERE -->
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/js/manic-polyfill.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/jquery-other/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/jquery-other/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/misc-js/mobile-detect.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/misc-js/preloadjs-0.4.0.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/gsap/src/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/gsap/src/minified/jquery.gsap.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/gsap/src/minified/easing/EasePack.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/slick-carousel/slick/slick.min.js"></script>
    
    <!-- validate -->
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/jquery-validate/jquery.validate.min.js"></script>

    <!-- Google Map -->    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvuQ_GJxtg5QhhRnzerBTnDJrKKQz_S4"
    async defer></script>

    <!-- Isotope Grid -->
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/isotope/isotope.pkgd.min.js"></script>

    <!-- Wow Animation -->
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/wow/wow.min.js"></script>
    
    <!-- Google Closure -->
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/libs/google-closure/closure-library/closure/goog/base.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/js/google-closure-dependency-list.js"></script>
    <script type="text/javascript">
      goog.require('kafnu.page.Default');
    </script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        page = new kafnu.page.Default({});    
      });
    </script>

  <?php else: ?>

    
    <?php 
      /*
      the old way
      <script type="text/javascript" src="<?php echo THEMEROOT; ?>/kafnu_assets/js/minified/head.load.min.js"></script>
       */
    ?>

    <script type="text/javascript">
      <?php require_once( __DIR__ . '/../kafnu_assets/js/minified/head.load.min.js'); ?>
    </script>

    <script type="text/javascript">

      

      // var PAGE_LIBRARY        = "<?php echo THEMEROOT; ?>/kafnu_assets/js/minified/libraries-default.min.js";
      // var MAP_LIBRARY        = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvuQ_GJxtg5QhhRnzerBTnDJrKKQz_S4";
      // var PAGE_JS             = "<?php echo THEMEROOT; ?>/kafnu_assets/js/minified/page-default.min.js";
      // var PAGE_CSS            = "<?php echo THEMEROOT; ?>/kafnu_assets/css/style.css";
      
      var random              = Math.floor( Math.random() * 10000 );
      var PAGE_LIBRARY        = "<?php echo THEMEROOT; ?>/kafnu_assets/js/minified/libraries-default.min.js?random=" + random;
      var MAP_LIBRARY         = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvuQ_GJxtg5QhhRnzerBTnDJrKKQz_S4";
      var PAGE_JS             = "<?php echo THEMEROOT; ?>/kafnu_assets/js/minified/page-default.min.js?random=" + random;
      var PAGE_CSS            = "<?php echo THEMEROOT; ?>/kafnu_assets/css/style.css?random=" + random;
      
      window.head_js = head;
      
      window.head_js.load(PAGE_CSS);
      window.head_js.load(PAGE_LIBRARY, function() {

        if(jQuery('.has-map-element').length != 0) {
          window.head_js.load(MAP_LIBRARY, function() {
            window.head_js.load(PAGE_JS, function() {
              window.page = new kafnu.page.Default({});
            });
          });
          
        } else {
          window.head_js.load(PAGE_JS, function() {
            window.page = new kafnu.page.Default({});
          });
        }
        
      });
    </script>

  <?php endif; ?>
