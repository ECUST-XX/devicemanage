<?php
	require 'database.php';
	$lastid=$database->insert("maintenance_log", [
    "device_id" => $_POST["device_id"],
    "worker_id" => $_POST["worker_id"],
    "boot" => $_POST["boot"],
    "system"=> $_POST["system"],
    "disk_warning"=> $_POST["disk"],
    "date"=> $_POST["date"],
    "remarks"=> $_POST["remarks"]
]);
if ($lastid>1)
{
	echo "<h1>输入成功！</h1>";
	$profile = $database->get("maintenance_log",[
	"device_id","worker_id","boot","system","disk_warning","date","remarks"],
	["id"=>$lastid]);
	echo "<p>输入的数据为：<br/><p>";
	echo "设备编号：$profile[device_id]<br/>";
	echo "日期：$profile[date]<br/>";
	echo "检修人：$profile[worker_id]<br/>";
	echo "开机状态：$profile[boot]<br/>";
	echo "系统状态：$profile[system]<br/>";
	echo "硬盘状态：$profile[disk_warning]<br/>";
	echo "备注为：$profile[remarks]<br/>";
}
else echo "<h1>输入有误。请检查后重新输入。</h1>"
?>