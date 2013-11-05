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
	
Drupal.behaviors.homepage_floating_footer = {
		attach: function(context) {
			floatingMenu.add('floatdiv',  
			{  
				// Represents distance from left or right browser window  
				// border depending upon property used. Only one should be  
				// specified.  
				 targetLeft: 10,  
				// targetRight: 10,  
	  
				// Represents distance from top or bottom browser window  
				// border depending upon property used. Only one should be  
				// specified.  
				//targetTop: 10,  
				targetBottom: 230,  
	  
				// Uncomment one of those if you need centering on  
				// X- or Y- axis.  
				 //centerX: true,  
				 //centerY: true,  
	  
				// Remove this one if you don't want snap effect  
				snap: true  
			}); 
		}
};

})(jQuery);
