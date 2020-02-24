(function($) {
var windowWidth = $(window).width();
/*Google Map*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};

//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){ 
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


// body animate
$(".hm-bnr-scroll").click(function(e) {
    e.preventDefault();
    var goto = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(goto).offset().top - 0
    }, 800);
});

/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}




if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}


/*Shoriful*/

$('.sa-main-slider').slick({
      pauseOnHover: false,
      dots: true,
      infinite: true,
      arrows: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
});

$('.scroll-btn').on('click', function(e){
  e.preventDefault();
  var togo = $(this).data('to');
  goToByScroll(togo, 0);
});

function goToByScroll(id, offset){
  if(id){
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    $('html,body').animate(
        {scrollTop: $(id).offset().top - offset},
      500);
  }
}


$('.sa-testimonial-slider').slick({
      pauseOnHover: false,
      dots: true,
      infinite: true,
      arrows: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
});


if( $('.sa-company-name').length ){
  $('.sa-company-name').slick({
      dots: true,
      arrows: false,
      infinite: false,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });
}






/*Milon*/

/*
-----------------------
Start Contact Google Map ->> 
-----------------------
*/
if( $('#googlemap').length ){
    var latitude = $('#googlemap').data('latitude');
    var longitude = $('#googlemap').data('longitude');

    var myCenter= new google.maps.LatLng(latitude,  longitude);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    function initialize(){
        var mapProp = {
          center:myCenter,

          mapTypeControl:false,
          scrollwheel: false,

          zoomControl: false,
          disableDefaultUI: true,
          zoom:17,
          streetViewControl: false,
          rotateControl: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          styles : CustomMapStyles
      };
      var map= new google.maps.Map(document.getElementById('googlemap'),mapProp);

      var marker= new google.maps.Marker({
        position:myCenter,
        icon:'assets/images/map-marker.png'
        });
      marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}





/*Prashanto*/
/*
 Product Details Slider
*/

if( $('.hm-banner-slider').length ){
  $('.hm-banner-slider').slick({
      dots: true,
      arrows: false,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
  });
}

if( $('.hm-testimonials-slider').length ){
  $('.hm-testimonials-slider').slick({
      dots: true,
      arrows: false,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
  });
}



if( $('.hm-partner-slider').length ){
  $('.hm-partner-slider').slick({
      dots: true,
      arrows: false,
      infinite: false,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });
}


if( $('.miraclePlanBigSlider').length ){
   $('.miraclePlanBigSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    speed: 700,
    dots: false,
    arrows: false,
    asNavFor: '.miraclePlanthumbSlider',
  });
}

if( $('.miraclePlanthumbSlider').length ){
  $('.miraclePlanthumbSlider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    speed: 700,
    dots: false,
    arrows: false,
    focusOnSelect: true,
    asNavFor: '.miraclePlanBigSlider',
  });

}

if ($('#socialCookie').length) {
  $('#socialCookie').on('click', function(){
  $('#social-cookie-bar').hide('slow');
  });
}



/*Rannojit*/

var allPanels = $('.hh-accordion-des').hide();
$('.hh-accordion-tab-row').removeClass('remove-border');
  $('.hh-accordion-title').click(function() {
        allPanels.slideUp();
        $('.hh-accordion-title').removeClass('hh-accordion-active');
        $('.hh-accordion-tab-row').removeClass('remove-border');
        $(this).next().slideDown();
        $(this).addClass('hh-accordion-active');
        $(this).parent().next().addClass('remove-border');
        return false;
});


if (windowWidth > 767) {
  if( $('#sidebar').length ){
  $('#sidebar').stickySidebar({
      topSpacing: 100,
      bottomSpacing: 60
  });
}
}

if( $('#scrollToAarea').length ){
  $('#scrollToAarea').onePageNav({
    changeHash: false,
    scrollSpeed: 500,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
  });
}


/*if( $('.masonry').length ){
  $('.masonry').masonry({
    // options
    //itemSelector: 'ul.masonry li',
    columnWidth: '.campaigns-list-item-wrp',
    percentPosition: true,
    fitWidth: true

  });
}*/

if( $('.masonry').length ){
  $('.masonry').packery({
    // options
    itemSelector: '.campaigns-list-item-wrp',
  });

}


if (windowWidth > 991) {
  $('.humberger-menu-btn').on('click', function(){
    $(this).toggleClass('humber-menu-expend');
    $('.humberger-menu-xlg').slideToggle(300);
  });
}

if (windowWidth < 992) {
  $('.humberger-menu-btn').on('click', function(){
    $(this).toggleClass('humber-menu-expend');
    $('.humberger-menu-xs').slideToggle(300);
  });
}


$('.login-btn button').on('click', function(){
  $(this).toggleClass('login-menu-expend');
  $('.login-btn ul').slideToggle(300);
});

$('.hdr-login-profile').on('click', function(){
  $(this).toggleClass('login-btn-expend');
  $('.hdr-login-profile ul').slideToggle(300);
});

$('.humberger-menu-items > ul > li.menu-item-has-children > a').on('click', function(e){
  e.preventDefault();
  $(this).toggleClass('xs-sub-menu-expend');
  $(this).parent().find('.sub-menu').slideToggle(300);
});










    //new WOW().init();

})(jQuery);