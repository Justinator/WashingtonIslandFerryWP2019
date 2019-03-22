// open menu
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".mobile-menu").addClass("open");
        	e.stopPropagation();
    });
});
//close menu
$(function() {
    $(".closeMenuButton").click(function(e){
        	$(".mobile-menu").removeClass("open");
    });
});
$(function() {
    $(".site").click(function(e){
    	if(!$(e.target).hasClass("menu")){
        	$(".mobile-menu").removeClass("open");
    	}
    });
});
// Hamburger menu animation
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});

$(function() {
  $(".menuTextWrap").click(function(e){
    if($(".menu").hasClass("open")){
          document.querySelector(".linkList").addEventListener("click", closeMenu);
            $(".menu").removeClass("open");
          }
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
