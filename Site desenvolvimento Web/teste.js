$('.slider-1').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});

jQuery(document).ready(function() {
    $(window).scroll(function () {
        var set = $(document).scrollTop()+"px";
        jQuery('#float-banner').animate({
            top:set
        },
        {
            duration:1000,
            queue:false
        });
    });
});

$('.slider2-1-1').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });
                  
  
