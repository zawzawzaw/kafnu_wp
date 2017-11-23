<?php 
  /*
   * Template Name: Page Press Gallery Page
   */
?>
<?php get_header(); ?>      
      
  <article id="page-default-banner-section" c>
    <div id="page-default-banner-image" class="press-version-02 visible-lg visible-md">
      <div class="manic-image-container">
        <img src="" data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-gallery-banner.jpg">
      </div>
    </div>
    <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
      <div class="manic-image-container has-window-height">
        <img src="" data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-gallery-banner-tablet.jpg"
                    data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-gallery-banner-mobile.jpg">
      </div>
    </div>

    <div id="page-default-banner-copy-container" class="center-version-02 medium-text-version">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div id="page-default-banner-copy">
              <h1>Kafnu Gallery</h1>
              <h3>Browse our media assets below, you can download for both digital and print.</h3>
            </div> <!-- page-default-banner-copy -->

          </div>
        </div>
      </div>
    </div> <!-- page-default-banner-copy-container -->

  </article> <!-- page-default-banner-section -->
  
  <article id="page-press-filtered-section">
    <div id="filter-sticky-trigger-mobile"></div>
    <div class="container-fluid reduce-padding">
      
      <div class="row row-eq-height">
        <div class="col-md-4 no-padding">
          <div id="page-press-filter-options-container">
            <div class="bg"></div>
            <div class="press-links">
              <ul>
                <li><a href="#">press releases</a></li>
                <li><a href="#">media contacts</a></li>
                <li><a href="#">gallery</a></li>
              </ul>
            </div>            
            <div class="press-filters-title">
              <a href="#">
                <h5 class="hidden-xs hidden-sm">filter by location</h5>
                <h5 class="visible-xs visible-sm">filter by</h5>
              </a>
            </div>
            <div class="press-filters-content">
              <ul class="filters">
                <li>                  
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="hong kong" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Hong Kong</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="taipei" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Taipei</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="bangalore">
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Bangalore</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="colombo" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Colombo</span>
                  </label>                
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="ho chi minh">
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Ho Chi Minh City</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="melbourne">
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Ringwood (Melbourne)</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="sydney">
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Sydney</span>
                  </label>
                </li>

                <li class="visible-xs visible-sm">                  
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="images" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Images</span>
                  </label>
                </li>
                <li class="visible-xs visible-sm">
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="videos" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Videos</span>
                  </label>
                </li>
              </ul>
              <div class="cta-container visible-xs visible-sm">
                <a href="#" id="filter-apply-btn-mobile" class="square-cta">Apply</a>
              </div>
            </div>

            <div class="press-filters-title-02 hidden-xs hidden-sm">
              <a href="#">
                <h5 class="hidden-xs hidden-sm">filter by type</h5>
              </a>
            </div>
            <div class="press-filters-content-02 hidden-xs hidden-sm">
              <ul class="filters">
                <li>                  
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="images" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Images</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="media_filter" class="media-filter" value="videos" checked>
                    <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                    <span class="text">Videos</span>
                  </label>
                </li>                
              </ul>
              <span class="disclaimer">All photography is owned or licensed by Kafnu Group Pte Ltd. Misrepresentation of these photographs is prohibited. For usage information, please contact <a href="mailto:press@kafnu.com"></a>press@kafnu.com.</span>
            </div>
          </div>  
        </div>              
        <div class="col-md-8 no-padding">
          <div id="page-press-media-container" class="page-press-content-container container-fluid reduce-padding">

            <div class="row">  

              <div class="media-gallery-item" 
                data-filters="hong kong, images" 
                data-title="Media 01 title" 
                data-desc="Media 01 desc" 
                data-img="<?php echo THEMEROOT; ?>/images_cms/press/press-media-01.jpg" 
                data-digital-download="#media01digital" 
                data-print-download="#media01print">                
                <div class="col-md-4 col-sm-12 no-padding">                  
                  <div class="manic-image-container color-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-01.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-01.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-01.jpg" 
                      alt="">
                  </div>
                  <div class="manic-image-container white-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-01-bw.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-01-bw.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-01-bw.jpg" 
                      alt="">
                  </div>
                  <div class="overlay-content">
                    <div class="text-container">
                      <h5>Kafnu Hong Kong</h5>
                    </div>                    
                  </div>                  
                </div><!-- end col-md-4 -->
              </div>

              <div class="media-gallery-item" 
                data-filters="hong kong, images" 
                data-title="Media 02 title" 
                data-desc="Media 02 desc" 
                data-img="<?php echo THEMEROOT; ?>/images_cms/press/press-media-02.jpg" 
                data-digital-download="#media02digital" 
                data-print-download="#media02print">                
                <div class="col-md-4 col-sm-12 no-padding">                
                  <div class="manic-image-container color-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-02.jpg"
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-02.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-02.jpg"
                      alt="">
                  </div>
                  <div class="manic-image-container white-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-02-bw.jpg"
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-02-bw.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-02-bw.jpg"
                      alt="">
                  </div>
                  <div class="overlay-content">
                    <div class="text-container">
                      <h5>Kafnu Hong Kong Harbourfront</h5>
                    </div>                    
                  </div>
                </div><!-- end col-md-4 -->
              </div>

              <div class="media-gallery-item" 
                data-filters="colombo, images" 
                data-title="Media 03 title" 
                data-desc="Media 03 desc" 
                data-img="<?php echo THEMEROOT; ?>/images_cms/press/press-media-03.jpg" 
                data-digital-download="#media03digital" 
                data-print-download="#media03print">                                  
                <div class="col-md-4 col-sm-12 no-padding">                
                  <div class="manic-image-container color-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-03.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-03.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-03.jpg"
                      alt="">
                  </div>
                  <div class="manic-image-container white-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-03-bw.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-03-bw.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-03-bw.jpg"
                    alt="">
                  </div>
                  <div class="overlay-content">
                    <div class="text-container">
                      <h5>Kafnu Hong Kong Harbourfront</h5>
                    </div>                    
                  </div>
                </div> <!-- end col-md-4 -->
              </div>              

              <div class="media-gallery-item" 
                data-filters="taipei, images" 
                data-title="Media 04 title" 
                data-desc="Media 04 desc" 
                data-img="<?php echo THEMEROOT; ?>/images_cms/press/press-media-04.jpg" 
                data-digital-download="#media04digital" 
                data-print-download="#media04print">                
                <div class="col-md-4 col-sm-12 no-padding">                
                  <div class="manic-image-container color-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-04.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-04-bw.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-04-bw.jpg"
                      alt="">
                  </div>
                  <div class="manic-image-container white-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-04-bw.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-04-bw.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-04-bw.jpg"
                      alt="">
                  </div>
                  <div class="overlay-content">
                    <div class="text-container">
                      <h5>Lorem ipsum dolor</h5>
                    </div>                    
                  </div>
                </div>
              </div>

              <div class="media-gallery-item" 
                data-filters="bangalore, images" 
                data-title="Media 05 title" 
                data-desc="Media 05 desc" 
                data-img="<?php echo THEMEROOT; ?>/images_cms/press/press-media-05.jpg" 
                data-digital-download="#media05digital" 
                data-print-download="#media05print">                
                <div class="col-md-4 col-sm-12 no-padding">                
                  <div class="manic-image-container color-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-05.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-05-bw.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-05-bw.jpg"
                      alt="">
                  </div>
                  <div class="manic-image-container white-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-05-bw.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-05-bw.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-05-bw.jpg"
                    alt="">
                  </div>
                  <div class="overlay-content">
                    <div class="text-container">
                      <h5>Lorem ipsum dolor</h5>
                    </div>                    
                  </div>
                </div>
              </div>

              <div class="media-gallery-item" 
                data-filters="colombo, images" 
                data-title="Media 06 title" 
                data-desc="Media 06 desc" 
                data-img="<?php echo THEMEROOT; ?>/images_cms/press/press-media-06.jpg" 
                data-digital-download="#media06digital" 
                data-print-download="#media06print">                
                <div class="col-md-4 col-sm-12 no-padding">                
                  <div class="manic-image-container color-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-06.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-06.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-06.jpg"
                      alt="">
                  </div>
                  <div class="manic-image-container white-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-06-bw.jpg"
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-06-bw.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-06-bw.jpg" 
                      alt="">
                  </div>
                  <div class="overlay-content">
                    <div class="text-container">
                      <h5>Lorem ipsum dolor</h5>
                    </div>                    
                  </div>
                </div>
              </div>              

              <div class="media-gallery-item" 
                data-filters="ho chi minh, images" 
                data-title="Media 07 title" 
                data-desc="Media 07 desc" 
                data-img="<?php echo THEMEROOT; ?>/images_cms/press/press-media-07.jpg" 
                data-digital-download="#media07digital" 
                data-print-download="#media07print">                
                <div class="col-md-4 col-sm-12 no-padding">                
                  <div class="manic-image-container color-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-07.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-07.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-07.jpg"
                      alt="">
                  </div>
                  <div class="manic-image-container white-version">
                    <img src="" 
                    data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-07-bw.jpg" 
                    data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-07-bw.jpg"  
                    data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-07-bw.jpg"
                    alt="">
                  </div>
                  <div class="overlay-content">
                    <div class="text-container">
                      <h5>Lorem ipsum dolor</h5>
                    </div>                    
                  </div>
                </div>
              </div>

              <div class="media-gallery-item" 
                data-filters="melbourne, images" 
                data-title="Media 08 title" 
                data-desc="Media 08 desc" 
                data-img="<?php echo THEMEROOT; ?>/images_cms/press/press-media-08.jpg" 
                data-digital-download="#media08digital" 
                data-print-download="#media08print">                
                <div class="col-md-4 col-sm-12 no-padding">                
                  <div class="manic-image-container color-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-08.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-08`.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-08.jpg"
                      alt="">
                  </div>
                  <div class="manic-image-container white-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-08-bw.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-08-bw.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-08-bw.jpg"
                      alt="">
                  </div>
                  <div class="overlay-content">
                    <div class="text-container">
                      <h5>Lorem ipsum dolor</h5>
                    </div>                    
                  </div>
                </div>
              </div>

              <div class="media-gallery-item" 
                data-filters="sydney, videos" 
                data-title="Media 09 title" 
                data-desc="Media 09 desc" 
                data-video="<?php echo THEMEROOT; ?>/images_cms/press/press-media-video-01.mp4"
                data-img="<?php echo THEMEROOT; ?>/images_cms/press/press-media-video-01.jpg"
                data-digital-download="#media09digital" 
                data-print-download="#media09print">                
                <div class="col-md-4 col-sm-12 no-padding">                
                  <div class="manic-image-container color-version">
                    <img src="" 
                      data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-09.jpg" 
                      data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-09.jpg"  
                      data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-09.jpg"
                      alt="">
                  </div>
                  <div class="manic-image-container white-version">
                    <img src="" 
                    data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-09-bw.jpg" 
                    data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-09-bw.jpg"  
                    data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-media-thumb-09-bw.jpg"
                    alt="">
                  </div>
                  <div class="overlay-content">
                    <div class="text-container">
                      <h5>Lorem ipsum dolor</h5>
                    </div>                    
                  </div>
                </div>
              </div>

              <div id="cloneable-media-gallery-item-large-container">
                <div class="col-md-12 no-padding">
                  <div class="media-gallery-item-large">
                    <div class="close-btn"></div>
                    <div class="manic-video-container auto-replay" data-video="<?php echo THEMEROOT; ?>/images_cms/press/press-media-video-01.mp4">
                      <video class="video-js vjs-default-skin" poster="<?php echo THEMEROOT; ?>/images_cms/press/press-media-video-01.jpg" preload="auto" data-setup='{"controls": false}'>
                        <source src="" type="video/mp4">
                      </video>
                    </div>
                    <div class="normal-image-container">
                      <img src="<?php echo THEMEROOT; ?>/images_cms/press/press-media-03.jpg" class="img-responsive" alt="">
                    </div>             
                    <div class="overlay-content">
                      <div class="cta-container">
                        <a href="#" class="digital-download download-cta">Download for digital</a>
                        <a href="#" class="print-download download-cta">Download for print</a>
                      </div>
                      <div class="text-container">
                        <h5>Kafnu Hong Kong Harbourfront</h5>
                        <p>Lorem ipsum dolor sit amet</p>
                      </div>                    
                    </div>
                  </div>                
                </div>
              </div>

            </div> <!-- end row -->

          </div> <!-- end page-press-media-container -->
        </div>
      </div>
    </div>
  </article>


<?php get_footer(); ?>