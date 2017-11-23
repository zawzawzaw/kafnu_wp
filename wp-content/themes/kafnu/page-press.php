<?php 
  /*
   * Template Name: Page Press Page
   */
?>
<?php get_header(); ?>      
      
  <article id="page-default-banner-section" c>
    <div id="page-default-banner-image" class="press-version-02 visible-lg visible-md">
      <div class="manic-image-container">
        <img src="" data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/press/press-banner.jpg">
      </div>
    </div>
    <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
      <div class="manic-image-container has-window-height">
        <img src="" data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/press/press-banner-tablet.jpg"
                    data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/press/press-banner-mobile.jpg">
      </div>
    </div>

    <div id="page-default-banner-copy-container" class="center-version-02 medium-text-version">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div id="page-default-banner-copy">
              <h1>Kafnu Press Releases</h1>
              <h3>The latest updates from our community, learn more about our journey.</h3>
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
        <div class="col-md-4">
          <div id="page-press-filter-options-container">
            <div class="bg"></div>
            <div id="press-filters-wrapper">
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
                      <input type="checkbox" name="article_filter" class="article-filter" value="hong kong" checked>
                      <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                      <span class="text">Hong Kong</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="checkbox" name="article_filter" class="article-filter" value="taipei" checked>
                      <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                      <span class="text">Taipei</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="checkbox" name="article_filter" class="article-filter" value="bangalore" checked>
                      <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                      <span class="text">Bangalore</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="checkbox" name="article_filter" class="article-filter" value="colombo" checked>
                      <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                      <span class="text">Colombo</span>
                    </label>                
                  </li>
                  <li>
                    <label>
                      <input type="checkbox" name="article_filter" class="article-filter" value="ho chi minh" checked>
                      <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                      <span class="text">Ho Chi Minh City</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="checkbox" name="article_filter" class="article-filter" value="melbourne" checked>
                      <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                      <span class="text">Ringwood (Melbourne)</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="checkbox" name="article_filter" class="article-filter" value="sydney" checked>
                      <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i></span>
                      <span class="text">Sydney</span>
                    </label>
                  </li>
                </ul>
                <div class="cta-container visible-xs visible-sm">
                  <a href="#" id="filter-apply-btn-mobile" class="square-cta">Apply</a>
                </div>
              </div>
            </div>
          </div>  
        </div>              
        <div class="col-md-6 col-md-offset-1">
          <div id="page-press-articles-container" class="page-press-content-container">
            <div class="press-article" data-country="hong kong">
              <div class="text-container">
                <h6>20 october 2017, Kafnu hong kong</h6>
                <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>

                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsan. Nulla facilisi. Fusce at aliquam magna, quis condimentum lacus. Curabitur in interdum sem praesent quis eros afsapien.</p>
              </div>
              <div class="cta-container">
                <a href="#" class="plus-cta">Read More</a>
                <a href="#" class="download-cta color-version">Download Article</a>
              </div>
            </div>
            <div class="press-article" data-country="taipei">
              <div class="text-container">
                <h6>20 october 2017, Kafnu Taipei</h6>
                <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>

                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsan. Nulla facilisi. Fusce at aliquam magna, quis condimentum lacus. Curabitur in interdum sem praesent quis eros afsapien.</p>
              </div>
              <div class="cta-container">
                <a href="#" class="plus-cta">Read More</a>
                <a href="#" class="download-cta color-version">Download Article</a>
              </div>
            </div>
            <div class="press-article" data-country="bangalore">
              <div class="text-container">
                <h6>20 october 2017, Kafnu Bangalore</h6>
                <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>

                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsan. Nulla facilisi. Fusce at aliquam magna, quis condimentum lacus. Curabitur in interdum sem praesent quis eros afsapien.</p>
              </div>
              <div class="cta-container">
                <a href="#" class="plus-cta">Read More</a>
                <a href="#" class="download-cta color-version">Download Article</a>
              </div>
            </div>
            <div class="press-article" data-country="colombo">
              <div class="text-container">
                <h6>20 october 2017, Kafnu Colombo</h6>
                <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>

                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsan. Nulla facilisi. Fusce at aliquam magna, quis condimentum lacus. Curabitur in interdum sem praesent quis eros afsapien.</p>
              </div>
              <div class="cta-container">
                <a href="#" class="plus-cta">Read More</a>
                <a href="#" class="download-cta color-version">Download Article</a>
              </div>
            </div>
            <div class="press-article" data-country="ho chi minh">
              <div class="text-container">
                <h6>20 october 2017, Kafnu Ho Chi Minh City</h6>
                <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>

                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsan. Nulla facilisi. Fusce at aliquam magna, quis condimentum lacus. Curabitur in interdum sem praesent quis eros afsapien.</p>
              </div>
              <div class="cta-container">
                <a href="#" class="plus-cta">Read More</a>
                <a href="#" class="download-cta color-version">Download Article</a>
              </div>
            </div>
            <div class="press-article" data-country="melbourne">
              <div class="text-container">
                <h6>20 october 2017, Kafnu Ringwood (Melbourne)</h6>
                <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>

                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsan. Nulla facilisi. Fusce at aliquam magna, quis condimentum lacus. Curabitur in interdum sem praesent quis eros afsapien.</p>
              </div>
              <div class="cta-container">
                <a href="#" class="plus-cta">Read More</a>
                <a href="#" class="download-cta color-version">Download Article</a>
              </div>
            </div>
            <div class="press-article last-article" data-country="sydney">
              <div class="text-container">
                <h6>20 october 2017, Kafnu Sydney</h6>
                <a href="#"><h5>Next Story reimagines urban spaces with Kafnu, the vertical village</h5></a>

                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsan. Nulla facilisi. Fusce at aliquam magna, quis condimentum lacus. Curabitur in interdum sem praesent quis eros afsapien.</p>
              </div>
              <div class="cta-container">
                <a href="#" class="plus-cta">Read More</a>
                <a href="#" class="download-cta color-version">Download Article</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>


<?php get_footer(); ?>