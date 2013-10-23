(function ($) {
  $(document).ready(
    function() {
	
	//number of image count
    var imgcount = 0;     
	
    //Get node id from gallery
	var node_id = Drupal.settings.node_id.currentNid;	
	
	//Rotate through total number of images & change the anchor tag to new multimedia URL.
	$('.story_phototable .node-gallery .field-name-field-gallery .field-items .field-item img').each(function() {
		$(this).attr('title').replace(/"/g, "&quot;");
		$(this).attr('alt').replace(/"/g, "&quot;");
		
        var embedAhref = $('<a>');  
		var cbSize = checkDim();        
        var cbWidth = cbSize.cbWidth;
        var cbHeight = cbSize.cbHeight;  
		
		
        embedAhref.attr('href','/multimedia-gallery-iframe/'+ node_id +'/' + imgcount).colorbox({iframe:true, width: cbWidth, height: cbHeight}); 
        $(this).wrap(embedAhref);
        imgcount++;
		
      }); 

	  $(window).resize(function() {
          var cbSize = checkDim();      
          $('.field-name-field-gallery .field-items .field-item img').each(function() { 
            $(this).parent().colorbox({iframe:true, width: cbSize.cbWidth , height: cbSize.cbHeight}); 
          });
      });      
      
    function checkDim() {
        var cbsize = new Object();
        
        if ($(window).width() >= 1024) {
          cbsize.cbWidth = '890';
          cbsize.cbHeight = '665';
        }
        else if ($(window).width() < 1024 && $(window).width() > 500) {
          cbsize.cbWidth = '90%';
          cbsize.cbHeight = '70%';
        }
        else {
          cbsize.cbWidth = '90%';
          cbsize.cbHeight = '90%';
        }
        return cbsize;
    }
      
	return false;  
  });                             
})(jQuery); 