
<!--
   __  __  ___  ____ ___ _     _____   _   _ _____    _    ____  _____ ____
  |  \/  |/ _ \| __ )_ _| |   | ____| | | | | ____|  / \  |  _ \| ____|  _ \
  | |\/| | | | |  _ \| || |   |  _|   | |_| |  _|   / _ \ | | | |  _| | |_) |
  | |  | | |_| | |_) | || |___| |___  |  _  | |___ / ___ \| |_| | |___|  _ <
  |_|  |_|\___/|____/___|_____|_____| |_| |_|_____/_/   \_\____/|_____|_| \_\

-->


<header id="header-mobile" class="visible-md visible-sm visible-xs">
  <div class="white-bg"></div>

  <div id="header-mobile-content-container">
    <div id="header-mobile-logo-container">
      <a id="header-mobile-logo" href="<?php echo get_home_url(); ?>" title="Transmedic - Advancing Medical Technologies"></a>
    </div>

    <div id="header-mobile-menu-opener-container">
      <a id="header-mobile-menu-opener" href="javascript:void(0);">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
  </div>

</header> <!-- header-mobile -->

<div id="header-mobile-expand">
  <div id="header-mobile-language-login-container">
    <div id="header-mobile-language-cta-container">
      <ul>
        <li><a href="<?php echo get_home_url(); ?>">EN</a></li>
        <li><a href="/tc/index.html">中文</a></li>
      </ul>
    </div>
    <div id="header-mobile-login-cta-container">
      <a href="https://hongkong.kafnu.com/Login" target="_blank">Login</a>
    </div>
  </div>
  <div id="header-mobile-nav-container">
    <nav>
      <?php
        $defaults = array(
          'echo' => true,
          'container' => false,
          'theme_location'  => 'mobile-header-menu',
          'menu_class'      => 'mobile-header-menu'
        );


        wp_nav_menu($defaults);
      ?>              
    </nav>
  </div>
</div> <!-- header-mobile-expand -->
