$(document).ready(function(){

  htw.liemba.init();
  
});




/*

 // SVG fallback
  // toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
  if (!Modernizr.svg) {
    var imgs = document.getElementsByTagName('img');
    var dotSVG = /.*\.svg$/;
    for (var i = 0; i != imgs.length; ++i) {
      if(imgs[i].src.match(dotSVG)) {
        imgs[i].src = imgs[i].src.slice(0, -3) + "png";
      }
    }
  }


    $.each(mainNavItems, function(){
    var a = $("<div class='nav-mobile-anchor'></div>");
    a.click(function(){
      var that = $(this);
      if( that.parents("li").hasClass("expanded") ){
        that.parents("li").removeClass("expanded");
      }else{
        that.parents("li").addClass("expanded");
      }
    });

    $(this).append(a);

    });
*/
