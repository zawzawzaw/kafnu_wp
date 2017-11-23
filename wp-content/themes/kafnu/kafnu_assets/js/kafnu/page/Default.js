goog.provide('kafnu.page.Default');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

goog.require('manic.page.Page');

goog.require('manic.ui.BoxItem');
goog.require('manic.ui.Dropdown');

goog.require('manic.ui.HoverItem');
goog.require('manic.ui.AnimatedSVG');

goog.require('kafnu.component.HeaderDesktop');
goog.require('kafnu.component.HeaderMobile');


/**
 * The Default Page constructor
 * @inheritDoc
 * @constructor
 * @extends {manic.page.Page}
 */
kafnu.page.Default = function(options, element) {

  manic.page.Page.call(this, options);
  this.options = $.extend(this.options, kafnu.page.Default.DEFAULT, options);


  /*
  if ($('body').hasClass('chinese-version')) {
    manic.SITE_LANGUAGE = 'cn';
  }
  if ($('body').hasClass('bahasa-version')) {
    manic.SITE_LANGUAGE = 'in';
  }
  */
  

  //   __     ___    ____
  //   \ \   / / \  |  _ \
  //    \ \ / / _ \ | |_) |
  //     \ V / ___ \|  _ <
  //      \_/_/   \_\_| \_\
  //

  /**
   * @type {Array.<manic.ui.Dropdown>}
   */
  this.dropdown_array = [];

  /**
   * @type {Array.<manic.ui.Dropdown>}
   */
  this.dropdown_dictionary = [];

  this.article_filters = [];
  this.media_filters = [];


  /**
   * @type {kafnu.component.HeaderDesktop}
   */
  this.header_desktop = null;

  /**
    * @type {kafnu.component.HeaderMobile}
    */
  this.header_mobile = null;

  this.page_wrapper = $('#page-wrapper');
  this.page_wrapper_content = $('#page-wrapper-content');

  // min height variables
  this.is_page_min_height = false;
  if( this.body.hasClass('min-height-version') == true ){
    this.is_page_min_height = true;
  }

  this.is_page_min_height_mobile = false;
  if( this.body.hasClass('min-height-mobile-version') == true ){
    this.is_page_min_height_mobile = true;
  }


  // this will be a bit slow
  /*
  $(window).on('scroll', function (event) {
      var scroll = $(window).scrollTop();
      // Do something

      if(scroll > 0) {
        $("#header-desktop").addClass("bg")
        $("#header-mobile").addClass("bg")
      } else {
        $("#header-desktop").removeClass("bg")
        $("#header-mobile").removeClass("bg")
      }
  });
  */
  

  this.header_desktop_element = $("#header-desktop");
  this.header_mobile_element = $("#header-mobile");

  this.window.on('scroll', function (event) {
      if(this.window.scrollTop() > 0) {
        this.header_desktop_element.addClass("bg")
        this.header_mobile_element.addClass("bg")
      } else {
        this.header_desktop_element.removeClass("bg")
        this.header_mobile_element.removeClass("bg")
      }
  }.bind(this));


  $(document).on('touchmove',function(e){
      touchEvent = e.originalEvent.touches[0]; //this is your usual jQuery event, with its properties such as pageX and pageY properties
      // console.log(touchEvent)
  });



  //    _____ ___  ____    __  __  ___  ____ ___ _     _____
  //   |  ___/ _ \|  _ \  |  \/  |/ _ \| __ )_ _| |   | ____|
  //   | |_ | | | | |_) | | |\/| | | | |  _ \| || |   |  _|
  //   |  _|| |_| |  _ <  | |  | | |_| | |_) | || |___| |___
  //   |_|   \___/|_| \_\ |_|  |_|\___/|____/___|_____|_____|
  //

  if ($("#page-country-main-content-item-container-mobile").length != 0) {
    var fragment = $(document.createDocumentFragment());
    var arr = $('.page-country-hidden-mobile-slider-part');
    for (var i = 0, l=arr.length; i < l; i++) {
      item = $(arr[i]);
      fragment.append(item.html());
    }
    $("#page-country-main-content-item-container-mobile").append(fragment);
  }

  // console.log('kafnu.page.Default: init');
};
goog.inherits(kafnu.page.Default, manic.page.Page);


