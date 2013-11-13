(function ($) {
	// Place your code here.
	Drupal.behaviors.booking_event = {
		attach: function(context) {
			$("table.booking-table tr:nth-child(2)").find('td:nth-child(3)').after("<td rowspan='5'>&nbsp;</td>");	
			$("table.booking-table tr:nth-child(2)").find('td:nth-child(18)').after("<td rowspan='5'>&nbsp;</td>");	
			$("table.booking-table tr:first").find('td').attr('colspan',22);
		}	
		
	};
	
})(jQuery);

function doBooking(row, col){
	alert(row);
	alert(col);
}