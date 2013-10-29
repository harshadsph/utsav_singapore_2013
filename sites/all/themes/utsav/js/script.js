/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($) {


// Place your code here.
Drupal.behaviors.homepage_image_video_slideshow = {
		attach: function(context) {
			if ($.isFunction($.fn.camera)) {
				if($("#homepage_image_video_slider")[0]){
					$('#homepage_image_video_slider').camera({
						height: '100%',
						pagination: false,
						thumbnails: true,
						imagePath: '/sites/all/themes/utsav/images/',
						autoAdvance: false
					});
				}
			}
		}
	};


})(jQuery);
