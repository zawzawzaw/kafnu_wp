goog.provide('kafnu.page.Country');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

goog.require('manic.ui.HoverItem');
goog.require('manic.ui.AnimatedSVG');

goog.require('kafnu.page.Default')


/**
 * The Home constructor
 * @inheritDoc
 * @constructor
 * @extends {kafnu.page.Default}
 */
kafnu.page.Country = function(options, element) {

  kafnu.page.Default.call(this, options, element);
  this.options = $.extend(this.options, kafnu.page.Country.DEFAULT, options);


  // console.log('kafnu.page.Country: init');
};
goog.inherits(kafnu.page.Country, kafnu.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
kafnu.page.Country.DEFAULT = {
};

/**
 * Home Event Constant
 * @const
 * @type {string}
 */
kafnu.page.Country.EVENT_01 = '';


//    ___ _   _ ___ _____
//   |_ _| \ | |_ _|_   _|
//    | ||  \| || |  | |
//    | || |\  || |  | |
//   |___|_| \_|___| |_|
//


/**
 * @override
 * @inheritDoc
 */
kafnu.page.Country.prototype.init = function() {
  kafnu.page.Country.superClass_.init.call(this);

  this.create_banner_sidebar_slider();
  this.create_social_media_masonry();


  if(manic.IS_MOBILE == false && manic.IS_TABLET == false) {
    this.adjust_height_main_content_item();
  }

  $(window).resize(this.adjust_height_main_content_item.bind(this));

  this.create_main_content_slider_mobile();

  this.book_now_slider_mobile();

  $("#book-now-dropdown li a").hover(function(e){
    e.preventDefault();
    
    var price = $(this).data("price");
    $("#price-changes").html(price);
  });
  
};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//









kafnu.page.Country.prototype.create_banner_sidebar_slider = function() {
  $("#banner-sidebar-container").slick({
    'speed': 350,
    'dots': true,
    'arrows': false,
    'infinite': true,
    'slidesToShow': 1,
    'slidesToScroll': 1,
    'pauseOnHover': false,
    'autoplay': true,
    'autoplaySpeed': 4000,
    'responsive': [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $("#banner-sidebar-container-mobile").slick({
    'speed': 350,
    'dots': true,
    'arrows': false,
    'infinite': true,
    'slidesToShow': 1,
    'slidesToScroll': 1,
    'pauseOnHover': false,
    'autoplay': false,
    'autoplaySpeed': 4000
  });
};

kafnu.page.Country.prototype.create_main_content_slider_mobile = function() {
  
}
kafnu.page.Country.prototype.create_main_content_slider_mobile = function() {
  $("#page-country-main-content-item-container-mobile").slick({
    'speed': 350,
    'dots': true,
    'arrows': true,
    'infinite': false,
    'slidesToShow': 1,
    'slidesToScroll': 1,
    'pauseOnHover': false,
    'autoplay': false,
    'autoplaySpeed': 4000
  });

  $("#page-country-main-content-item-container-mobile").on("afterChange", function (slick, currentSlide, nextSlide){
    $("#page-country-main-content-item-container-mobile").css('height', $(slick.currentTarget).find('.slick-active').height()+100);
  });
};

kafnu.page.Country.prototype.book_now_slider_mobile = function() {
  $(".booknow-slider").slick({
    'speed': 350,
    'dots': true,
    'arrows': true,
    'infinite': true,
    'slidesToShow': 1,
    'slidesToScroll': 1,
    'pauseOnHover': false,
    'autoplay': false,
    'autoplaySpeed': 4000
  });
};

kafnu.page.Country.prototype.create_social_media_masonry = function() {
  $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      columnWidth: '.grid-sizer'
    }
  });
};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//



//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

/**
 * @param {object} event
 */

kafnu.page.Country.prototype.adjust_height_main_content_item = function(event) {  

  var arr = $('.page-country-main-content-item');
  var item = null;
  var step_item = null;

  for (var i = 0; i < arr.length; i++) {
    var item = $(arr[i]);
    
    // console.log(item.outerHeight());
    // console.log();
    if(item.find(".page-country-main-content-item-text").outerHeight() > item.find(".manic-image-container").outerHeight()) {
      item.height(item.find(".page-country-main-content-item-text").outerHeight());
      item.find(".manic-image-container").height(item.find(".page-country-main-content-item-text").outerHeight());
      this.update_manic_image_containers();      
    }

  }

};



kafnu.page.Country.prototype.sample_method_calls = function() {

  // sample override
  kafnu.page.Country.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(kafnu.page.Country.EVENT_01));
};



//    _        _ __   _____  _   _ _____
//   | |      / \\ \ / / _ \| | | |_   _|
//   | |     / _ \\ V / | | | | | | | |
//   | |___ / ___ \| || |_| | |_| | | |
//   |_____/_/   \_\_| \___/ \___/  |_|
//

/**
 * @override
 * @inheritDoc
 */
kafnu.page.Country.prototype.update_page_layout = function() {

  kafnu.page.Country.superClass_.update_page_layout.call(this);

  /*
  if (manic.IS_MOBILE == true){

    this.banner_image.css({
      'height': this.window_height + 'px'
    });

  } else {

    this.banner_image.css({
      'height': ''
    });

  }
  */

}


//    _   _    _    ____  _   _ _____  _    ____ ____
//   | | | |  / \  / ___|| | | |_   _|/ \  / ___/ ___|
//   | |_| | / _ \ \___ \| |_| | | | / _ \| |  _\___ \
//   |  _  |/ ___ \ ___) |  _  | | |/ ___ \ |_| |___) |
//   |_| |_/_/   \_\____/|_| |_| |_/_/   \_\____|____/
//


/**
 * @override
 * @inheritDoc
 */
kafnu.page.Country.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  kafnu.page.Country.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  

  
}

/**
 * @override
 * @inheritDoc
 */
kafnu.page.Country.prototype.on_scroll_to_no_target = function() {
  kafnu.page.Country.superClass_.on_scroll_to_no_target.call(this);

  
}



goog.exportSymbol('kafnu.page.Country', kafnu.page.Country);