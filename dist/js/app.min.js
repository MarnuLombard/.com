$(document).ready(function() {

	// Replace png with svg using modernizr
	if (!Modernizr.inlinesvg) {
		$('img[src*="svg"]').attr('src', function() {
			return $(this).attr('src').replace('.svg', '.png');
		});
	}
	//--> Modernizr


	// The function to make the collage function work as per isotope
    var $container = $('.collage__wrapper');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.collage__filter a').click(function(){
        $('.collage__filter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');

        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    });
    //--> isotope

    // init fluidbox
        $(function () {
            // You can use any kind of selectors
            $('.collage__img').fluidbox();
        });
    //--> fluidbox
});//doc ready
