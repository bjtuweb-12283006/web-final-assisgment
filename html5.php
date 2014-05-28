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
<li>HTML5</li>
<li><a href="css.php">CSS</a></li>
<li><a href="javascript.php">JavaScript</a></li>
</form>
</div>

<div id="right">
<form class="first">
HTML5<br />
<hr />
</form>

<form id="second">
<h3>HTML简介:<br /></h3>
超文本标记语言<br />
不是编程语言，而是标记语言<br />
HTML标签是由尖括号引用的关键词<br />
HTML标签通常是成对出现的，分别叫做开始和结束标签<br />


<h3>HTML 标签:<br /></h3>
标题（heading）:h1一直到h6<br />
段落（paragraph):p: &lt;p&gt;this is a new paragraph.&lt;p/&gt;<br />
链接（hyperlink）:a: &lt;a href=&quot;http://www.bjtu.edu.cn&quot;&gt;bjtu&lt;/a&gt;<br />
图像（image）:img: &lt;img src=&quot;img/title.png&quot;/&gt;<br />
换行: &lt;br/&gt;<br/>
水平线: &lt;hr/&gt;<br />

<h3>HTML块元素:<br /></h3>
body<br />
div<br />
span<br />
p<br />
table<br />
form<br />


<h3>HTML表格:</h3>
&lt;table&gt;&#13;<br />
   &lt;tr&gt;<br />
      &lt;td&gt;row  1, cell 1&lt;/td&gt;<br />
      &lt;td&gt;row  1, cell 2&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
   &lt;tr&gt;<br />
      &lt;td&gt;row  2, cell 1&lt;/td&gt;<br />
      &lt;td&gt;row  2, cell 2&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
&lt;/table&gt;<br />

<h3>HTML列表:</h3>
有序列表 ol<br />
无序列表 ul<br />
列表元素 li<br />

<?php
	if($_SESSION['Username']!="")
	?>
    {   <a href="logout1.php">logout</a>
    }

</form>

</div>
</body>
</html>