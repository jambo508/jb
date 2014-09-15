
jQuery(document).ready(function() {

// or with jQuery
var $content = jQuery('#content');
// initialize Masonry after all images have loaded  
$content.imagesLoaded( function() {
  $content.masonry();
});


jQuery('body.home #content').masonry({
  columnWidth: 250,
  itemSelector: 'article',
  "isFitWidth": true
});



});