/**
 * like jQuery options
 * @const {object}
 */
kafnu.page.Default.DEFAULT = {
};


//    ___ _   _ ___ _____
//   |_ _| \ | |_ _|_   _|
//    | ||  \| || |  | |
//    | || |\  || |  | |
//   |___|_| \_|___| |_|
//

kafnu.page.Default.prototype.init = function() {
  kafnu.page.Default.superClass_.init.call(this);

  this.create_header_desktop();

  this.create_dropdown();
  
  this.create_header_mobile();

  this.expandable_text();
  

  this.create_home_elements();
  this.create_play_elements();
  this.create_community_elements();
  this.create_press_elements();
  this.create_contact_elements();
  this.create_country_elements();

  // console.log('kafnu.page.Default: init');
};


//    _   _  ___  __  __ _____
//   | | | |/ _ \|  \/  | ____|
//   | |_| | | | | |\/| |  _|
//   |  _  | |_| | |  | | |___
//   |_| |_|\___/|_|  |_|_____|
//

kafnu.page.Default.prototype.create_home_elements = function(){

  if ($(".home-box-item:not('.no-link-version')").length != 0) {

    this.home_box_item = $(".home-box-item:not('.no-link-version')");
    this.home_box_item.click(function(event){
      event.preventDefault();
      window.location.href = $(event.currentTarget).find(".plus-icon").attr("href");
    }.bind(this));

  }

  if ($('.has-wow-element').length != 0) {
    if( manic.IS_MOBILE == false){
      var wow = new WOW();
      wow.init();
    }
  }



  this.create_home_box_slider();
  this.create_social_media_masonry();





  if ($('#home-box-items-container-mobile').length != 0) {

    this.is_home_box_items_container_mobile_open = true;
    this.home_box_items_container_mobile_toggle = $('#home-box-items-container-mobile-toggle');
    this.home_box_items_container_mobile = $('#home-box-items-container-mobile');

    this.home_box_items_container_mobile_toggle.click(function(e){

      // create_dropdown_toggle_mobile (refactored)
      
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
    }.bind(this));
  }





  
};

