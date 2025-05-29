jQuery(document).ready(function ($) {

  // make code pretty
  window.prettyPrint && prettyPrint();


  $('.accordion').on('show', function (e) {
    $(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('active');
    $(e.target).prev('.accordion-heading').find('.accordion-toggle i').removeClass('icon-caret-right');
    $(e.target).prev('.accordion-heading').find('.accordion-toggle i').addClass('icon-caret-down');
  });

  $('.accordion').on('hide', function (e) {
    $(this).find('.accordion-toggle').not($(e.target)).removeClass('active');
    $(this).find('.accordion-toggle i').not($(e.target)).removeClass('icon-aret-down');
    $(this).find('.accordion-toggle i').not($(e.target)).addClass('icon-caret-right');
  });


  (function () {

    var $menu = $('nav'),
      optionsList = '<option value="" selected>Go to..</option>';

    $menu.find('li').each(function () {
        var $this = $(this),
          $anchor = $this.children('a'),
          depth = $this.parents('ul').length - 1,
          indent = '';

        if (depth) {
          while (depth > 0) {
            indent += ' - ';
            depth--;
          }

        }
        $(".nav li").parent().addClass("bold");

        optionsList += '<option value="' + $anchor.attr('href') + '">' + indent + ' ' + $anchor.text() + '</option>';
      }).end()
      .after('<select class="selectmenu">' + optionsList + '</select>');

    $('select.selectmenu').on('change', function () {
      window.location = $(this).val();
    });

  })();

  //to top
  $().UItoTop({
    easingType: 'easeOutQuart'
  });

  //add some elements with animate effect
  // $(".features").hover(
  //   function () {
  //     $(this).find('.icon').addClass("animated fadeInUp");
  //     $(this).find('a.btn').addClass("animated fadeInRight");
  //     $(this).find('.features_content').addClass("animated fadeInDown");
  //   },
  //   function () {
  //     $(this).find('.icon').removeClass("animated fadeInUp");
  //     $(this).find('a.btn').removeClass("animated fadeInRight");
  //     $(this).find('.features_content').removeClass("animated fadeInDown");
  //   }
  // );

  $(".features-old").hover(
      function () {
        // Entrée
        $(this).find('.icon')
            .css("animation-duration", "1.5s")
            .addClass("animated fadeInUp");

        $(this).find('a.btn')
            .css("animation-duration", "2s")
            .addClass("animated fadeInRight");

        $(this).find('.features_content')
            .css("animation-duration", "1.8s")
            .addClass("animated fadeInDown");
      },
      function () {
        // Sortie avec animation de disparition
        const icon = $(this).find('.icon');
        const btn = $(this).find('a.btn');
        const content = $(this).find('.features_content');

        icon
            .css("animation-duration", "1s")
            .removeClass("fadeInUp")
            .addClass("fadeOutDown");

        btn
            .css("animation-duration", "1s")
            .removeClass("fadeInRight")
            .addClass("fadeOutRight");

        content
            .css("animation-duration", "1s")
            .removeClass("fadeInDown")
            .addClass("fadeOutUp");

        // Supprimer les classes après la durée de l'animation (1s ici)
        setTimeout(() => {
          icon.removeClass("animated fadeOutDown");
          btn.removeClass("animated fadeOutRight");
          content.removeClass("animated fadeOutUp");
        }, 1000); // 1000ms = 1s
      }
  );



  $(".cta-box").hover(
    function () {
      $(this).find('.cta a').addClass("animated wiggle");
    },
    function () {
      $(this).find('.cta a').removeClass("animated wiggle");
    }
  );

  $("a[data-pretty^='prettyPhoto']").prettyPhoto({
    social_tools: false
  });
  //portfolio hover
  $('ul.da-thumbs > li').hoverdir();

  $(".da-animate a").mouseover(function () {
    $(".da-thumbs li article", this).stop().animate({
      "padding-top": "10p%"
    }, {
      queue: false,
      duration: 500
    }, "slow");
  });
  $(".da-animate a").mouseout(function () {
    $(".da-thumbs li article", this).stop().animate({
      "padding-top": "25p%"
    }, "slow");
  });

  $('ul.nav li.dropdown').hover(function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
  }, function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
  });



  // flexslider
  $('.flexslider').flexslider({
    animation: "fade",
    controlNav: false
  });

  //testmonial slider
  $('.testmonial_slider').flexslider({
    animation: "fade",
    controlsContainer: " ",
    pauseOnHover: true,
    slideshowSpeed: 7000,
    animationSpeed: 600,
    easing: "swing",
    direction: "horizontal",
    controlNav: true,
    directionNav: false,
    smoothHeight: true,
    startAt: 0,
    slideshow: true
  });

  $('#images').refineSlide({
    transition: 'random',
    autoPlay: true,
    useThumbs: false

  });


});
