<?php
/* ============================================================
	Remove article/post date after X days.
	Useful for websites where the contents are 'timeless' and
	you don't want users to leave due to 'old' content - while
	still making use of the 'freshness factor' on newly created
	content
	
	INSTALLATION:
	1. Replace current date/time-snippet with the following script
	2. Make sure to change the scripts settings (number of days and date format) according to your wishes.
	
=============================================================== */

	$daysold = (current_time(timestamp) - get_the_time('U') - (get_settings('gmt_offset')))/(24*60*60);

	if ($daysold < 30 ) { // Un-echo after X days (here: 30 days)
		echo get_the_time('d/m Y'); // Adjust date output settings according to PHP date() http://dk1.php.net/manual/en/function.date.php
	}
?>