kafnu.page.Default.prototype.create_home_box_slider = function() {



  if ($('#home-box-slider').length != 0) {
    $("#home-box-slider").slick({
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
  }

  if ($('#home-box-slider-02').length != 0) {

    $("#home-box-slider-02").slick({
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
    
  }
};
kafnu.page.Default.prototype.create_social_media_masonry = function() {

  if ($('#page-default-social-media-masonry-section').length != 0) {
    $('.grid').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer'
      }
    });
  }

};


//    ____  _        _ __   __
//   |  _ \| |      / \\ \ / /
//   | |_) | |     / _ \\ V /
//   |  __/| |___ / ___ \| |
//   |_|   |_____/_/   \_\_|
//


kafnu.page.Default.prototype.create_play_elements = function(){

  if ($('#page-play-extra-icons-container').length != 0) {

    this.tab_icons = $('#page-play-extra-icons-container ul li a');

    this.tab_icons.hover(this.on_tab_icons_click.bind(this));
    this.tab_icons.click(this.on_tab_icons_click.bind(this));
  }


  if ($("#page-play-slider").length != 0) {
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
  }



};

/**
 * @param {object} event
 */
kafnu.page.Default.prototype.on_tab_icons_click = function(event) {
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




//     ____ ___  __  __ __  __ _   _ _   _ ___ _______   __
//    / ___/ _ \|  \/  |  \/  | | | | \ | |_ _|_   _\ \ / /
//   | |  | | | | |\/| | |\/| | | | |  \| || |  | |  \ V /
//   | |__| |_| | |  | | |  | | |_| | |\  || |  | |   | |
//    \____\___/|_|  |_|_|  |_|\___/|_| \_|___| |_|   |_|
//

kafnu.page.Default.prototype.create_community_elements = function(){

  this.has_community_hash_element = false;

  if ($('.has-community-hash-element').length != 0) {
    this.has_community_hash_element = true;
  }

  this.create_community_slider();
  this.create_community_slider_mobile();
  this.create_community_member_slider();


  $('.see-more-managers').click(this.on_see_more_manager_click.bind(this));


  if ($("#page-community-managers-mobile").length != 0) {
    $('.community-manager').click(this.on_community_manager_click.bind(this));
  }
  

  

};

kafnu.page.Default.prototype.create_press_elements = function() {    
  this.create_press_slider();
  this.create_article_filters();

  this.create_filter_sidebar();
  
  // setTimeout(function(){ 
  //   this.update_press_layout(); 
  // }.bind(this), 800);

  this.create_article_filters_mobile();


  this.create_media_gallery();
  this.create_media_filters();

  this.create_sticky_sidebar();

}

kafnu.page.Default.prototype.create_sticky_sidebar = function() {

  if(manic.IS_MOBILE == false && manic.IS_TABLET_PORTRAIT == false) {

      var windowHeight = $(document).height();

      var pagePressFilter = $("#page-press-filter-options-container").height();

      // console.log(windowHeight);
      // console.log(pagePressFilter);

      // console.log(windowHeight-pagePressFilter);

      var scene = new ScrollMagic.Scene({
      triggerElement: "#filter-sticky-trigger-mobile",
      triggerHook: "onLeave" })
      .setClassToggle("#page-press-filter-options-container", "sticky-version-desktop")
      .addIndicators({name: "stick"}) // add indicators (requires plugin)
      .addTo(this.controller);
  }

  // var scene = new ScrollMagic.Scene({triggerElement: "#float-start-trigger", triggerHook: 'onEnter', duration: offset.top })
  //               .setClassToggle("#floating-img", "stick")
  //               .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
  //               .addTo(controller);

}

kafnu.page.Default.prototype.update_press_layout = function() {
  if($(".page-press-content-container").length != 0) {
    
    if(manic.IS_MOBILE == false && manic.IS_TABLET_PORTRAIT == false) {
        var content_col = $(".page-press-content-container");
        var filter_col = $("#page-press-filter-options-container .bg");

        // console.log("filter_col:"+filter_col.outerHeight())
        // console.log("article_col:"+content_col.outerHeight())

        // if(content_col.outerHeight() > filter_col.outerHeight()) {
        //   filter_col.css("height", content_col.outerHeight());
        // } 

        // if(content_col.outerHeight() < filter_col.outerHeight()) {
        //   filter_col.css("height", content_col.outerHeight());
        //   // content_col.css("min-height", filter_col.outerHeight());
        // }
    }

  }
}

kafnu.page.Default.prototype.create_filter_sidebar = function() {  
  if(manic.IS_MOBILE == false && manic.IS_TABLET_PORTRAIT == false) {
    $(".press-filters-title").click(function(e){
      e.preventDefault();
      $(".press-filters-content").slideToggle();
    });
    $(".press-filters-title-02").click(function(e){
      e.preventDefault();
      $(".press-filters-content-02").slideToggle();
    });
  }
}

kafnu.page.Default.prototype.create_media_gallery = function() {  

  if(manic.IS_MOBILE == false && manic.IS_TABLET_PORTRAIT == false) {

    $('.digital-download').click(function(e){
      e.stopPropagation();
    });

    $('.print-download').click(function(e){
      e.stopPropagation();
    });

    $(".media-gallery-item").click(function(e){
      e.preventDefault();    
      
      // getting data
      var title = $(e.currentTarget).data("title");
      var desc = $(e.currentTarget).data("desc");
      var img = $(e.currentTarget).data("img");
      var digital_download = $(e.currentTarget).data("digital-download");
      var print_download = $(e.currentTarget).data("print-download");    
      var video = $(e.currentTarget).data("video"); 
      var vertical = $(e.currentTarget).data("vertical"); 

      // opening container
      // var media_gallery_item_large_container = $(".media-gallery-item-large-container");       

      // to get index
      $('.current-item').removeClass("current-item");
      $(e.currentTarget).addClass("current-item");

      // current item index of visible media-gallery-item
      var current_item_index = $('.current-item').index('.visible-gallery-item') + 1;

      // determine last item of the row where large container should appear after
      var item_no = (Math.ceil(current_item_index/3) * 3);

      if(item_no > $('.visible-gallery-item').length) {
        item_no = $('.visible-gallery-item').length;
      }

      // console.log(current_item_index);
      // console.log(item_no);

      // -1 because its index 
      item_no = item_no - 1; 

      // $('.current').clone().appendTo('.visible-gallery-item:eq('+item_no+')');

      // console.log($('.visible-gallery-item:eq('+item_no+')'))    

      // appending to specific place
      var media_gallery_item_large_container = $("#cloneable-media-gallery-item-large-container").clone();

      // if opening container doesn't have current
      // if(!media_gallery_item_large_container.hasClass("current")) {
      // // hide
      //   $(".media-gallery-item-large-container").animate({ opacity: 0 },{ queue: false, duration: 'slow' }).hide().removeClass('current');
      // }

      $("#cloned-media-gallery-item-large-container").remove();

      if(video) {
        media_gallery_item_large_container.addClass("video-version");
        media_gallery_item_large_container.find("video").children('source').attr('src', video);
        media_gallery_item_large_container.find("video").attr('poster', img);
      } else {
        media_gallery_item_large_container.removeClass("video-version");
      }    

      if(vertical) {
        media_gallery_item_large_container.find("img").addClass('vertical-version');    
      }

      // change stuff
      media_gallery_item_large_container.attr("id","cloned-media-gallery-item-large-container");
      media_gallery_item_large_container.addClass("media-gallery-item-large-container");
      media_gallery_item_large_container.addClass("active-large-container");
      media_gallery_item_large_container.find("h5").text(title)
      media_gallery_item_large_container.find("p").text(desc)
      media_gallery_item_large_container.find("img").attr('src', img);      
      media_gallery_item_large_container.find("a.digital-download").attr('href', digital_download)
      media_gallery_item_large_container.find("a.print-download").attr('href', print_download)

      // console.log(media_gallery_item_large_container.html());

      media_gallery_item_large_container.clone().insertAfter('.visible-gallery-item:eq('+item_no+')');

      // show
      $("#cloned-media-gallery-item-large-container").css('opacity', 0).slideDown(300).animate({ opacity: 1 },{ queue: false, duration: 'slow' });

      // scroll to
      setTimeout(function(){ 
        var y2 = $(e.currentTarget).offset().top;
        var y = $(".media-gallery-item-large").offset().top - 100;

        TweenLite.to(window, .4, {
          scrollTo: {y: y}
        });

        this.update_press_layout(); 
      }.bind(this), 310);

    }.bind(this));

    $("#page-press-media-container").on("click", ".close-btn", function(e){
      $(e.currentTarget).parent().parent().parent().animate({ opacity: 0 },{ queue: false, duration: 'slow' }).slideUp(300);

      $('video').trigger('pause');

      setTimeout(function(){
        // console.log('here');
        this.update_press_layout(); 
      }.bind(this), 310);

    }.bind(this));
  }

}

kafnu.page.Default.prototype.create_article_filters = function() {  

  this.filter_article();

  $(".article-filter").on("change", function(){
    this.filter_article();
    setTimeout(function(){ 
      this.update_press_layout(); 
    }.bind(this), 800);    
  }.bind(this));

}

kafnu.page.Default.prototype.create_article_filters_mobile = function() {  
  if((manic.IS_MOBILE == true || manic.IS_TABLET_PORTRAIT == true) && manic.IS_TABLET_LANDSCAPE == false) {
    this.press_filters_mobile_open = false;
    
    $(".press-filters-title a").on("click", function(e){

      e.preventDefault();      
      

      if(this.press_filters_mobile_open == false) {                      

        $("#page-press-articles-container").hide();
        $("#page-press-media-container").hide();
        $("#page-default-banner-section").hide();
        $("#footer-desktop").hide();

        $(".press-filters-content").slideDown();  
        this.press_filters_mobile_open = true;

        $('#header-mobile').addClass('permanent-bg');

      } else {                
        
        $("#page-press-articles-container").show();
        $("#page-press-media-container").show();
        $("#page-default-banner-section").show();
        $("#footer-desktop").show();

        $(".press-filters-content").slideUp();  
        this.press_filters_mobile_open = false;

        $("#header-mobile").removeClass("permanent-bg");

      }      

      setTimeout(function(){ 
        var y = $(".press-filters-title").offset().top - 64;

        TweenLite.to(window, .4, {
            scrollTo: {y: y}
        });
      }, 500);
      
    }.bind(this));

    $("#filter-apply-btn-mobile").click(function(e){
      e.preventDefault();
      $("#page-press-articles-container").show();
      $("#page-press-media-container").show();
      $("#page-default-banner-section").show();
      $("#footer-desktop").show();

      $(".press-filters-content").slideUp();  
      this.press_filters_mobile_open = false;

      $("#header-mobile").removeClass("permanent-bg");

      setTimeout(function(){ 
        this.update_manic_image_containers();

        var y = $(".press-filters-title").offset().top - 64;

        TweenLite.to(window, .4, {
            scrollTo: {y: y}
        });
      }.bind(this), 500);
    }.bind(this));

    var scene = new ScrollMagic.Scene({
      triggerElement: "#filter-sticky-trigger-mobile", 
      triggerHook: 0.0 })
      .setClassToggle("#page-press-filter-options-container", "sticky-version")
      // .addIndicators({name: "stick"}) // add indicators (requires plugin)
      .addTo(this.controller);

  }
}

kafnu.page.Default.prototype.filter_article = function() {  
  $('.article-filter').each(function(i, obj) {
    var filter_val = $(obj).val();
    this.article_filters[filter_val] = false;
    
    if ($(obj).is(':checked')) {
      this.article_filters[filter_val] = true;  
    }
  }.bind(this));

  for(var key in this.article_filters) {
    if(this.article_filters[key]) {
      $(".press-article[data-country='"+key+"']").fadeIn(500);
    } else {
      $(".press-article[data-country='"+key+"']").fadeOut(500);
    }
  }
}


kafnu.page.Default.prototype.create_media_filters = function() {  

  this.filter_media();

  $(".media-filter").on("change", function(){
    this.filter_media();

    setTimeout(function(){ 
      this.update_press_layout(); 
    }.bind(this), 800);    
  }.bind(this));

}

kafnu.page.Default.prototype.filter_media = function() {  

  $(".media-gallery-item-large-container").animate({ opacity: 0 },{ queue: false, duration: 'slow' }).hide().removeClass('current');

  $('.media-filter').each(function(i, obj) {
    var filter_val = $(obj).val();
    this.media_filters[filter_val] = false;
    
    if ($(obj).is(':checked')) {
      this.media_filters[filter_val] = true;  
    }
  }.bind(this));

  // console.log(this.media_filters);

  $(".media-gallery-item").each(function(i, obj){

    var filters = $(obj).data("filters");

    var filters_arr = filters.split(",");

    var country_filter = filters_arr[0].trim();
    var type_filter = filters_arr[1].trim();

    // console.log(type_filter);
    // console.log(this.media_filters[type_filter]);
    // console.log(this.media_filters[country_filter]);

    if(this.media_filters[country_filter] == true && this.media_filters[type_filter] == true) {
      $(obj).fadeIn(500).addClass("visible-gallery-item");
      this.update_manic_image_containers();
    } else {
      $(obj).fadeOut(500).removeClass("visible-gallery-item");
    }

  }.bind(this));
}

kafnu.page.Default.prototype.create_press_slider = function() {  
  if ($("#page-press-slider").length != 0) {    

    $("#page-press-slider").slick({
      'speed': 350,
      'dots': false,
      'arrows': true,
      'infinite': true,
      'slidesToShow': 1,
      'slidesToScroll': 1,
      'pauseOnHover': false,
      'autoplay': false,
      'autoplaySpeed': 4000,
      "asNavFor": '#page-press-thumbnail-slider',
      onBeforeChange: function(slider,index){
        beforeChangeFunc(index)
      },
      onAfterChange: function(slider,index){
        afterChangeFunc(index)
      } 
    });

    $('#page-press-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
      $('#page-press-slider-caption').hide();
    });

    $('#page-press-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
      
      var title = $(slick.$slides[currentSlide]).data('title');
      var copy = $(slick.$slides[currentSlide]).data('copy');
      var print = $(slick.$slides[currentSlide]).data('print-download');
      var digital = $(slick.$slides[currentSlide]).data('digital-download');

      $('#page-press-slider-caption').find("h5").text(title);
      $('#page-press-slider-caption').find("p").text(copy);
      $('#page-press-slider-caption').find("#page-press-slider-caption-digital-cta").attr("href", digital);
      $('#page-press-slider-caption').find("#page-press-slider-caption-print-cta").attr("href", print);

      $('#page-press-slider-caption').fadeIn();
    });
    
  }

  if ($("#page-press-thumbnail-slider").length != 0) {
    $("#page-press-thumbnail-slider").slick({
      "slidesToShow": 7,
      "slidesToScroll": 1,
      "asNavFor": '#page-press-slider',
      "dots": false,
      "focusOnSelect": true,
      "arrows": false,
      "infinite": true,
      "centerMode": true
    });
  }
};
kafnu.page.Default.prototype.create_community_slider = function() {


  
  

  if ($("#page-community-slider").length != 0) {
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
  }

  if ($("#page-community-thumbnail-slider").length != 0) {

    var number_of_entries = $("#page-community-thumbnail-slider .page-community-thumbnail-slider-item").length;
    var slides_to_show = 4;
    if (number_of_entries < 5) {
      slides_to_show = 3;
    }

    $("#page-community-thumbnail-slider").slick({
      "slidesToShow": slides_to_show,
      "slidesToScroll": 1,
      "asNavFor": '#page-community-slider',
      "dots": false,
      "focusOnSelect": true,
      "arrows": false,
      "infinite": true,
      "centerMode": true
    });
  }
};
kafnu.page.Default.prototype.create_community_slider_mobile = function() {

  if ($("#page-community-member-slider-mobile").length != 0) {
    $("#page-community-member-slider-mobile").slick({
      'speed': 350,
      'dots': true,
      'arrows': true,
      'infinite': false,
      'slidesToShow': 1,
      'slidesToScroll': 1,
      'pauseOnHover': false
    });

  }

  if ($("#page-default-booking-item-mobile").length != 0) {
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
  }
};
kafnu.page.Default.prototype.create_community_member_slider = function() {

  if ($("#page-community-member-slider").length != 0) {
    $("#page-community-member-slider").slick({
      "slidesToShow": 1,
      "slidesToScroll": 1,
      "dots": false,
      "focusOnSelect": true,
      "arrows": true,
      "infinite": false,
      "speed": 500,
      "fade": true,
      "cssEase": 'linear'
    });
  }

};


