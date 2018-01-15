<?php 
  $footer_copyright = manic_get_option( PREFIX . 'footer_copyright' );
  $site_language = manic_get_option( PREFIX . 'site_language' );
?>

  <!--
     ________  ____ ___ __  __
    |__  / _ \|  _ \_ _|  \/  |
      / / | | | |_) | || |\/| |
     / /| |_| |  __/| || |  | |
    /____\___/|_|  |___|_|  |_|

  -->

  <!--Start of Zendesk Chat Script-->
  <script type="text/javascript">
  window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
  d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
  _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
  $.src="https://v2.zopim.com/?5KbT9RXN8L6MbqmdcXOKAWijmws1L3IC";z.t=+new Date;$.
  type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
  </script>
  <script>
    $zopim(function() {
      $zopim.livechat.theme.setFontConfig({
        google: {
          families: ['Open Sans']
        }
      }, 'Open Sans, cursive');
      $zopim.livechat.theme.setColor('#0084B4');
      $zopim.livechat.theme.reload(); // apply new theme settings

      $zopim.livechat.hideAll();

      $zopim.livechat.concierge.setAvatar('<?php echo THEMEROOT; ?>/kafnu_assets/images/logo/plain-logo.png');

      <?php if($site_language == 'english'): ?>

        $zopim.livechat.concierge.setName('Customer Support');
        $zopim.livechat.concierge.setTitle('Kafnu');
        $zopim.livechat.prechatForm.setGreetings("Thank you for contacting Kafnu. How may I help you today?");
        $zopim.livechat.window.setTitle('KAFNU');

      <?php else: ?>

        $zopim.livechat.concierge.setName('線上客服');
        $zopim.livechat.concierge.setTitle('Kafnu');
        $zopim.livechat.prechatForm.setGreetings("感謝你與我們聯繫。請問你需要我們提供哪方面的協助？");
        $zopim.livechat.window.setTitle('KAFNU');
        
      <?php endif; ?>



      // $zopim.livechat.window.onHide(function(){
      //   console.log('hiding...')
      // });

      // console.log('Chat window is visible: ' + $zopim.livechat.window.getDisplay());

    });
  </script>
  <!--End of Zendesk Chat Script-->


  <div class="open-chat-container" style="width: 90px; height: 45px; position: fixed;bottom: 20px;right: 15px; z-index: 999999;">

    <a href="javascript:void(0);" id="open-chat" style="background: url('<?php echo THEMEROOT; ?>/kafnu_assets/images/icons/livechat-kafnu4.svg') no-repeat; width: 100%; height: 100%; display: block;"></a>    
  </div>

  <style>
    [data-test-id="ChatWidgetButton"], [data-test-id="ChatWidgetMobileButton"] {
      display: none!important;
    }
  </style>


  <!--
     _____ ___   ___ _____ _____ ____
    |  ___/ _ \ / _ \_   _| ____|  _ \
    | |_ | | | | | | || | |  _| | |_) |
    |  _|| |_| | |_| || | | |___|  _ <
    |_|   \___/ \___/ |_| |_____|_| \_\

  -->

  <footer id="footer-desktop">
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-md-3">
          <div id="footer-desktop-logo-container">
            <a id="footer-desktop-logo" href="<?php echo home_url(); ?>"></a>
          </div>
        </div>
        <div class="col-md-9">

          <div id="footer-copyright-and-links-container">
            <div class="row">

              <?php if (has_nav_menu('footer-links')): ?>

                <div class="col-lg-7 col-md-5">
                  <p id="footer-copyright-container"><?php echo $footer_copyright; ?></p>
                </div>
                <div class="col-lg-5 col-md-7">
                  <?php
                    $defaults = array(
                      'echo' => true,
                      'container' => false,
                      'items_wrap'      => '<ul id="footer-links-container">%3$s</ul>',
                      'theme_location'  => 'footer-links',
                      'menu_class'      => 'footer-links'
                    );


                    wp_nav_menu($defaults);
                  ?>  
                </div>

              <?php else: ?>

                <div class="col-lg-12">
                  <p id="footer-copyright-container" class="chinese-version"><?php echo $footer_copyright; ?></p>
                </div>

              <?php endif; ?>
              
            </div>
          </div>
          
        </div>
        
      </div> <!-- row -->

    </div>
  </footer> <!-- footer-desktop -->
