// Scrolling Effect
var TrackScroll = 0;
$(window).scroll(function () {
    TrackScroll = 1-($(this).scrollTop()/700);
    if (TrackScroll >= .3)
        $(".backstretch").animate({opacity: TrackScroll}, "fast");
});



