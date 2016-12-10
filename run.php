<?php
		require 'medoo.php';
		$database = new medoo([
    // 必须配置项
    'database_type' => 'mysql',
    'database_name' => 'Device_Information',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'ljj13673460778',
    'charset' => 'utf8',
    ]);

//	print_r($database->info());
	//变量替换
	$Did = $_POST["device_id"];
	$W = $_POST["worker_id"];
    $D = $_POST["date"];
	$R = $_POST["result"];
	$Rk= $_POST["remarks"];
		
	//输入
	$as = $database->insert("maintenance_records", [
    'device_id'=> $Did,
    'worker_id' => $W,
    'date' => $D,
    'result' => $R,
    'remarks' => $Rk,
]);

//搜索

?>
