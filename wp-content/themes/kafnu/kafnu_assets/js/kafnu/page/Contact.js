goog.provide('kafnu.page.Contact');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

goog.require('manic.ui.HoverItem');
goog.require('manic.ui.AnimatedSVG');
goog.require('manic.ui.FormCheck');

goog.require('kafnu.page.Default')


/**
 * The Home constructor
 * @inheritDoc
 * @constructor
 * @extends {kafnu.page.Default}
 */
kafnu.page.Contact = function(options, element) {

  kafnu.page.Default.call(this, options, element);
  this.options = $.extend(this.options, kafnu.page.Contact.DEFAULT, options);


  // console.log('kafnu.page.Contact: init');
};
goog.inherits(kafnu.page.Contact, kafnu.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
kafnu.page.Contact.DEFAULT = {
};

/**
 * Home Event Constant
 * @const
 * @type {string}
 */
kafnu.page.Contact.EVENT_01 = '';


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
kafnu.page.Contact.prototype.init = function() {
  kafnu.page.Contact.superClass_.init.call(this);

  // this.is_home_box_items_container_mobile_open = true;
  // this.home_box_items_container_mobile_toggle = $('#home-box-items-container-mobile-toggle');
  // this.home_box_items_container_mobile = $('#home-box-items-container-mobile');

  // this.create_community_slider();
  // this.create_community_slider_mobile();
  // this.create_community_member_slider();
  // // this.create_social_media_masonry();

  this.map_style = [
      {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#e9e9e9"
              },
              {
                  "lightness": 17
              }
          ]
      },
      {
          "featureType": "landscape",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#f5f5f5"
              },
              {
                  "lightness": 20
              }
          ]
      },
      {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [
              {
                  "color": "#ffffff"
              },
              {
                  "lightness": 17
              }
          ]
      },
      {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [
              {
                  "color": "#ffffff"
              },
              {
                  "lightness": 29
              },
              {
                  "weight": 0.2
              }
          ]
      },
      {
          "featureType": "road.arterial",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#ffffff"
              },
              {
                  "lightness": 18
              }
          ]
      },
      {
          "featureType": "road.local",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#ffffff"
              },
              {
                  "lightness": 16
              }
          ]
      },
      {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#f5f5f5"
              },
              {
                  "lightness": 21
              }
          ]
      },
      {
          "featureType": "poi.park",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#dedede"
              },
              {
                  "lightness": 21
              }
          ]
      },
      {
          "elementType": "labels.text.stroke",
          "stylers": [
              {
                  "visibility": "on"
              },
              {
                  "color": "#ffffff"
              },
              {
                  "lightness": 16
              }
          ]
      },
      {
          "elementType": "labels.text.fill",
          "stylers": [
              {
                  "saturation": 36
              },
              {
                  "color": "#333333"
              },
              {
                  "lightness": 40
              }
          ]
      },
      {
          "elementType": "labels.icon",
          "stylers": [
              {
                  "visibility": "off"
              }
          ]
      },
      {
          "featureType": "transit",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#f2f2f2"
              },
              {
                  "lightness": 19
              }
          ]
      },
      {
          "featureType": "administrative",
          "elementType": "geometry.fill",
          "stylers": [
              {
                  "color": "#fefefe"
              },
              {
                  "lightness": 20
              }
          ]
      },
      {
          "featureType": "administrative",
          "elementType": "geometry.stroke",
          "stylers": [
              {
                  "color": "#fefefe"
              },
              {
                  "lightness": 17
              },
              {
                  "weight": 1.2
              }
          ]
      }
  ];

  this.hong_kong_map;
  this.taipei_map;

  this.create_google_map();
  this.create_google_map_mobile();

  this.create_contact_form();

  // this.home_box_items_container_mobile_toggle.click(this.create_dropdown_toggle_mobile.bind(this));
};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//









