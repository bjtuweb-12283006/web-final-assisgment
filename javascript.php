<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel=stylesheet type=text/css href=css.css />
<title>无标题文档</title>
</head>

<body>
<div id="left">
<a href="login.html">登陆</a>|<a href="register.html">注册</a>

<form class="link">
<li><a href="index.php">首页</a></li>
<li><a href="html5.php">HTML5</a></li>
<li><a href="css.php">CSS</a></li>
<li>JavaScript</li>
</form>
</div>

<div id="right">
<form class="first">
Javascript<br />
<hr />
</form>
<?php
	if($_SESSION['Username']!=""){
?>

<form id="second">
<h3>客户端脚本:<br /></h3>
本节课之前，我们学习的都是被动显示内容(HTML/CSS)。<br />
除此之外，我们还可以从服务器端下载程序并在客户端运行。这些客户端运行的程序叫做浏览器脚本。<br />
JavaScript / Jscript / ECMAScript<br />
VBScript<br />
TCL<br />

<h3>ECMAScript:<br /></h3>
是标准化的脚本程序设计语言。<br />
只是规定了标准，并没有完成的实现。<br />
Javascript是由Netscape和Sun公司引入的。<br />
Jscript是微软公司引入的（IE3），但是跟Javascript的实现有差异。<br />
除此之外还有其他实现。基本上每个浏览器有每个浏览器的实现。<br />


<h3>JavaScript:<br /></h3>
用于制作可交互的网页:
在静态页面中动态插入元素,
处理各种浏览器事件,
获取用户计算机信息,
在浏览器端实现各种计算<br />
除了名字和语法上有点相似，基本上跟Java没有任何关系。
Java和Javascript的关系，相当于雷锋和雷峰塔的关系<br />


<h3>JavaScript vs. Java:<br /></h3>
Javascript是解释执行，而Java是编译并解释<br />
Javascript是动态类型语言，Java是静态类型语言<br />
Javascript的语法和规则更加灵活:
变量在使用之前不需要声明,
错误处理机制没有严格规定<br />
Javascript的关键结构是函数，而Java是类<br />

<h3>JavaScript 安全:<br /></h3> 
语言/API限制:Javascript语言不允许访问本地文件系统,不支持原生网络访问。<br />
网络访问受限于:读取某个URL,发送HTML表单
:web servers, CGI scripts, e-mail addresses<br />
'同源策略':只能读取来自于同一个网络位置（协议、主机、端口）的文档和窗口信息<br />
隐私限制:不能读取用户访问历史,不能显示或隐藏浏览器的菜单栏,状态栏和滚动条,不能关闭非本窗口打开的窗口

<a href="logout.php">logout</a>

<?php } else { ?>
<?php } ?>


</form>
</div>
</body>
</html>