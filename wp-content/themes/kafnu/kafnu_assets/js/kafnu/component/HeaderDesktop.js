goog.provide('kafnu.component.HeaderDesktop');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

/**
 * The DesktopHeader constructor
 * @param {object} options The object extendable like jquery plugins
 * @param {element} element The jQuery element connected to class
 * @constructor
 * @extends {goog.events.EventTarget}
 */
kafnu.component.HeaderDesktop = function(options, element) {

  goog.events.EventTarget.call(this);
  this.options = $.extend({}, kafnu.component.HeaderDesktop.DEFAULT, options);
  this.element = element;

  this.is_search_expanded = false;
    
  this.search_container = $('#header-desktop-search-container');

  // this.current_page = $('body').attr("class").split(' ')[0];

  this.create_search();

  // this.menu_highlight();
  


  // console.log('kafnu.component.HeaderDesktop: init');
};
goog.inherits(kafnu.component.HeaderDesktop, goog.events.EventTarget);


/**
 * like jQuery options
 * @const {object}
 */
kafnu.component.HeaderDesktop.DEFAULT = {
};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//

kafnu.component.HeaderDesktop.prototype.create_search = function(){

  $('#header-desktop-search-container input[type=text]').val('');

  $('#header-desktop-search-container .search-expand-btn').click(function(event){

    event.preventDefault();

    this.open_search();

  }.bind(this));



  $(document).click(this.on_document_click.bind(this));


  
};

/*
kafnu.component.HeaderDesktop.prototype.menu_highlight = function(){

  $("#header-desktop-menu ul li a[data-page='"+this.current_page+"']").addClass("selected");
  
};
*/



//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


kafnu.component.HeaderDesktop.prototype.open_search = function() {

  if (this.is_search_expanded == false) {
    this.is_search_expanded = true;

    this.search_container.addClass('expand-version');

  }
};
kafnu.component.HeaderDesktop.prototype.close_search = function() {
  if (this.is_search_expanded == true) {

    this.is_search_expanded = false;

    this.search_container.removeClass('expand-version');
    
    $('#header-desktop-search-container input[type=text]').val('');

  }
};



//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//




kafnu.component.HeaderDesktop.prototype.on_document_click = function(event) {

  if (this.is_search_expanded == true) {
    var target = $(event.target);

    if ($.contains(this.element[0], target[0]) == false) {
      this.close_search();
    }
  }
};
