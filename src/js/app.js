$(document).ready(function() {

  // AjaxLoad
  // load first load of posts
  $('#ajaxLoad').trigger('click');
  //--> AjaxLoad


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
  callMixItUp = function () {
    $('.columns').mixitup({
      targetSelector: '.column__item',
      filterSelector: '.collage__filter a'
    });
  };
  //--> MixItUp


  // init fluidbox
  callFluidbox = function() {
    // Call plugin
    $('.collage__img').fluidbox({
      templates: {
        buttons: {
          next: '<div class="fluidbox-btn" id="fluidbox-btn-next"></div>',
          prev: '<div class="fluidbox-btn" id="fluidbox-btn-prev"></div>'
        }
      }
    });
  };
  //--> fluidbox


  // A function calling the functions that need to
  // be reinitialised when the dom is editted.
  // This is more than likely a really fucking dumb way of doing it
  callKilledFunctions = function() {
    callFluidbox();
    callMixItUp();
  };

});//doc ready
