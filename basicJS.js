//
$(function(){
    $("#header").load("templates/header.html");
    $("#nav_top").load("templates/nav_top.html");
    $("#nav_left").load("templates/nav_left.html");
    $("#footer").load("templates/footer.html");
    $.backstretch("background.jpg");  
});
    
        
// Scrolling Effect
var TrackScroll = 0;
$(window).scroll(function () {
    TrackScroll = 1-($(this).scrollTop()/400);
    if (TrackScroll >= .3)
        $(".backstretch").animate({opacity: TrackScroll}, "fast");
});
    

$(window).load(function(){
    $("#Slideshow").css({ width: 900 });
    $("#header > img").css({ width: 900 });
});

//Window Resizing
function resizedw(){
    if (innerWidth < 900) {
        $("#center").css({ width: innerWidth });
        $("#Slideshow").css({ width: innerWidth }); 
        $("#header > img").css({ width: innerWidth });
    }
    else {
        $("#center").css({ width: 900 });
        $("#Slideshow").css({ width: 900 });
        $("#header > img").css({ width: 900 });
    }
}

//Resize timer
var doit;
$(window).resize(function(){
    clearTimeout(doit);
    doit = setTimeout(resizedw, 100);
});