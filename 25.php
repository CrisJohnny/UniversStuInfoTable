<?php	
		
		$tz_id=$_GET['tz_id'];
       $conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("ddxx",$conn) or die(mysql_error());
	   $sql="select bt,rq from tz where tz_id=$tz_id";
	   $res=mysql_query($sql,$conn);
	   while($row=mysql_fetch_assoc($res)){
			echo "<h1>{$row['bt']}</h1>";
			echo "<h5>发布日期:{$row['rq']}</h5>";	    
	   }
	   $sql="select name,rq,nr from tznr where tz_id=$tz_id";
	   $res=mysql_query($sql,$conn);
	   while($row=mysql_fetch_assoc($res)){
		   echo "<div id='tx'><div>{$row['name']}</div></div>";
		   echo "<div id='nr'><div id='nr2'>{$row['nr']}</div><div id='nr3'>{$row['rq']}</div></div>";
		   
	   }
	   
?>

<html>
<head>

</head>

<body>

<div id="ly">
<form id="ll" action="jiance3.php?name=<?php echo $_GET['name']; ?>&tz_id=<?php echo $_GET['tz_id']; ?>" method="post">
<textarea name="textarea">
</textarea>
<button type="submit">提交</button>
<?php 
    			if(isset($_GET['error'])){
        			if($_GET['error']==1){
            			echo "提交不成功";
        			}
    			}

			?>
</form>
</div>
</body>
</html>
<style>
#tx{
	margin-top:10px;
	width:50px;
	height:50px;
	border-radius:25px;
	background:transparent;
	color:#aaa;
	font-size:20px;
	box-shadow:0px 0px 5px #fff;
	text-align:center;
	font-family:"微软雅黑";
}
#tx div{
	margin-top:30px;
	padding-top:10px;
}
#nr2{
	padding-top:10px;
	padding-left:10px;
}
#nr{
	margin-left:60px;
	margin-top:-50px;
	width:300px;
	height:50px;
	background:transparent;
	box-shadow:0px 0px 5px #fff;
	font-family:"微软雅黑";
	color:#ccc;
}
#nr3{
	float:right;
	margin-top:-5px;
	width:160px;
	height:20px;
	color:#555;
}
h1,h5{
	color:#fff;
	font-family:"微软雅黑";
}
#ly{
	position:fixed;
	_position:absolute;
	top:500px;
	height:100px;
	width:380px;
	background:transparent;
	_bottom:auto;
	color:#fff;
	font-family:"微软雅黑";
	_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||600)-(parseInt(this.currentStyle.marginBottom,10)||0)));
	}
textarea{
	width:380px;
	height:100px;
    overflow: hidden; 
	color:#fff;
	font-family:"微软雅黑";
	background:rgba(55,55,55,0.1);
	border-style:none;
	box-shadow:0px 0px 5px #fff;
}
button{
	border:0;
	background:transparent;
	color:#555;
	box-shadow:0px 0px 5px #555;
	cursor:pointer;
}
button:hover{
	color:#fff;
}
</style>
