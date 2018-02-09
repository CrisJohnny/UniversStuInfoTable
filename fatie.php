<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form action="jiance4.php?name=<?php echo $_GET['name']; ?>" method="post">
<h1>发帖</h1> <h3 onClick="window.parent.iframe1('guanli.php?name=<?php echo $_GET['name']; ?>')" style="cursor:pointer;">帖子管理</h3>
<hr>
<h5>标题:</h5><input type="text" name="bt"><br>
<h5>类型:</h5><select name="lx">
<option value="学习">学习</option>
<option value="职业">职业</option>
<option value="生活">生活</option>
</select><br>
<h5>发表内容:</h5>
<textarea name="textarea">
</textarea>
<hr style="margin-top:50px;">
<button type="submit">提交</button>

</form>
</body>
</html>
<style>
h1,h5,hr,select{
	color:#fff;
	font-family:"微软雅黑";
	
}
input,select,option,textarea{
	border:0;
	background:rgba(55,55,55,0.5);
	overflow: hidden; 
	color:rgba(255,255,255,0.5);
	font-family:"微软雅黑";
	font-size:20px;
	box-shadow:0px 0px 10px #fff;
	margin-top:20px;
	}
textarea{
	width:380px;
	height:100px;
}
button{
	width:70px;
	text-align:center;
	height:30px;
	font-size:20px;
	border:0;
	background:transparent;
	color:#555;
	box-shadow:0px 0px 5px #555;
	cursor:pointer;
	float:right;
	margin-top:30px;
}
button:hover{
	color:#fff;
}
</style>