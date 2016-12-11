<?php
	require 'database.php';
	$lastid=$database->insert("device", [
    "device_id" => $_POST["device_id"],
    "place" => $_POST["place"],
    "name" => $_POST["name"],
    "cpu"=> $_POST["cpu"],
    "memory"=> $_POST["memory"],
    "disk"=> $_POST["disk"],
    "school_id"=> $_POST["school_id"],
    "status"=> $_POST["status"],
    "remarks"=> $_POST["remarks"]
]);
if ($lastid>1)
{
	echo "<h1>输入成功！</h1>";
	$profile = $database->get("device",[
	"device_id","place","name","cpu","memory","disk","school_id","status","remarks"],
	["id"=>$lastid]);
	echo "<p>输入的数据为：<br/><p>";
	echo "设备编号：$profile[device_id]<br/>";
	echo "校级编号：$profile[school_id]<br/>";
	echo "地点：$profile[place]<br/>";
	echo "名称：$profile[name]<br/>";
	echo "cpu：$profile[cpu]<br/>";
	echo "内存：$profile[memory]<br/>";
	echo "硬盘：$profile[disk]<br/>";
	echo "状态：$profile[status]<br/>";
	echo "备注为：$profile[remarks]<br/>";
}
else echo "<h1>输入有误。请检查后重新输入。</h1>"
?>