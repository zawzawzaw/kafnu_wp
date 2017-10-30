<?php 
  $site_language = manic_get_option( PREFIX . 'site_language' );

?>

<header id="header-desktop" class="visible-lg hidden-md hidden-sm hidden-xs">
  <div class="white-bg"></div>

  <div id="header-desktop-content-container">
    <div id="header-desktop-logo-container">

      <a id="header-desktop-logo" href="<?php echo get_home_url(); ?>" title="Kafnu"></a>      
    </div>

    <!--
       __  __ _____ _   _ _   _
      |  \/  | ____| \ | | | | |
      | |\/| |  _| |  \| | | | |
      | |  | | |___| |\  | |_| |
      |_|  |_|_____|_| \_|\___/

    -->

    <div id="header-desktop-menu">
      <nav>
        <?php
            $defaults = array(
              'echo' => true,
              'container' => false,
              'theme_location'  => 'desktop-header-menu',
              'menu_class'      => 'desktop-header-menu'
            );


            wp_nav_menu($defaults);
          ?>        
      </nav>
    </div> <!-- header-desktop-menu -->

    <!-- 
            __    ____  ___________   __
           / /   / __ \/ ____/  _/ | / /
          / /   / / / / / __ / //  |/ /
         / /___/ /_/ / /_/ // // /|  /
        /_____/\____/\____/___/_/ |_/

     -->

    <div id="header-desktop-contact-login-container">
      <?php
        $defaults = array(
          'echo' => true,
          'container' => false,
          'theme_location'  => 'login-links',
          'menu_class'      => 'login-links'
        );


        wp_nav_menu($defaults);
      ?>         
    </div> <!-- header-desktop-contact-login-container -->

    <div id="header-desktop-language-container">
      <ul>

        <?php if($site_language == 'english'): ?>
          <li><a href="<?php echo network_site_url('/'); ?>" class="selected">EN</a></li>
          <li><a href="<?php echo network_site_url('/tc/'); ?>">中文</a></li>
        <?php else: ?>
          <li><a href="<?php echo network_site_url('/'); ?>">EN</a></li>
          <li><a href="<?php echo network_site_url('/tc/'); ?>" class="selected">中文</a></li>
        <?php endif; ?>
        
        

      </ul>
    </div> <!-- header-desktop-contact-login-container -->
  </div>


  
  
</header> <!-- header-desktop -->

