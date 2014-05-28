<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel=stylesheet type=text/css href=css.css />
<title>index</title>
</head>
<body>

<div id="left">
<a href="login.html">登陆</a>|<a href="register.html">注册</a>

<form class="link">
<li>首页</li>
<li><a href="html5.php">HTML5</a></li>
<li><a href="css.php">CSS</a></li>
<li><a href="javascript.php">JavaScript</a></li>
</form>
</div>

<div id="right">
<form class="first">
Web程序设计<br />
<hr />
</form>

<form id="second">
<h3>课程目标:<br /></h3>
学习web程序设计的主要技术:HTML & CSS,
Javascript,
服务器端编程框架(PHP),
数据库基础,
AJAX基础,
web安全基础<br />
学习web技术中涉及的概念和理论

<h3>web浏览器:<br /></h3>
从互联网上获取资源并显示它们<br />
第一个浏览器：WorldWideWeb 1990<br />
Firefox,IE,Chrome,Safari,Opera,Lynx,Mosaic,Konqueror
浏览器标准虽然存在，但基本上没有任何一个浏览器完全遵守，尤其是IE<br />
兼容性检查： http://www.caniuse.com

<h3>World Wide Web (WWW):<br /></h3>
Tim Berners Lee，1990年12月25日，他和Robert Caililiau在CERN成功通过Internet实现了HTTP代理和服务器的第一次通讯<br />
一个由许多互相连接的超文本组成的系统，通过Internet访问。在这个系统中，每个资源都用一个"统一资源描述符"（URI）标识。这些资源通过超文本传输协议（HTTP）传输。

<h3>Uniform Resource Locator (URL):<br /></h3>
用来定位互联网上一个特定资源的标识符
格式'<scheme>:<scheme-specific-address><scheme> = http,file,ftp,https'<br />
例子：<br />
http://bjtu.edu.cn/index.htm<br />
https://github.com/bjtu-iac/web-programming
</form>
<?php
	if($_SESSION['Username']!="")
	?>
    {   <a href="logout.php">logout</a>
    }

</div>


</body>
</html>