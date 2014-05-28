<?php  
session_start(); 
  
if(!isset($_SESSION['userid'])){ 
header("Location:login.html"); 
exit(); 
} 
  
include('conn.php');  
$userid = $_SESSION['userid'];  
$username = $_SESSION['username'];  
$user_query = mysql_query("select * from user where uid=$userid limit 1"); 
$row = mysql_fetch_array($user_query); 
echo '用户信息：<br />';  
echo '用户ID：',$userid,'<br />'; 
echo '用户名：',$username,'<br />'; 
echo '邮箱：',$row['email'],'<br />';  
echo '注册日期：',date("Y-m-d", $row['regdate']),'<br />'; 
echo '<a href="login.php?action=logout">注销</a>登录<br />'; 
?>  
