<?php
// We shall assume that you have a array called $send_date with values in the format YYYY-MM-DD (MySQL Date Format).
// These values will be the values in the date column, and this script will send the email 3 days before those dates.
$today = date ( "U" );
// Work out, in seconds, the amount of time beforehand you would like to send the email.
$warning = 60 * 60 * 24 * 3;
foreach ( $send_date as $timestamp ) {
	$sd = strtotime ( $timestamp );
	// If $sd is not an integer, it is not a valid timestamp. Move onto the next.
	if (! is_int ( $timestamp ))
		continue;
	$diff = $timestamp - $today;
	if ($diff > 0 && $diff <= $warning) {
		$email = 'you@youremail.com';
		$subject = "PRODUCTS OUT OF STOCK";
		$message = 'One or more products are out of stock:\n\n';
		while ( $row = $result->fetch_assoc () ) {
			$message .= "{$row['part_no']}\n";
		}
		if (mail ( $email, $subject, $message )) {
			// mail successfully sent
		} else {
			// mail unsuccessful
		}
	}
}