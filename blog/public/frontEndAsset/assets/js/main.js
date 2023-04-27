/* ===================== TABLE OF CONTENT =======================
    1. Preloader
    2. Sticky header
    3. Dropdown arrow
    4. Scroll to top
    5. Open and close search overlay
    6. Open and close sidebar overlay
    7. Responsive navbar
    8. Banner slider
    9. Instagram slider
    10. Sticky sidebar
================================================================= */


// 1. Preloader
$(window).on('load', function () {
  if ($(".preloader-wrapper").length > 0)
  {
      $(".preloader-wrapper").fadeOut("slow");
  }
});

// 2. Sticky header
$("#sticky-top").sticky({
  topSpacing:0,
  bottomSpacing:100});
$('#sticky-top').on('sticky-start', function() {
    $(this).addClass('sticky-header');
    $('.sticky-logo').addClass('sticky-logo-active');
    $('.sticky-search').addClass('sticky-search-active');
});
$('#sticky-top').on('sticky-end', function() {
  $('.kavya-navbar').removeClass('sticky-header');
  $('.sticky-logo').removeClass('sticky-logo-active');
  $('.sticky-search').removeClass('sticky-search-active');
});

// 3. Dropdown arrow
if(document.documentElement.clientWidth > 991){
  $('.nav-item').on('mouseenter', function(){
     $(this).find('.arrow-icon').addClass('active');
  }).on('mouseleave',  function(){
    $(this).find('.arrow-icon').removeClass('active');
  });
}
if (document.documentElement.clientWidth < 992) {
  $('#nav-menu-toggle .nav-item').on('click', function() {
    $(this).find('.arrow-icon').toggleClass('active');
    $(this).find('.drop-menu').slideToggle();
  });
}

// 4. Scroll to top
var scrollTop = $(".scroll-to-top");

$(window).on('scroll',function() {
  var topPos = $(this).scrollTop();
  if (topPos > 150) {
    $(scrollTop).css("opacity", "1");
  } else {
    $(scrollTop).css("opacity", "0");
  }

}); // scroll END

//Click event to scroll to top
$(scrollTop).on('click', function() {
  $('html, body').animate({
    scrollTop: 0
  }, 800);
  return false;
}); 


// 5. open and close search
$(".search-icon").on('click',function(){
    $("#search-overlay").addClass("search-show");
});
$(".closebtn").on('click',function(){
    $("#search-overlay").removeClass("search-show");
});

// 6. open and close sidebar
$(".sidebar-btn").on('click',function(){
  $(".sticky-sidebar").addClass("sidebar-show");
  $(".body-overlay").addClass("body-overlay-active");
  $(".scroll-to-top").css("visibility","hidden");
});

$(".close-sidebar").on('click',function(){
  $(".sticky-sidebar").removeClass("sidebar-show");
  $(".body-overlay").removeClass("body-overlay-active");
  $(".scroll-to-top").css("visibility","visible");
});

// 7. Responsive Navbar
let mainNav = document.getElementById("nav-menu-toggle");
let navBarToggle = document.getElementById("navbar-toggle");
let hideToggle = document.getElementById("hide-toggle");
navBarToggle.addEventListener('click', function() {
  $('#nav-menu-toggle').slideToggle();
});

// 8. Banner slider
$('.banner-carousel').slick({
  slidesToShow: 1,
  dots:true,
  autoplay:true,
  autoplaySpeed:2000,
  arrows:true,
  prevArrow:"<img class='prev-icon slick-prev' src='assets/images/prev.png'>",
  nextArrow:"<img class='next-icon slick-next' src='assets/images/next.png'>",
  fade:true, 
  swipeToSlide:true,
  swipe:true
});

// 9. Instagram slider
$('.insta-slider').slick({
  slidesToShow: 5,
  autoplay:true,
  autoplaySpeed:2000,
  speed:1000,
  swipeToSlide: true,
  swipe:true,
  arrows:false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll:1,
        swipeToSlide: true,
        swipe:true
      }
    },

    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        swipeToSlide: true,
        swipe:true
      }
    }
  ]
});

// 10. Sticky sidebar
jQuery('.content, .sidebar').theiaStickySidebar({
  additionalMarginTop:80,
  additionalMarginBottom: 30
});



