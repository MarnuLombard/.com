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

  // Happy.js
  // Strightforward error checking for forms
    // First check if form exists on page
  if ($('#contactForm').length > 0) {
    $('#contactForm').isHappy({
      when: 'keyup',

      fields: {
        '#name' : {
          required: true,
          message: 'Please enter your name. Make sure it&rsquo;s over two characters.',
        },
        '#address' : {
          required: true,
          message: 'Please enter your email address. Should be a valid address too.',
          test: happy.email // this can be *any* function that returns true or false
        },
        '#message' : {
          required: true,
          message: 'You should say at least something&hellip;'
        }
      }
    });
  }


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
