<?php
	$fp = fopen('../emails-for-closed-beta.txt', 'a');

	if ($fp == false) {
		header('HTTP/1.1 500 Internal Server Error');
		die("Could not open file for writing.");
	}

	fputcsv($fp, array_values($_POST));
	fclose($fp);
?>
Thanks, you're awesome! You'll hear from us as soon as we have something to show. Yours,

Karo, Florian and the rest of the gang.

