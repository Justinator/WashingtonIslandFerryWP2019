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
// Custom Google maps
var map;
var map2;
function initMap() {

  var wisFerry = {lat: 45.338676, lng: -86.938388};

  var northport = {lat: 45.290020, lng: -86.978890};

  var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 16, center: wisFerry});
    // The marker, positioned at wisFerry
    var marker = new google.maps.Marker({position: wisFerry, map: map, icon: "/wp-content/uploads/2019/03/washingtonIslandStar-2.png"});

  var map2 = new google.maps.Map(
        document.getElementById('map2'), {zoom: 17, center: northport});
    // The marker, positioned at northport
    var marker = new google.maps.Marker({position: northport, map: map2, icon: "/wp-content/uploads/2019/03/washingtonIslandStar-2.png"});
}
