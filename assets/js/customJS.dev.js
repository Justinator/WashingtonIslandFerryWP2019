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
// detect IE and display a warning message to users
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<p style="text-align: center; position: relative; z-index: 99999; background-color: #c8102e; color: #ffffff;">You are using a browser no longer supported by Microsoft. For the best and most secure viewing experience, please use a modern browser like <a href="https://www.google.com/chrome/" target="blank" rel="noreferrer" style="color: #ffffff;">Chrome</a> or <a href="https://www.mozilla.org/en-US/firefox/new/" target="blank" rel="noreferrer" style="color: #ffffff;">Firefox</a>.</p>')
}
