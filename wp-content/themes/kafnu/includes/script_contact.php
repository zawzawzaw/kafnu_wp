  <!-- INSERT GOOGLE ANALYTICS HERE -->


  <!-- INSERT FONTS HERE -->

  <!-- Google Font -->
  <!-- Merriweather Bold -->
  <!-- Fira Sans Light, Regular, Medium, Bold -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700" rel="stylesheet">


  <?php $is_debug = false; ?>

  <?php if ($is_debug == true): ?>

    <!--
       ____  _______     _______ _     ___  ____  __  __ _____ _   _ _____   __  __  ___  ____  _____
      |  _ \| ____\ \   / / ____| |   / _ \|  _ \|  \/  | ____| \ | |_   _| |  \/  |/ _ \|  _ \| ____|
      | | | |  _|  \ \ / /|  _| | |  | | | | |_) | |\/| |  _| |  \| | | |   | |\/| | | | | | | |  _|
      | |_| | |___  \ V / | |___| |__| |_| |  __/| |  | | |___| |\  | | |   | |  | | |_| | |_| | |___
      |____/|_____|  \_/  |_____|_____\___/|_|   |_|  |_|_____|_| \_| |_|   |_|  |_|\___/|____/|_____|

    -->


    <!-- INSERT CSS HERE -->
    <link rel="stylesheet" type="text/css" href="kafnu_assets/css/style.css">

    <!-- INSERT JS HERE -->
    <script type="text/javascript" src="kafnu_assets/js/manic-polyfill.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/jquery-other/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/misc-js/mobile-detect.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/misc-js/preloadjs-0.4.0.min.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/gsap/src/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/gsap/src/minified/jquery.gsap.min.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/gsap/src/minified/easing/EasePack.min.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/slick-carousel/slick/slick.min.js"></script>
    <script type="text/javascript" src="kafnu_assets/libs/jquery-validate/jquery.validate.min.js"></script>

    <!-- Google Map -->    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvuQ_GJxtg5QhhRnzerBTnDJrKKQz_S4&callback=initMap"
    async defer></script>
    
    <!-- Google Closure -->
    <script type="text/javascript" src="kafnu_assets/libs/google-closure/closure-library/closure/goog/base.js"></script>
    <script type="text/javascript" src="kafnu_assets/js/google-closure-dependency-list.js"></script>
    <script type="text/javascript">
      goog.require('kafnu.page.Contact');
    </script>

    <script type="text/javascript" src="kafnu_assets/js/minified/head.load.min.js"></script>

    <script type="text/javascript">

      jQuery(document).ready(function($) {
        page = new kafnu.page.Contact({});
      });
      
    </script>


    

  <?php else: ?>

    <!--
        ___  ____ _____ ___ __  __ ___ __________ ____    __  __  ___  ____  _____
       / _ \|  _ \_   _|_ _|  \/  |_ _|__  / ____|  _ \  |  \/  |/ _ \|  _ \| ____|
      | | | | |_) || |  | || |\/| || |  / /|  _| | | | | | |\/| | | | | | | |  _|
      | |_| |  __/ | |  | || |  | || | / /_| |___| |_| | | |  | | |_| | |_| | |___
       \___/|_|    |_| |___|_|  |_|___/____|_____|____/  |_|  |_|\___/|____/|_____|

    -->

    <script type="text/javascript" src="kafnu_assets/js/minified/head.load.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvuQ_GJxtg5QhhRnzerBTnDJrKKQz_S4&callback=initMap"
    async defer></script>
    <script type="text/javascript">

      var PAGE_LIBRARY        = "kafnu_assets/js/minified/libraries-contact.min.js";
      var PAGE_JS             = "kafnu_assets/js/minified/page-contact.min.js";
      var PAGE_CSS            = "kafnu_assets/css/style.css";
      
      window.head_js = head;
      
      window.head_js.load(PAGE_CSS);
      window.head_js.load(PAGE_LIBRARY, function() {
        window.head_js.load(PAGE_JS, function() {
          window.page = new kafnu.page.Contact({});
        });
      });
    </script>

  <?php endif; ?>
