<?php  
if(!isset($_POST['submit'])){ 
exit('
非法访问
!'); 
}  
$username = $_POST['username']; 
$password = $_POST['password']; 
$email = $_POST['email']; 

  
if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){  
exit('
错误：用户名不符合规定。
<a href="javascript:history.back(-1);">
返回
</a>'); 
}  
if(strlen($password) < 6){  
exit('
错误：密码长度不符合规定。
<a href="javascript:history.back(-1);">
返回
</a>'); 
}  
if(!preg_match('/^w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*$/', $email)){  
exit('
错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>'); 
}  

 
include('conn.php'); 

  
$check_query = mysql_query("select uid from user where username='$username' 
limit 1");  
if(mysql_fetch_array($check_query)){  
echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>'; 
exit; 
}  

$password = MD5($password); 
$regdate = time(); 
$sql = "INSERT INTO  
user(username,password,email,regdate)VALUES('$username','$password','$email', 
$regdate)";  
if(mysql_query($sql,$conn)){  
exit('
用户注册成功！点击此处<a href="login.html">登录</a>'); 
} 
else {  
echo '抱歉！添加数据失败：',mysql_error(),'<br />';  
echo '点击此处<a href="javascript:history.back(-1);">返回</a>重试'; 
} 
?>  
