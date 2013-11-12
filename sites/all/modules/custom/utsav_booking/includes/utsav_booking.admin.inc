<?php

/**
 * @file
 * Audit trail related administration pages.
 */

/**
 * Audit trail configuration form.
 */
function utsav_booking_admin_configure($form, $form_state) {

		$form = array();
		
		$form['event_date'] = array(
			'#type' => 'date_popup',
			'#title' => t('Event Date'), 
			'#date_format' => 'd-m-Y', 
			'#description' => "Please enter event date.", 
			'#tree' => TRUE,
		);
		
		$form['no_of_row'] = array(
			'#type' => 'textfield',
			'#title' => t('Total number of rows in seating arrangment'),
			'#description' => t('Total number of rows in seating arrangment.'),
			'#default_value' => variable_get('no_of_row', '50'),		
		  );
		  
		 $form['no_of_seats_in_one_row'] = array(
			'#type' => 'textfield',
			'#title' => t('Total number of seats in one row'),
			'#description' => t('Total number of seats in one row in seating arrangment.'),
			'#default_value' => variable_get('no_of_seats_in_one_row', '50'),		
		  );
	  
		$form['booking_amount_category_1'] = array(
			'#type' => 'fieldset',
			'#title' => t('Booking Amount Category 1')			
		);
		
		$form['booking_amount_category_1']['booking_amount_category_1_from'] = array(
			'#type' => 'textfield',
			'#title' => t('From'),
			'#description' => t('Starting number of seat.'),
			'#default_value' => variable_get('booking_amount_category_1_from', '1'),
			'#size' => 10,
		);
		
		$form['booking_amount_category_1']['booking_amount_category_1_to'] = array(
			'#type' => 'textfield',
			'#title' => t('To'),
			'#description' => t('Ending number of seat.'),
			'#default_value' => variable_get('booking_amount_category_1_to', '1'),	
			'#size' => 10,
		);
		
		$form['booking_amount_category_1']['booking_amount_category_1_amount'] = array(
			'#type' => 'textfield',
			'#title' => t('Booking amount per seat(in S$)'),
			'#description' => t('Ending number of seat.'),
			'#default_value' => variable_get('booking_amount_category_1_amount', '100'),				
			'#size' => 10,
		);
		
		$form['booking_amount_category_2'] = array(
			'#type' => 'fieldset',
			'#title' => t('Booking Amount Category 2')			
		);
		
		$form['booking_amount_category_2']['booking_amount_category_2_from'] = array(
			'#type' => 'textfield',
			'#title' => t('From'),
			'#description' => t('Starting number of seat.'),
			'#default_value' => variable_get('booking_amount_category_2_from', '1'),
			'#size' => 10,
		);
		
		$form['booking_amount_category_2']['booking_amount_category_2_to'] = array(
			'#type' => 'textfield',
			'#title' => t('To'),
			'#description' => t('Ending number of seat.'),
			'#default_value' => variable_get('booking_amount_category_2_to', '1'),	
			'#size' => 10,
		);
		
		$form['booking_amount_category_2']['booking_amount_category_2_amount'] = array(
			'#type' => 'textfield',
			'#title' => t('Booking amount per seat(in S$)'),
			'#description' => t('Ending number of seat.'),
			'#default_value' => variable_get('booking_amount_category_2_amount', '50'),				
			'#size' => 10,
		);
		
		$form['booking_amount_category_3'] = array(
			'#type' => 'fieldset',
			'#title' => t('Booking Amount Category 3')			
		);
		
		$form['booking_amount_category_3']['booking_amount_category_3_from'] = array(
			'#type' => 'textfield',
			'#title' => t('From'),
			'#description' => t('Starting number of seat.'),
			'#default_value' => variable_get('booking_amount_category_3_from', '1'),
			'#size' => 10,
		);
		
		$form['booking_amount_category_3']['booking_amount_category_3_to'] = array(
			'#type' => 'textfield',
			'#title' => t('To'),
			'#description' => t('Ending number of seat.'),
			'#default_value' => variable_get('booking_amount_category_3_to', '1'),	
			'#size' => 10,
		);
		
		$form['booking_amount_category_3']['booking_amount_category_3_amount'] = array(
			'#type' => 'textfield',
			'#title' => t('Booking amount per seat(in S$)'),
			'#description' => t('Ending number of seat.'),
			'#default_value' => variable_get('booking_amount_category_2_amount', '25'),				
			'#size' => 10,
		);
		
		
	
	return system_settings_form($form);
}
