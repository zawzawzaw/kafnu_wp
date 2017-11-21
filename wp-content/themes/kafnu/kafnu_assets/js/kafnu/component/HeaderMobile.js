goog.provide('kafnu.component.HeaderMobile');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

/**
 * The CLASSNAME constructor
 * @param {object} options The object extendable like jquery plugins
 * @param {element} element The jQuery element connected to class
 * @constructor
 * @extends {goog.events.EventTarget}
 */
kafnu.component.HeaderMobile = function(options, element) {

  goog.events.EventTarget.call(this);
  this.options = $.extend({}, kafnu.component.HeaderMobile.DEFAULT, options);
  this.element = element;

  this.is_expanded = false;

  this.expand_container = $('#mobile-header-expand');
  this.menu_opener = this.element.find('#header-mobile-menu-opener');
  

  this.window_scroll = 0;
  this.window_element = $(window);

  this.body_element = $('body');

  /**
   * @type {manic.ui.AutoCompleteSearch}
   */
  this.auto_complete_search = null;



  //    ___ _   _ ___ _____
  //   |_ _| \ | |_ _|_   _|
  //    | ||  \| || |  | |
  //    | || |\  || |  | |
  //   |___|_| \_|___| |_|
  //

  this.menu_opener.click(function(event){

    if (this.is_expanded == false) {
      this.open_menu();
    } else {
      this.close_menu();
    }

  }.bind(this));


  // this.create_nav();
  // this.create_autocomplete();





  


  // console.log('kafnu.component.HeaderMobile: init');
};
goog.inherits(kafnu.component.HeaderMobile, goog.events.EventTarget);


/**
 * like jQuery options
 * @const {object}
 */
kafnu.component.HeaderMobile.DEFAULT = {
};



/**
 * CLASSNAME Event Constant
 * @const
 * @type {string}
 */
kafnu.component.HeaderMobile.ON_OPEN_MENU = 'on_open_menu';

/**
 * CLASSNAME Event Constant
 * @const
 * @type {string}
 */
kafnu.component.HeaderMobile.ON_CLOSE_MENU = 'on_close_menu';

//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//



//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


kafnu.component.HeaderMobile.prototype.open_menu = function(){
  if (this.is_expanded == false) {
    // console.log('open')

    this.is_expanded = true;

    this.window_scroll = this.window_element.scrollTop();

    this.body_element.addClass('mobile-menu-open-version');
    this.window_element.scrollTop(0);



    this.dispatchEvent(new goog.events.Event(kafnu.component.HeaderMobile.ON_OPEN_MENU));

  }
};
kafnu.component.HeaderMobile.prototype.close_menu = function(){
  if (this.is_expanded == true) {
    // console.log('close')
    this.is_expanded = false;

    this.body_element.removeClass('mobile-menu-open-version');

    this.window_element.scrollTop(this.window_scroll);

    this.dispatchEvent(new goog.events.Event(kafnu.component.HeaderMobile.ON_CLOSE_MENU));


  }
};


kafnu.component.HeaderMobile.prototype.update_layout = function() {

  var target_height = this.window_element.height();

  this.expand_container.css({
    'min-height': target_height + 'px'
  });
};


// kafnu.component.HeaderMobile.prototype.create_nav = function() {

//   this.expand_container.find('#mobile-header-menu nav > ul > li.has-sub-menu > a').click(function(event){
//     event.preventDefault();

//     var li = $(event.currentTarget).parent();

//     if (li.hasClass('expand-version') == true) {

      
//       // close
//       li.removeClass('expand-version');
//       li.find('> ul').stop(0).slideUp(500);
      
      
//       // // let it clickthrough // not anymore
      
//     } else {

//       $('#mobile-header-menu nav > ul > li.has-sub-menu').removeClass('expand-version');
//       $('#mobile-header-menu nav > ul > li.has-sub-menu ul').stop(0).slideUp(500);

//       // open
//       li.addClass('expand-version');
//       li.find('> ul').stop(0).slideDown(500);
//     }
//   });

//   // clicking the arrow button can open and close the mobile menu
//   this.expand_container.find('#mobile-header-menu nav > ul > li.has-sub-menu .arrow-expand-btn').click(function(event){
//     var li = $(event.currentTarget).parent();

//     event.preventDefault();

//     if (li.hasClass('expand-version') == true) {

//       // close 
//       li.removeClass('expand-version');
//       li.find('> ul').stop(0).slideUp(500);

//     } else {

//       $('#mobile-header-menu nav > ul > li.has-sub-menu').removeClass('expand-version');
//       $('#mobile-header-menu nav > ul > li.has-sub-menu ul').stop(0).slideUp(500);

//       // open
//       li.addClass('expand-version');
//       li.find('> ul').stop(0).slideDown(500);

//     };

      

//   });


// };

// kafnu.component.HeaderMobile.prototype.create_autocomplete = function() {
//   this.auto_complete_search = new manic.ui.AutoCompleteSearch({
//     'data_container': '#search-data-container',
//     'selector': '.search-data-item',
//     'unique_name': 'ac-renderer-mobile-header-search'
//   }, $('#mobile-header-search'));
// };


