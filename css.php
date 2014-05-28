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
<li>CSS</li>
<li><a href="javascript.php">JavaScript</a></li>
</form>
</div>



</div>

<div id="right">
<form class="first">
Cascading Style Sheets (CSS)<br />
<hr />
</form>
<?php
	if($_SESSION['Username']!=""){
?>
<form id="second">
<h3>CSS 的优点:<br /></h3>
对显示的精确控制<br />
使得站点维护更加便利<br />
下载速度更快<br />

<h3>CSS 语言:<br /></h3>
stylesheet: ruleset*<br />
  
  ruleset: selector '{' [declaration ';']* '}'<br />
  
  declaration: property ':' expr ['! important']?<br />
  <img src="图片1.jpg" width="287" height="102" /><br />
  
  

<h3>选择器 selector:<br /></h3>
Type 		E<br />
Universal 	*<br />
Grouping	E,G,F<br />
Attribute	[foo="hi"]<br />
ID		#myID or E#myID<br />
Class		.myClass<br />
Pseudo-element	E:pseudo-element<br />
Contextual	Descendent	E F	Child	E > F	Adjacent	E + F
。<br />

<h3>支持的格式化方式:<br /></h3>
Font,
Text,
Background,
Display,
Box,
Positioning,
Animation<br />

<h3>显示属性:<br /></h3>
<img src="图片2.jpg" width="546" height="104" /><br />

values: inline | block | list-item | inline-block | table | inline-table | table-row-group | table-header-group | table-footer-group | table-row | table-column-group | table-column | table-cell | table-caption | none | inherit
<br />
<img src="图片3.jpg" width="682" height="227" /><br />

<h3>定位:<br /></h3>
static:默认定位,块元素从上到下排布,垂直边界重合<br />
relative:最初布局按照static方式进行,块可通过offset属性进行移动,offset属性：top, right, left, bottom<br />
fixed:将块元素定位于相对于浏览器窗口固定的位置,由offset属性确定: top, right, bottom，left,网页滚动时保持不变,对其他块没有任何作用<br />
absolute:相对于第一个非static定位的父元素进行放置,如果没有这样的父元素，则相对于html标签进行定位（即浏览器窗口）<br />
float:通过float属性进行定位,竖直方向与当前块一致,水平方向漂浮到父元素的左侧或右侧,<font color="#FF0000">重要: 必须设置父块元素的宽度</font><br />
clear:clear属性将float元素下面的块推到float元素自身下方<br />

<h3>CSS文件引用 &lt;link&gt;:<br /></h3>
&lt;head&gt; <br />
  &lt;title&gt; …. &lt;/title&gt;<br />
  &lt;link   href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;<br />
&lt;/head&gt; <br />
一个页面可以引用多个css文件<br />
在有冲突的情况下（多个css文件对同一规则进行了定义），最后引用的占优<br />

<a href="logout.php">logout</a>

<?php } else { ?>
<?php } ?>
</form>

</div>
</body>
</html>