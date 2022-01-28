$(function() {
    var header = $(".navbar");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
           
        } else {
            header.removeClass("scrolled");
        
        }
    });
  
});

$(function() {
    var header = $(".brnd-img");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("img-size");
           
        } else {
            header.removeClass("img-size");
        
        }
    });
  
});

$(function() {
    var header = $(".sp-btn");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("sp-btn2");
           
        } else {
            header.removeClass("sp-btn2");
        
        }
    });
  
});