<?php
	require  'medoo.php';
	$database = new medoo([
    // 必须配置项
    'database_type' => 'mysql',
    'database_name' => 'Device_Information',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'ljj13673460778',
    'charset' => 'utf8',
 
    // 可选参数
    //'port' => 3306,
	]);
	
	$device_info = $database->select("device",[
	"device_id","school_id","place","name","cpu","memory","disk","status","remarks"],[
	"id[>]" => 1
	]);
	$output = "";
	foreach($device_info as $id=>$info){
		$td = "";
		foreach($info as $value){
			 $td = $td."<td>".$value."</td>";
		}
		
		$output =$output."<tr>".$td."</tr>";
	}
	print_r( $output);
?>