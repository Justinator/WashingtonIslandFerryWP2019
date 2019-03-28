// toggle open and close our mobile menu
$(function() {
    $(".menuButtonWrap").click(function(e){
        $("#mobile-menu").toggleClass("open");
        	e.stopPropagation();
    });
});
$(function() {
    $(".site").click(function(e){
    	if(!$(e.target).hasClass("menu")){
        	$("#mobile-menu").removeClass("open");
    	}
    });
});
// Hamburger menu animation
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
// Change our navigation color and logo on scroll
$(function() {
  var header = $(".main-navigation");
  var scrollLogo = $(".hiddenScrollLogo");
  var primaryLogo = $(".siteLogo");

  $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 50) {
          header.addClass("scrolled") && primaryLogo.addClass("hiddenScrollLogo") && scrollLogo.addClass("scrolledLogo");
      } else {
          header.removeClass("scrolled") && scrollLogo.removeClass("scrolledLogo") && primaryLogo.removeClass("hiddenScrollLogo");
      }
  });

});
// Add active state to our nav based on page
$(function() {
  $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('activePage');
});
