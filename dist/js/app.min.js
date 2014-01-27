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

  // Remove loading class on body when
  // ajax has done loading
  $(document).ajaxComplete(function() {
    $('body').addClass('isLoaded');
  });
  //--> ajaxComplete


  // MixItUp for sorting & filtering
  callMixItUp = function () {
    var filterElem = '.collage__filter a';

    $(filterElem).on('click', function(event) {
      event.preventDefault();
    });

    $('.columns').mixitup({
      targetSelector: '.column__item',
      filterSelector: filterElem,
      targetDisplayGrid : 'block',
      targetDisplayList: 'block'
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