kafnu.page.Contact.prototype.create_google_map = function() {

  this.hong_kong_position = {lat: 22.3014444, lng: 114.1888333};

  this.icon = {
      url: "http://clients.manic.com.sg/kafnu/html/kafnu_assets/images/icons/map-pin.svg", // url
      scaledSize: new google.maps.Size(46, 46), // scaled size
      origin: new google.maps.Point(0,0), // origin
      anchor: new google.maps.Point(0, 0) // anchor
  };

  this.hong_kong_map = new google.maps.Map(document.getElementById('hong-kong-map'), {
    center: this.hong_kong_position,
    zoom: 18,
    styles: this.map_style,
    disableDefaultUI: true    
  });

  this.hong_kong_marker = new google.maps.Marker({
    map: this.hong_kong_map,
    position: this.hong_kong_position,
    icon: this.icon
  });

  this.taipei_position = {lat: 25.0579722, lng: 121.5445278};

  this.taipei_map = new google.maps.Map(document.getElementById('taipei-map'), {
    center: this.taipei_position,
    zoom: 18,
    styles: this.map_style,
    disableDefaultUI: true
  });

  this.taipei_marker = new google.maps.Marker({
    map: this.taipei_map,
    position: this.taipei_position,
    icon: this.icon
  });

};

kafnu.page.Contact.prototype.create_google_map_mobile = function() {

  this.hong_kong_position_mobile = {lat: 22.3014444, lng: 114.1888333};

  this.icon = {
      url: "http://clients.manic.com.sg/kafnu/html/kafnu_assets/images/icons/map-pin.svg", // url
      scaledSize: new google.maps.Size(46, 46), // scaled size
      origin: new google.maps.Point(0,0), // origin
      anchor: new google.maps.Point(0, 0) // anchor
  };

  this.hong_kong_map_mobile = new google.maps.Map(document.getElementById('hong-kong-map-mobile'), {
    center: this.hong_kong_position_mobile,
    zoom: 18,
    styles: this.map_style,
    disableDefaultUI: true    
  });

  this.hong_kong_marker_mobile = new google.maps.Marker({
    map: this.hong_kong_map_mobile,
    position: this.hong_kong_position_mobile,
    icon: this.icon
  });

  this.taipei_position_mobile = {lat: 25.0579722, lng: 121.5445278};

  this.taipei_map_mobile = new google.maps.Map(document.getElementById('taipei-map-mobile'), {
    center: this.taipei_position_mobile,
    zoom: 18,
    styles: this.map_style,
    disableDefaultUI: true
  });

  this.taipei_marker = new google.maps.Marker({
    map: this.taipei_map_mobile,
    position: this.taipei_position_mobile,
    icon: this.icon
  });

};

kafnu.page.Contact.prototype.create_contact_form = function() {
  // console.log("validate")
  $("#contact-form").validate({
    rules : {
      first_name : "required",
      last_name : "required",
      email : {
        required: true,
        email: true
      },
      message : "required"
    },
    submitHandler: function(form) {
      $.ajax({
        type: "POST",
        url: "/php/contact.php",
        data: $(form).serialize(),
        timeout: 3000,
        success: function() {
          // console.log('here');
          $('#contact-form').find(".message").html("<h5>Your message has been sent successfully.</h5>")
        },
        error: function() {
          // console.log('failed');
        }
      });
      return false;
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
kafnu.page.Contact.prototype.on_tab_icons_click = function(event) {
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

kafnu.page.Contact.prototype.show_hide_tab_content = function(event) {

};



kafnu.page.Contact.prototype.sample_method_calls = function() {

  // sample override
  kafnu.page.Contact.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(kafnu.page.Contact.EVENT_01));
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
kafnu.page.Contact.prototype.update_page_layout = function() {

  kafnu.page.Contact.superClass_.update_page_layout.call(this);

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
kafnu.page.Contact.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  kafnu.page.Contact.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  

  
}

/**
 * @override
 * @inheritDoc
 */
kafnu.page.Contact.prototype.on_scroll_to_no_target = function() {
  kafnu.page.Contact.superClass_.on_scroll_to_no_target.call(this);

  
}



goog.exportSymbol('kafnu.page.Contact', kafnu.page.Contact);