<?php
/**
* excel_print.php
*
* 本函数用于将从数据库读取到的数据转为html表格格式
*
* $data为数据库中读取的数据
*
*  返回格式为  <tr><td>***</td>
* 				 <td>***</td>
* 				 <td>***</td>
* 			 </tr>
*/
	function excel_print($data){
		$output = "";
		foreach($data as $id=>$info){
			$td = "";
			foreach($info as $value){
				 $td = $td."<td>".$value."</td>";
			}
		$output =$output."<tr>".$td."</tr>";
		}
		return $output;
	}
?>