$(document).ready(function($) {
  "use strict";
  //  Selectize
  $("[data-enable-search=true]").each(function () {
    $(this).selectize({
      onDropdownOpen: dropdownOpen,
      onDropdownClose: dropdownClose,
      allowEmptyOption: false
    });
  });

  var select = $("select");
  select.selectize({
    onDropdownOpen: dropdownOpen,
    onDropdownClose: dropdownClose,
    allowEmptyOption: true,
  });

  function dropdownOpen($dropdown) {
    $dropdown.addClass("opening");
  }

  function dropdownClose($dropdown) {
    $dropdown.removeClass("opening");
  }


        $('#lightgallery').lightGallery();


    $('.product-slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<span class="slick-prevs slick-custom-arrow"><i class="icon ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slick-nexts slick-custom-arrow"><i class="icon ion-ios-arrow-forward"></i></span>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 580,
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


});

