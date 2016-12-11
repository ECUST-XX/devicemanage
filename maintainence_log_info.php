<?php
	require 'database.php';
	require 'excel_print.php';
	$device_info = $database->select("maintenance_log",[
	"device_id","date","boot","system","disk_warning","worker_id","remarks"],[
	"id[>]" => 1
	]);
	
	print_r( excel_print($device_info));
?>