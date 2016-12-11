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
	
?>