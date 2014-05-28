<?php  
 
$conn = @mysql_connect("localhost","root","root123"); 
if (!$conn){  
die("连接数据库失败：" . mysql_error()); 
}  
mysql_select_db("test", $conn); 

  
mysql_query("set character set 'gbk'"); 

  
mysql_query("set names 'gbk'");  
?>  
