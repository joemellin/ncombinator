/*
            |   | *   |         WELCOME TO CUSTOM.JS !
            |   |     |       GearBox HTML template v1.4.1
            |-----| |   |       Copyright (c) 2012 demention. All rights reserved.
            |   | |           [http://themeforest.net/user/demention]
            |   | |   *

________________________________________________________________________________________________________*/



  var twitterUser = ""  ; // Add your twitter user name , or just leave this field ""
  var twitLimit = 4   ;   // Tweets limit

  var flickrUser = ""   ;   // Add your flickr id , or just leave this field ""
  var photoLimit = 8    ;   // Photo limit


// when the DOM is ready..
$(document).ready(function() {


  //IMAGE LOADING INDICATOR
  $(".gallery-style-1:not(.no-preloading) ,.gallery-style-2:not(.no-preloading) , .preload-images").not('.no-preloading').preloader();


  //FLUED VIDEOS (FITVIDS  JQUERY PLUGIN)
  $('.video-container').fitVids();



  //START dropdown level 2+ positioning (road to demention dropdowns)

  var dementionDropdowns = function() {
    $('#navigation > ul > li > a').each(function() {

      var pageWidth = $(window).width();
        dropdownChild = $(this).parent().find('ul ul'),
        offset = $(this).offset(),
        spaceAvailable = pageWidth - offset.left;

      if (370 < spaceAvailable) {
        dropdownChild.addClass('right-side');
      }else {
        dropdownChild.removeClass('right-side');
      }
    });
  };

  dementionDropdowns();

  $(window).resize(function() {
    dementionDropdowns();
  });

  //END dropdown level 2+ positioning


  //START -- Menus to <SELECT> - Based on:http://css-tricks.com/13303-convert-menu-to-dropdown/ -- thanks  css-tricks for the code
  // Create the dropdown base
   $("<select />").appendTo("#navigation");

      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("#navigation select");

      // Populate dropdown with menu items
      $("#navigation > ul > li:not([data-toggle])").each(function() {

        var el = $(this);

        var hasChildren = el.find("ul"),
            children    = el.find("li > a");

        if (hasChildren.length) {

          $("<optgroup />", {
            "label": el.find("> a").text()
          }).appendTo("#navigation select");

          children.each(function() {

            $("<option />", {
          "value"   : $(this).attr("href"),
              "text": " - " + $(this).text()
            }).appendTo("optgroup:last");

          });

        } else {

          $("<option />", {
             "value"   : el.find("> a").attr("href"),
             "text"    : el.find("> a").text()
         }).appendTo("#navigation select");

        }

      });

     // To make dropdown actually work
     // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      $("#navigation select").change(function() {
        window.location = $(this).find("option:selected").val();
      });

  //END -- Menus to <SELECT>



  //START -- MOVE-TO-TOP ARROW

  //move-to-top arrow
  $("body").prepend("<div id='move-to-top' class='animate '></div>");

  var scrollDes = 'html,body';
  /*Opera does a strange thing if we use 'html' and 'body' together so my solution is to do the UA sniffing thing*/
  if(navigator.userAgent.match(/opera/i)){
    scrollDes = 'html';
  }

  //show ,hide
  $(window).scroll(function () {

    if ($(this).scrollTop() > 160) {
      if(Modernizr.csstransitions) {
        $('#move-to-top').addClass('filling').removeClass('hiding');
      }
      else {
        $('#move-to-top').fadeIn();
      }

    } else {
      if(Modernizr.csstransitions) {
        $('#move-to-top').removeClass('filling').addClass('hiding');
      }else{
        $('#move-to-top').fadeOut();
      }

    }
  });

  // scroll to top when click
  $('#move-to-top').click(function () {
    $(scrollDes).animate({
      scrollTop: 0

    },{
      duration :1400
    });
  });

  //END -- MOVE-TO-TOP ARROW



  //add class when loaded
  $("[data-add-class]").each(function(){
    $(this).addClass($(this).attr('data-add-class'));
  });


  //remove class when loaded
  $("[data-remove-class]").each(function(){
    $(this).removeClass($(this).attr('data-remove-class'));
  });




  //SLIDER (flex slider jQuery plugin)

  $('.slider').flexslider({

    animation: "slide",
    slideDirection: "horizontal",
    animationDuration: 700,
    controlsContainer: ".slider-holder",
    prevText: "",
        nextText: "",
    start: function(){

      //show the slider
      $('.slider').fadeIn(400, function(){
        //remove the loading spinner
        $('.slider-holder').css('background','transparent');
        $(this).find('.demention-caption').addClass('demention-caption-show');
      });
    },

    before: function(slider){
      slider.find('.demention-caption').addClass('demention-caption-hide').removeClass('demention-caption-show');
    },
    after: function(slider){
      slider.find('.demention-caption').addClass('demention-caption-show').removeClass('demention-caption-hide');
    }
  });

  //END -- SLIDER (flex slider)



  //START --  LIGHTBOX (FANCYBOX JQUERY PLUGIN)

  $(".fancybox , .lightbox").fancybox({
    'overlayShow' : true,
    'overlayColor': 'black',
    'transitionIn' : 'elastic',
    'transitionOut' : 'elastic'
  });

  //END --  LIGHTBOX (FANCYBOX JQUERY PLUGIN)

  //add zoom icon to elements with fancybox
  $(".fancybox:not(.no-zoom-icon) , [data-lightbox]:not(.no-zoom-icon)").each(function(){
    $(this).prepend("<span class='zoom-icon animate'></span>");
  });




  //START --  TOOLTIP (TIPSY JQUERY PLUGIN)

  $('.tooltip , [data-tooltip]').tipsy({
    fade:true,
    html: true
  });

  //END --  TOOLTIP




  //DEMENTION CLOSE BUTTON
  $(".removable").each(function(){
    $(this).prepend("<a href='#' class='demention-close-icon'>&#215</a>");
  });

  //close button function
  $('.removable .demention-close-icon').click(function() {
    var theBox = $(this).parent();

    theBox.fadeOut(function() {
      if(theBox.hasClass('element')){
        $(this).remove();
      }else{
        $(this).hide();
      }
    });

    return false;
  });




  //DEMENTION IMAGE CAPTIONS
  $("[data-image-caption]").each(function(){
    var dementionCaption = this.getAttribute('data-image-caption');
    if(dementionCaption){
      $(this).prepend("<div class='demention-caption animate-long '><div>"+dementionCaption+"</div></div>");
    }
  });




  //START DEMENTION EXPANDABLE BOXES
  $('.expandable .always-visible').click(function() {

    if($(this).hasClass('opened')) {
      $(this).removeClass('opened');
    }else {
      $(this).addClass('opened');
    }
    $(this).parent().find('.dropdown') .slideToggle();
    return false;

  });
  //END DEMENTION EXPANDABLE BOXES



  //START DEMENTION ACCORDIAN
  $(".accordion section").first().find(".header").each(function(){
    $(this).addClass('current');
    $(this).parent().find('.content').slideToggle();
  });

  $('.accordion .header').click(function() {
    var accordionContainer = $(this).parent().parent();

    if ($(this).hasClass('current') == false){

      accordionContainer.find('.current').removeClass('current');
      accordionContainer.find('.content').slideUp();
      $(this).addClass('current');
      $(this).parent().find('.content').slideToggle();
      return false;

    }

  });
  //END DEMENTION ACCORDIAN




  //START DEMENTION TABS
  $(".tabbed .tabs li").first().each(function(){
    $(this).addClass('current');
  });

  $(".tabbed > [data-tab]").first().each(function(){
    $(this).show();
  });

  $('.tabbed .tabs [data-tab]').click(function(){

    var tabsContainer = $(this).parent().parent();
    var tabName = $(this).attr('data-tab');

    tabsContainer.find('> [data-tab]').hide();
    tabsContainer.find('[data-tab = "'+tabName+'"]').show();

    tabsContainer.find('.current').removeClass('current');
    $(this).addClass('current');

    return false;

  });
  //END DEMENTION TABS




  //DEMENTION EXPANDABLE BOXES -- using data-toggle
  $('[data-toggle]').click(function() {
    var toggleTarget = this.getAttribute('data-toggle');
    $(toggleTarget).slideToggle();
    return false;
  });




  //START -- FLICKR FEED
  if (flickrUser) {
    $('#flickr').jflickrfeed({
      limit: photoLimit,
      qstrings: {
        id: flickrUser
      },
      itemTemplate:
      '<div class="c-3-12"><a href="{{image_b}}" class="g image fancybox "><img src="{{image_s}}" alt="{{title}}"></a></div>'
    } ,
    function() {
      $('#flickr .fancybox').fancybox();
      $(".gallery-style-1:not(.no-preloading) ,.gallery-style-2:not(.no-preloading)").preloader();
    });
  }
  //END -- FLICKR FEED




  //START -- GALLERY (FILTERABLE)

  /*masonry will be triggered after imagesLoaded*/
  $('#gallery').imagesLoaded( function(){

    $(this).masonry({
      itemSelector: '.item:not(.hidden)', /*select all items except for the items with .hidden class*/
      isAnimated:!Modernizr.csstransitions, /*Use css transitions when available*/
      animationOptions:{
        duration: 800,
        queue: false
      }
    });

    $('[data-filter]').click(function() {

      var filterCategory = $(this).attr('data-filter');
    //  var globalCurrent = $('body').find ($('[data-filter ="'+filterCategory+'"'));

      //$(this).css('outline','none');
      $('.sub-menu li.current').removeClass('current');
      $(this).parent().addClass('current');

      if(filterCategory == 'none') {
        $('#gallery .hidden').fadeIn('slow').removeClass('hidden');
      }
      else {
        $('#gallery > *').each(function() {
          if(!$(this).hasClass(filterCategory)) {
            $(this).fadeOut('slow').addClass('hidden');
          } else {
            $(this).fadeIn('slow').removeClass('hidden');
          }
        });
      }
      $('#gallery').masonry('reload');
      return false;
    });
  });

  //END -- GALLERY (FILTERABLE)

  $('.masonry').masonry({
    // options
    itemSelector : "[class*='c-']"
  });




  //START -- POLYFILLS/FALLBACKS


  //START -- css transition fallback

  if(!Modernizr.csstransitions){  /*If css transitions not available*/


    //slider prev,next arrows
    $(".slider-holder").hover(
      function () {
        $(this).find('.flex-direction-nav a.prev').stop().animate({right : "20"}, 500);
        $(this).find('.flex-direction-nav a.next').stop().animate({left : "20"}, 500);
      },
      function () {
        $(this).find('.flex-direction-nav a.prev').stop().animate({right : "-200"}, 500);
        $(this).find('.flex-direction-nav a.next').stop().animate({left : "-200"}, 500);
      }
    );



    // more will be added in the next updates..



  }
  //END --  css transition fallback


  if(!Modernizr.input.placeholder){
    //set the placeholder manually if the browser doesn't support placeholder attribute natively
    $("input").each(function(){
      var placeholderText = this.getAttribute('placeholder');
      if(placeholderText){
        $(this).addClass('placeholder-text').val(placeholderText).bind('focus',function(){
          if(this.value == placeholderText){
            $(this).val('').removeClass('placeholder-text');
          }
        })
        .bind('blur',function(){
          if(this.value == ''){
            $(this).val(placeholderText).addClass('placeholder-text');
          }
        });
      }

    });

  }

  //END -- POLYFILLS/FALLBACKS






  /*START parent's class toggle button*/

  $('[data-toggle-parent-class]').click( function () {
    var toggleclass = $(this).attr('data-toggle-parent-class');

    if($(this).parent().hasClass(toggleclass)) {
      $(this).parent().removeClass(toggleclass);
    }else {
      $(this).parent().addClass(toggleclass);
    }
    return false;
  });

  /*END parent's class toggle button*/


  //if the browser is ie lt9   reloading masnory everytime when the user resize the browser slows down the filtering animation  so we only do it on modern browsers
  if(!oldBrowser) {
    $(window).resize(function() {
      $('#gallery').masonry('reload');
    });
  }



  //START -- twitter feed

  if (twitterUser) {
    getTwitters('twits', {
      id: twitterUser,
      count: twitLimit,
      withFriends: true,
      enableLinks: true,
      ignoreReplies: false,
      template: '<div class="twitterStatus">%text%</div> <span class="twitterTime"><a href="#">%time%</a></span>'
    });
  }

  //END -- twitter feed



  // hide the address bar on mobile browsers by scrolling to top (unless location.hash is available)
  if(yourSide.match(/mobile|fennec/i) && !location.hash){ /*not good enough?*/
    setTimeout(function () {
      window.scrollTo(0,1);
    })
  }


}); //END -- JQUERY document.ready

