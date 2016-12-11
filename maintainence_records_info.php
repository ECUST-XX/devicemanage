<?php
	require 'database.php';
	require 'excel_print.php';
	
	$device_info = $database->select("maintenance_records",[
	"device_id","date","result","worker_id","remarks"],[
	"id[>]" => 1
	]);
	
	print_r( excel_print($device_info));
?>