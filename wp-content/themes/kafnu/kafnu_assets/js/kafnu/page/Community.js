goog.provide('kafnu.page.Community');

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
kafnu.page.Community = function(options, element) {

  kafnu.page.Default.call(this, options, element);
  this.options = $.extend(this.options, kafnu.page.Community.DEFAULT, options);


  // console.log('kafnu.page.Community: init');
};
goog.inherits(kafnu.page.Community, kafnu.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
kafnu.page.Community.DEFAULT = {
};

/**
 * Home Event Constant
 * @const
 * @type {string}
 */
kafnu.page.Community.EVENT_01 = '';


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
kafnu.page.Community.prototype.init = function() {
  kafnu.page.Community.superClass_.init.call(this);

  // this.is_home_box_items_container_mobile_open = true;
  // this.home_box_items_container_mobile_toggle = $('#home-box-items-container-mobile-toggle');
  // this.home_box_items_container_mobile = $('#home-box-items-container-mobile');

  this.create_community_slider();
  this.create_community_slider_mobile();
  this.create_community_member_slider();
  // // this.create_social_media_masonry();

  $('.see-more-managers').click(this.on_see_more_manager_click.bind(this));
  $('.community-manager').click(this.on_community_manager_click.bind(this));


  this.window.on('hashchange', this.on_community_window_hash_change.bind(this));
};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//









kafnu.page.Community.prototype.create_community_slider = function() {
  $("#page-community-slider").slick({
    'speed': 350,
    'dots': false,
    'arrows': true,
    'infinite': true,
    'slidesToShow': 1,
    'slidesToScroll': 1,
    'pauseOnHover': false,
    'autoplay': true,
    'autoplaySpeed': 4000,
    "asNavFor": '#page-community-thumbnail-slider'
  });

  $("#page-community-thumbnail-slider").slick({
    "slidesToShow": 4,
    "slidesToScroll": 1,
    "asNavFor": '#page-community-slider',
    "dots": false,
    "focusOnSelect": true,
    "arrows": false,
    "infinite": true,
    "centerMode": true
  });
};
kafnu.page.Community.prototype.create_community_slider_mobile = function() {
  $("#page-community-member-slider-mobile").slick({
    'speed': 350,
    'dots': true,
    'arrows': true,
    'infinite': false,
    'slidesToShow': 1,
    'slidesToScroll': 1,
    'pauseOnHover': false
  });

  $("#page-default-booking-item-mobile").slick({
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
kafnu.page.Community.prototype.create_community_member_slider = function() {
  $("#page-community-member-slider").slick({
    "slidesToShow": 1,
    "slidesToScroll": 1,
    "dots": false,
    "focusOnSelect": true,
    "arrows": true,
    "infinite": false,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });
};
kafnu.page.Community.prototype.create_dropdown_toggle_mobile = function(e) {
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
kafnu.page.Community.prototype.on_tab_icons_click = function(event) {
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

kafnu.page.Community.prototype.on_see_more_manager_click = function(event) {
  window.scrollTo(0, 0);

  $("#header-mobile").addClass("permanent-bg");
  $(".header-mobile-spacer").show();
  
  $(".community-page-1").hide();
  $(".community-page-2").fadeIn();
  this.update_manic_image_containers();  
};
kafnu.page.Community.prototype.on_community_manager_click = function(event) {

  var name = $(event.currentTarget).data("name");
  var country = $(event.currentTarget).data("country");
  var description = $(event.currentTarget).data("description");
  var image = $(event.currentTarget).data("image");

  $("#page-2-community-managers-mobile").find(".image").attr('src', image);

  this.update_manic_image_containers();

  $("#page-2-community-managers-mobile").find(".name").text(name);
  $("#page-2-community-managers-mobile").find(".country").text(country);
  $("#page-2-community-managers-mobile").find(".description").text(description);

  $("html, body").animate({ scrollTop: 0 }, 500);
};

kafnu.page.Community.prototype.on_community_window_hash_change = function(event) {
  if(window.location.hash.slice(1)=="") {
    $("#header-mobile").removeClass("permanent-bg");
    $(".header-mobile-spacer").hide();
    $(".community-page-1").fadeIn();
    $(".community-page-2").hide();
    this.update_manic_image_containers();
  }
};

kafnu.page.Community.prototype.sample_method_calls = function() {

  // sample override
  kafnu.page.Community.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(kafnu.page.Community.EVENT_01));
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
kafnu.page.Community.prototype.update_page_layout = function() {

  kafnu.page.Community.superClass_.update_page_layout.call(this);

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
kafnu.page.Community.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  kafnu.page.Community.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  

  
}

/**
 * @override
 * @inheritDoc
 */
kafnu.page.Community.prototype.on_scroll_to_no_target = function() {
  kafnu.page.Community.superClass_.on_scroll_to_no_target.call(this);

  
}



goog.exportSymbol('kafnu.page.Community', kafnu.page.Community);