kafnu.page.Default.prototype.on_see_more_manager_click = function(event) {
  window.scrollTo(0, 0);

  $("#header-mobile").addClass("permanent-bg");
  // $(".header-mobile-spacer").show();
  
  $(".community-page-1").hide();
  $(".community-page-2").fadeIn();
  
  $('.page-builder-section').not('.community-slider').hide();
  // $('.page-builder-section.community-slider').fadeIn();

  this.update_manic_image_containers();  
};
kafnu.page.Default.prototype.on_community_manager_click = function(event) {

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





//     ____ ___  _   _ _____  _    ____ _____
//    / ___/ _ \| \ | |_   _|/ \  / ___|_   _|
//   | |  | | | |  \| | | | / _ \| |     | |
//   | |__| |_| | |\  | | |/ ___ \ |___  | |
//    \____\___/|_| \_| |_/_/   \_\____| |_|
//


kafnu.page.Default.prototype.create_contact_elements = function(){

  if ($('.has-map-element').length != 0) {

    this.create_google_map();

  } // end if

  this.create_contact_form();
  

};

kafnu.page.Default.prototype.create_google_map = function() {
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




  var arr = $('.kafnu-google-map');
  var item = null;
  var is_mobile = false;
  var item_position = null;

  var item_map = null;
  var item_map_marker = null;

  for (var i = 0, l=arr.length; i < l; i++) {
    item = $(arr[i]);

    var item_id = item.attr('id');
    var item_lat = item.attr('data-lat');
    var item_lng = item.attr('data-lng');
    var item_icon = item.attr('data-pin');

    item_lat = parseFloat(item_lat);
    item_lng = parseFloat(item_lng);

    is_mobile = false;
    if (item.hasClass('mobile-version')) {
      is_mobile = true;
    }

    item_position = {lat: item_lat, lng: item_lng};

    var map_icon = {
        url: item_icon, // url
        scaledSize: new google.maps.Size(46, 46), // scaled size
        origin: new google.maps.Point(0,0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
    };


    if (is_mobile == false) {
      item_map = new google.maps.Map(document.getElementById(item_id), {
        center: item_position,
        zoom: 18,
        styles: this.map_style,
        disableDefaultUI: true    
      });
      item_map_marker = new google.maps.Marker({
        map: item_map,
        position: item_position,
        icon: map_icon
      });
    } else {

      item_map = new google.maps.Map(document.getElementById(item_id), {
        center: item_position,
        zoom: 18,
        styles: this.map_style,
        disableDefaultUI: true    
      });

      this.hong_kong_marker_mobile = new google.maps.Marker({
        map: item_map,
        position: item_position,
        icon: map_icon
      });

    }


  } // end for





};

kafnu.page.Default.prototype.create_contact_form = function() {

  if ($("#contact-form").length != 0) {
    $("#contact-form").submit(function(e) {
      e.preventDefault();
    }).validate({
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
          url: $("#contact-form").attr("action"),
          data: $(form).serialize(),
          timeout: 3000,
          complete: function() {
            $('#contact-form').find(".message").html("<h5>Your message has been sent successfully.</h5>")
          },
          success: function() {
            $('#contact-form')[0].reset();
            grecaptcha.reset();
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
  }
};


//     ____ ___  _   _ _   _ _____ ______   __
//    / ___/ _ \| | | | \ | |_   _|  _ \ \ / /
//   | |  | | | | | | |  \| | | | | |_) \ V /
//   | |__| |_| | |_| | |\  | | | |  _ < | |
//    \____\___/ \___/|_| \_| |_| |_| \_\|_|
//

kafnu.page.Default.prototype.create_country_elements = function(){

  this.has_adjust_height_main_content_item = false;

  if ($('.page-country-main-content-item').length != 0) {
    this.has_adjust_height_main_content_item = true;
    this.update_page_layout();
  }


  if ($("#banner-sidebar-container").length != 0) {
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
  }


  if ($("#banner-sidebar-container-mobile").length != 0) {
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
  }


  

  if ($("#page-country-main-content-item-container-mobile").length != 0) {

    // grab all the mobile parts first() // not in init


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
  }

  if ($(".booknow-slider").length != 0) {
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
  }


  if( $('#book-now-dropdown').length != 0) {
    $("#book-now-dropdown li a").hover(function(e){
      e.preventDefault();
      
      var price = $(this).data("price");

      // $(this).closest('#price-changes').html(price);
      $("#price-changes").html(price);
      
    });
  }



};


kafnu.page.Default.prototype.adjust_height_main_content_item = function(event) {  

  if (this.has_adjust_height_main_content_item == true){

  }
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
















//     ____ ____  _____    _  _____ _____
//    / ___|  _ \| ____|  / \|_   _| ____|
//   | |   | |_) |  _|   / _ \ | | |  _|
//   | |___|  _ <| |___ / ___ \| | | |___
//    \____|_| \_\_____/_/   \_\_| |_____|
//

kafnu.page.Default.prototype.create_header_desktop = function(){

  
  
  if ($('#header-desktop').length != 0) {
    this.header_desktop = new kafnu.component.HeaderDesktop({}, $('#header-desktop'));
  }

  if ($('#page-country-main-content-section').length != 0) {
    $('body').addClass("page-country");
    $('.header-desktop-spacer').addClass("active");
  }

  if ($('#page-press-main-content-section').length != 0 || $("#page-press-filtered-section").length != 0) {
    // console.log('add class page-press')
    $('body').addClass("page-press");
    $('.header-desktop-spacer').addClass("active");
  }
  
};

kafnu.page.Default.prototype.create_header_mobile = function(){

  if ($('#header-mobile').length != 0 && $('#header-mobile-expand').length != 0) {

    this.header_mobile = new kafnu.component.HeaderMobile({}, $('#header-mobile'));

    goog.events.listen(this.header_mobile, kafnu.component.HeaderMobile.ON_CLOSE_MENU, function(event){

      this.update_page_layout();

    }.bind(this));
        
  }

  

};

kafnu.page.Default.prototype.create_image_container = function() {

  // console.log('create_image_container');
  
  // var arr = $('.manic-image-container').not('.not-default-version').not('.instantiated-version');
  var arr = $('.manic-image-container').not('.manic-image-container.not-default-version').not('.manic-image-container.instantiated-version');
  var image_container = null;
  var item = null;

  for (var i = 0, l=arr.length; i < l; i++) {
    item = $(arr[i]);

    item.addClass('instantiated-version');
    
    image_container = new manic.ui.ImageContainer({
      'has_window_resize': false                                // updated manually by 'update_page_layout'
    }, item);
    //this.manic_image_array[i] = image_container;
    this.manic_image_array[this.manic_image_array.length] = image_container;
  }
};

kafnu.page.Default.prototype.create_dropdown = function() {
  var arr = $('.manic-dropdown').not('.manic-dropdown-instanciated');
  var item = null;
  var item_id = "";

  /**
   * @type {manic.ui.Dropdown}
   */
  var dropdown = null;

  for (var i = 0, l = arr.length ; i < l; i++) {
    item = $(arr[i]);
    item.addClass('manic-dropdown-instanciated');

    item_id = '' + item.find('select').attr('id');

    dropdown = new manic.ui.Dropdown({}, item);
    this.dropdown_array[this.dropdown_array.length] = dropdown;

    this.dropdown_dictionary[item_id] = dropdown;
  }
};

kafnu.page.Default.prototype.expandable_text = function() {
  var minimized_elements = $('.minimize-text');
    
  minimized_elements.each(function(){
      // var t = $(this).text();                          // this is just TEXT !!!!!
      var t = $(this).html();
      var maxLength = $(this).data('length');

      if(manic.IS_TABLET_LANDSCAPE == true) {
        maxLength = $(this).data('tablet-length');
      }

      if(manic.IS_TABLET_PORTRAIT == true) {
        maxLength = $(this).data('mobile-length');
      }

      if(manic.IS_MOBILE == true) {
        maxLength = $(this).data('mobile-length');
      }

      if(t.length < maxLength) return;
      if(maxLength < 0) return;

      // http://stackoverflow.com/questions/18087416/split-string-in-half-by-word
      // var middle = length;
      // var before = t.lastIndexOf(' ', middle);
      // var after = t.indexOf(' ', middle + 1);

      // if (middle - before < after - middle) {
      //     middle = before;
      // } else {
      //     middle = after;
      // }

      // var s1 = t.substr(0, middle);
      // var s2 = t.substr(middle + 1);

      //trim the string to the maximum length
      var trimmedString = t.substr(0, maxLength);

      //re-trim if we are in the middle of a word
      trimmedString = trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" ")))

      if (t.length > maxLength)
        $(this).html(trimmedString+'...');
      else
        $(this).html(t);
            
  });

}



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
kafnu.page.Default.prototype.update_page_layout = function(){
  kafnu.page.Default.superClass_.update_page_layout.call(this);

  if (manic.IS_ACTUAL_MOBILE == true) {
    this.body.addClass('actual-mobile-version');
  } else {
    this.body.removeClass('actual-mobile-version');
  }

  if (this.is_page_min_height == true && manic.IS_MOBILE == false) {
    var target_height = this.page_wrapper.height() - this.desktop_footer_element.outerHeight();

    this.page_wrapper_content.css({
      'min-height': target_height + 'px'
    });
  }


  if (this.is_page_min_height_mobile == true && manic.IS_MOBILE == true) {
    var target_height = this.page_wrapper.height() - this.mobile_header_element.outerHeight();

    // console.log(target_height);

    this.page_wrapper_content.css({
      'min-height': target_height + 'px'
    });
  }

  
  if (this.has_adjust_height_main_content_item == true) {
    this.adjust_height_main_content_item();
  }
};




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
kafnu.page.Default.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  kafnu.page.Default.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  

  if (this.has_community_hash_element == true) {

  }
  
}

/**
 * @override
 * @inheritDoc
 */
kafnu.page.Default.prototype.on_scroll_to_no_target = function() {
  kafnu.page.Default.superClass_.on_scroll_to_no_target.call(this);


  // i'm not sure what this is for...
  
  if (this.has_community_hash_element == true) {
    $("#header-mobile").removeClass("permanent-bg");
    // $(".header-mobile-spacer").hide();

    $(".community-page-1").fadeIn();
    $(".community-page-2").hide();

    $('.page-builder-section').not('.community-slider').fadeIn();
    // $('.page-builder-section.community-slider').hide();
    
    this.update_manic_image_containers();
  }
  
}




goog.exportSymbol('kafnu.page.Default', kafnu.page.Default);