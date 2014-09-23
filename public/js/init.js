(function($){
	$(function(){
	  
    var animation_speed = 2000;

    if ($('body').hasClass("slide-vertical")) {
     
      var tid = setInterval(tagline_fade, 4500);
    }
    else {
       var tid = setInterval(tagline_vertical_slide, 6000);
      
    }

    // fade style
    function tagline_fade() {
      var curr = $("h1.welcome span a.active");
      curr.removeClass("active");
      var nextTag = curr.next('a');
      if (!nextTag.length) {
        nextTag = $("h1.welcome span a ").first();
      } 
      nextTag.addClass("active");
    }

    // vertical slide
    function tagline_vertical_slide() {
      var curr = $("h1.welcome span a.active");
      curr.removeClass("active").addClass("vs-out");
      setTimeout(function(){
        curr.removeClass("vs-out");
      }, animation_speed);

      var nextTag = curr.next('a');
      if (!nextTag.length) {
        nextTag = $("h1.welcome span a").first();
      } 
      nextTag.addClass("active");
    }

    function abortTimer() { // to be called when you want to stop the timer
      clearInterval(tid);
    }

    // Background adjustments
    if ($(window).height() > $(window).width()) {
      $("#home .background img").css({'width': 'auto', 'height': '100%'})
    }

	}); // end of document ready
})(jQuery); // end of jQuery name space