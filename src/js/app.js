$(document).ready(function() {

	// Replace png with svg using modernizr
	if (!Modernizr.svg) {
		$('img[src*="svg"]').attr('src', function() {
			return $(this).attr('src').replace('.svg', '.png');
		});
	}
	//--> svg replace


  // Columnizer polyfill for css3 columns
  if (!Modernizr.csscolumns) {
    $('.columns').columnize();
  }
  // --> Columnizer


  // MixItUp for sorting & filtering
  $(function () {
    $('.columns').mixitup({
      targetSelector: '.column__item',
      filterSelector: '.collage__filter a'
    });
  })
  //--> MixItUp


  // init fluidbox
  $(function () {
    $('.collage__img').fluidbox();
  });
  //--> fluidbox

});//doc ready
