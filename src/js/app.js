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
    // Call plugin
    $('.collage__img').fluidbox({
      templates: {
        buttons: {
          next: '<div class="fluidbox-btn" id="fluidbox-btn-next"></div>',
          prev: '<div class="fluidbox-btn" id="fluidbox-btn-prev"></div>'
        }
      }
    });
  });
  //--> fluidbox

});//doc ready
