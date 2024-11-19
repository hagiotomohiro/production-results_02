jQuery(document).ready(function () {
  $('.bxslider1').bxSlider({
    minSlides: 5,
    maxSlides: 6,
    slideWidth: 360,
    slideMargin: 2,
    moveSlides: 1,
    responsive: true,
    nextSelector: '#slider-next',
    prevSelector: '#slider-prev',
    nextText: '次へ →',
    prevText: '← 前へ'
  });

});


$('a.info').tooltip();

$("#slider1").responsiveSlides({
  speed: 1500
});

$(window).load(function () {
  $('.flexslider').flexslider({
    animation: "slide",
    start: function (slider) {
      $('body').removeClass('loading');
    }
  });
});

$(document).ready(function () {

  $("#owl-demo").owlCarousel({

    items: 4

  });

});

jQuery(document).ready(function () {
  jQuery('ul.superfish').superfish();
});

new WOW().init();


wow = new WOW(
  {
    boxClass: 'wow',      // default
    animateClass: 'animated', // default
    offset: 0          // default
  }
)
wow.init();


$(window).load(function () {
  $('[data-zlname = reverse-effect]').mateHover({
    position: 'y-reverse',
    overlayStyle: 'rolling',
    overlayBg: '#fff',
    overlayOpacity: 0.7,
    overlayEasing: 'easeOutCirc',
    rollingPosition: 'top',
    popupEasing: 'easeOutBack',
    popup2Easing: 'easeOutBack'
  }
  );
}
);

$(window).load(function () {
  $('.flexslider').flexslider({
    animation: "slide",
    start: function (slider) {
      $('body').removeClass('loading');
    }
  }
  );
}
);

$(document).ready(function () {

  $("#owl-demo").owlCarousel({
    items: 4,
  }
  );

}
);




$(window).scroll(function () {
  $('#skillz').each(function () {
    var imagePos = $(this).offset().top;
    var viewportheight = window.innerHeight;
    console.log(viewportheight);
    var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow + viewportheight) {
      $('.skill_bar').fadeIn('slow');
      $('.skill_one').animate({
        width: '60%'
      }
        , 2000);
      $('.skill_two').animate({
        width: '90%'
      }
        , 2000);
      $('.skill_three').animate({
        width: '70%'
      }
        , 1000);
      $('.skill_four').animate({
        width: '55%'
      }
        , 1000);
      $('.skill_bar_progress p').fadeIn('slow', function () {

      }
      );
    }
  }
  );
}
);