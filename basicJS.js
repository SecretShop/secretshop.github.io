//
$(function(){
    $("#header").load("templates/header.html");
    $("#nav_top").load("templates/nav_top.html");
    $("#nav_left").load("templates/nav_left.html");
    $("#footer").load("templates/footer.html");
});
    
/*        
// Scrolling Effect
var TrackScroll = 0;
$(window).scroll(function () {
    TrackScroll = $(this).scrollTop();
    if (TrackScroll >= 1 && TrackScroll < 2000) {
        $("#header > img").css({height: TrackScroll+400});
        $("#header > img").css({marginTop: TrackScroll});
    }
    else {
        $("#header > img").css({height: 400});
    }
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

*/