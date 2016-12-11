<?php
	require 'database.php';
	require 'excel_print.php';
	
	$device_info = $database->select("device",[
	"device_id","school_id","place","name","cpu","memory","disk","status","remarks"],[
	"id[>]" => 1
	]);
	
	print_r( excel_print($device_info));
?>