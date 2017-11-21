goog.provide('kafnu.page.Play');

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
kafnu.page.Play = function(options, element) {

  kafnu.page.Default.call(this, options, element);
  this.options = $.extend(this.options, kafnu.page.Play.DEFAULT, options);


  // console.log('kafnu.page.Play: init');

  this.tab_icons = $('#page-play-extra-icons-container ul li a');

  this.tab_icons.hover(this.on_tab_icons_click.bind(this));
  this.tab_icons.click(this.on_tab_icons_click.bind(this));
};
goog.inherits(kafnu.page.Play, kafnu.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
kafnu.page.Play.DEFAULT = {
};

/**
 * Home Event Constant
 * @const
 * @type {string}
 */
kafnu.page.Play.EVENT_01 = '';


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
kafnu.page.Play.prototype.init = function() {
  kafnu.page.Play.superClass_.init.call(this);

  this.is_home_box_items_container_mobile_open = true;
  this.home_box_items_container_mobile_toggle = $('#home-box-items-container-mobile-toggle');
  this.home_box_items_container_mobile = $('#home-box-items-container-mobile');

  this.create_home_box_slider();
  // this.create_social_media_masonry();

  this.home_box_items_container_mobile_toggle.click(this.create_dropdown_toggle_mobile.bind(this));
};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//









kafnu.page.Play.prototype.create_home_box_slider = function() {
  $("#page-play-slider").slick({
    'speed': 350,
    'dots': false,
    'arrows': true,
    'infinite': false,
    'slidesToShow': 1,
    'slidesToScroll': 1,
    'pauseOnHover': false,
    'autoplay': false,
    'autoplaySpeed': 4000
  });
};
kafnu.page.Play.prototype.create_social_media_masonry = function() {
  // $('.grid').isotope({
  //   itemSelector: '.grid-item',
  //   percentPosition: true,
  //   masonry: {
  //     columnWidth: '.grid-sizer'
  //   }
  // });
};
kafnu.page.Play.prototype.create_dropdown_toggle_mobile = function(e) {
  e.preventDefault();


  
  if(this.is_home_box_items_container_mobile_open == false) {
    this.is_home_box_items_container_mobile_open = true;
    this.home_box_items_container_mobile.slideDown(300, function(){
      this.update_manic_image_containers();      
    }.bind(this));
    $(e.currentTarget).find(".dropdown-arrow-icon").removeClass("down-icon").addClass("up-icon");
  } else {    
    this.is_home_box_items_container_mobile_open = false;
    this.home_box_items_container_mobile.slideUp(300);
    // console.log('close');
    $(e.currentTarget).find(".dropdown-arrow-icon").removeClass("up-icon").addClass("down-icon");
  }

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
kafnu.page.Play.prototype.on_tab_icons_click = function(event) {
  event.preventDefault();
  var icon = $(event.currentTarget);

  $('.active-icon').removeClass("active-icon");
  icon.addClass("active-icon");  

  var current_tab = icon.attr("href");
  current_tab = current_tab.substring(1);

  // console.log(current_tab)

  $('.active-tab').removeClass('active-tab');
  $('.'+current_tab+'-tab').addClass('active-tab');

  this.update_manic_image_containers();      

};

kafnu.page.Play.prototype.show_hide_tab_content = function(event) {

};



kafnu.page.Play.prototype.sample_method_calls = function() {

  // sample override
  kafnu.page.Play.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(kafnu.page.Play.EVENT_01));
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
kafnu.page.Play.prototype.update_page_layout = function() {

  kafnu.page.Play.superClass_.update_page_layout.call(this);

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
kafnu.page.Play.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  kafnu.page.Play.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  

  
}

/**
 * @override
 * @inheritDoc
 */
kafnu.page.Play.prototype.on_scroll_to_no_target = function() {
  kafnu.page.Play.superClass_.on_scroll_to_no_target.call(this);

  
}



goog.exportSymbol('kafnu.page.Play', kafnu.page.Play);