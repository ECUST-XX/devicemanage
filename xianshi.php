<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width,
		initial-scale=1.0,
		maximum-scale=1.0,
		user-scalable=no">
		<!--
		作者：575969960@qq.com
		时间：2016-10-24
		描述：调整手机端显示
		-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<!--
		作者：575969960@qq.com
		时间：2016-10-24
		描述：引入bootstrap
		-->
		<link rel="stylesheet" type="text/css" href="css/yangshi.css"/>
		<!--
		作者：575969960@qq.com
		时间：2016-10-24
		描述：自己的css
		-->
		<title></title>
	</head>
	<body>

		<h1>查询显示<span class="label label-default">IT部信息系统</span></h1>
		<div id="xuxian1"></div>
		<div id="xuxian2"></div>

		<button type="button" class="btn btn-danger btn-block disabled">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<th>设备编号</th>
					<th>日期</th>
					<th>开机</th>
					<th>系统正常运行</th>
					<th>开机状态</th>
					<th>检修人</th>
					<th>备注</th>
				</thead>
				<tbody>
					<tr>
						<td>蛤蛤</td>
						<td>wwwwwwwwww</td>
						<td>wwwwwwwwww</td>
						<td>wwwwwwwwww</td>
						<td>wwwwwwwwww</td>
						<td>wwwwwwwwww</td>
						<td>wwwwwwwwww</td>
					</tr>
				</tbody>
			</table>
		</div>
		</button>

		<form role="form" class="form-inline" method="post" action="xianshi.php">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="id输入">
				<button type="button" class="btn btn-primary btn-group-lg">
				搜索
				</button>
			</div>
		</form>
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
]
);//--------------登陆SQL---------------



		?>
	</body>
</html>

