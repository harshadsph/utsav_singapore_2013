 <?php/** * @file views-view-unformatted-block.tpl.php * Default simple view template to display a list of rows. * * @ingroup views_templates */ $event_date 				= 0; $no_of_rows 				= 0; $no_of_seats_in_one_row 	= 0; $first_seperator			= 0; $second_seperator			= 0;  foreach ($rows as $id => $row):		$event_date 				= $view->result[$id]->field_field_event_date;	$no_of_rows					= $view->result[$id]->field_field_total_number_of_rows_in_se[0]['raw']['value'];	$no_of_seats_in_one_row 	= $view->result[$id]->field_field_total_number_of_seats_in_o[0]['raw']['value'];	 endforeach;?> <table class="booking-table">	<tr>		<td colspan="<?php echo $no_of_seats_in_one_row; ?>">SCREEN</td>	</tr>	<?php for($i = 1; $i <= $no_of_rows; $i++) { ?>		<tr>			<?php for($j = 1; $j <= $no_of_seats_in_one_row; $j++) { ?>				<td onclick="doBooking('<?php echo $i; ?>','<?php echo $j; ?>')">&nbsp;</td>							<?php } ?>			</tr>	<?php } ?>	</table>