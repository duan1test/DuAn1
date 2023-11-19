(function ($) {
  "use strict";
  /*--------------------------
Header Top JS
---------------------------- */
  $(".search-icon").on("click", function () {
    $(".header-bottom-search").slideToggle();
    $(".header-setting-inner").css("display", "none");
  });
  $(".setting-inner").on("click", function () {
    $(".header-setting-inner").slideToggle();
    $(".header-bottom-search").css("display", "none");
  });

  /*--------------------------
 scrollUp
---------------------------- */
  $.scrollUp({
    scrollText: '<i class="fa fa-angle-up"></i>',
    easingType: "linear",
    scrollSpeed: 900,
    animation: "fade",
  });

  /*--------------------------
 collapse
---------------------------- */
  $(".panel-heading a").on("click", function () {
    $(".panel-heading a").removeClass("active");
    $(this).addClass("active");
  });

  /*----------------------------
 Mobile Menu
------------------------------ */
  if ($(".mobile-menu nav").length > 0) {
    $(".mobile-menu nav").meanmenu({
      meanScreenWidth: "992",
      meanMenuContainer: ".mobile-menu",
    });
  }
  /*--
        Custom script to call Background
        Image & Color from html data attribute
    -----------------------------------*/
  $("[data-bg-image]").each(function () {
    var $this = $(this),
      $image = $this.data("bg-image");
    $this.css("background-image", "url(" + $image + ")");
  });
  $("[data-bg-color]").each(function () {
    var $this = $(this),
      $color = $this.data("bg-color");
    $this.css("background-color", $color);
  });

  $(".hero-carousel").owlCarousel({
    autoPlay: true,
    slideSpeed: 2000,
    dots: false,
    nav: false,
    loop: true,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    navText: false,
    items: 1,
    margin: 0,
    responsiveClass: true,
    responsive: {
      768: {
        navText: [
          "<i class='fa fa-long-arrow-left'></i>",
          "<i class='fa fa-long-arrow-right'></i>",
        ],
        nav: true,
      },
    },
  });

  $(".hero-carousel-3").owlCarousel({
    autoPlay: true,
    slideSpeed: 2000,
    dots: false,
    nav: false,
    loop: true,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    navText: false,
    margin: 0,
    items: 1,
    responsiveClass: true,
    responsive: {
      480: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
    },
  });

  /*----------------------------
 BestSeller owl carousel active
------------------------------ */

  $(".new-product-owl-active").owlCarousel({
    items: 4,
    loop: true,
    margin: 30,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      991: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });

  /*----------------------------
 Testimonial owl carousel active
------------------------------ */

  $(".active-tesimonial-carousel").owlCarousel({
    autoPlay: true,
    slideSpeed: 2000,
    pagination: false,
    navigation: false,
    items: 1,
    margin: 30,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
    },
  });

  /*----------------------------
 Brand Logo owl carousel active
------------------------------ */

  $(".logo-carousel").owlCarousel({
    autoPlay: true,
    slideSpeed: 2000,
    dots: false,
    nav: false,
    items: 5,
    margin: 30,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      767: {
        items: 2,
      },
      768: {
        items: 3,
      },
      991: {
        items: 4,
      },
      1200: {
        items: 5,
      },
    },
  });

  /*----------------------------
 Home v-3 owl carousel active
------------------------------ */

  $(".active-slider-carousel").owlCarousel({
    autoPlay: true,
    slideSpeed: 2000,
    pagination: false,
    navigation: false,
    items: 4,
    margin: 0,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      767: {
        items: 2,
      },
      991: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });

  /*----------------------------
 Blog Carousel active
------------------------------ */

  $(".blog-carousel").owlCarousel({
    autoPlay: false,
    slideSpeed: 2000,
    dots: true,
    nav: true,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    navText: [
      "<i class='fa fa-long-arrow-left'></i>",
      "<i class='fa fa-long-arrow-right'></i>",
    ],
    items: 1,
    margin: 30,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
    },
  });

  /*----------------------------
 Price Slider active
------------------------------ */
  if ($("#slider-range").length > 0) {
    $("#slider-range").slider({
      range: true,
      min: 40,
      max: 1600,
      values: [100, 999],
      slide: function (event, ui) {
        $("#amount").val("£" + ui.values[0] + " - £" + ui.values[1]);
      },
    });
    $("#amount").val(
      "£" +
        $("#slider-range").slider("values", 0) +
        " - £" +
        $("#slider-range").slider("values", 1)
    );
  }

  /*----------------------------
 cart-plus-minus-button
------------------------------ */
  $(".cart-plus-minus").append(
    '<div class="dec qtybutton">-</i></div><div class="inc qtybutton">+</div>'
  );

  $(".qtybutton").on("click", function () {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 0;
      }
    }
    $button.parent().find("input").val(newVal);
  });

  /*----------------------------
 Slick carousel active
------------------------------ */
  $(".single-thumbnail-big").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".single-thumbnail-small",
  });
  $(".single-thumbnail-small").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".single-thumbnail-big",
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    arrows: true,
    prevArrow:
      '<button type="button" class="custom-prev"><i class="fa fa-long-arrow-left"></i></button>',
    nextArrow:
      '<button type="button" class="custom-next"><i class="fa fa-long-arrow-right"></i></button>',
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
    ],
  });
})(jQuery);
