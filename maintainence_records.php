<?php
	require 'database.php';
	$lastid=$database->insert("maintenance_records", [
    "device_id" => $_POST["device_id"],
    "worker_id" => $_POST["worker_id"],
    "date" => $_POST["date"],
    "result"=> $_POST["result"],
    "remarks"=> $_POST["remarks"]
]);
if ($lastid>1)
{
	echo "<h1>输入成功！</h1>";
	$profile = $database->get("maintenance_records",[
	"device_id","worker_id","date","result","remarks"],
	["id"=>$lastid]);
	echo "<p>输入的数据为：<br/><p>";
	echo "设备编号：$profile[device_id]<br/>";
	echo "检修人：$profile[worker_id]<br/>";
	echo "日期：$profile[date]<br/>";
	echo "维修结果：$profile[result]<br/>";
	echo "备注为：$profile[remarks]<br/>";
}
else echo "<h1>输入有误。请检查后重新输入。</h1>";

echo "<h1>5秒后自动跳转...或<a href = 'index.html'>直接跳转</a></h1>";
echo "<meta http-equiv = 'refresh' content = '5;url=index.html' />";
?>