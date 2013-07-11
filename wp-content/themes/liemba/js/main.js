$(document).ready(function(){
  htw.liemba.init();  
});

Handlebars.registerHelper('safe', function(s) {
  return new Handlebars.SafeString( s );
});

Handlebars.registerHelper('imageOf', function(p) {
 	return new Handlebars.SafeString(p.profile_picture.links[0].href);
});