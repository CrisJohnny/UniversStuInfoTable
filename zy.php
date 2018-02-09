<?php
		$name=$_GET['name'];
       $conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("ddxx",$conn) or die(mysql_error());
       
       //发送sql语句,验证
       $sql="select tz_id,bt,name,rq from tz where lx='职业'";
       $res=mysql_query($sql,$conn);
			
		   while($row=mysql_fetch_assoc($res)){
			  echo "<div id='a1' title=\"发帖人:".$row['name']."
			  发布日期：".$row['rq']."\" onClick=\"window.parent.iframe1('".$row['tz_id'].".php?tz_id=".$row['tz_id']."&name=$name')\">
			  {$row['bt']}</div>";
		   }
           
	
?>
<style>
#a1{
	margin-top:8px;
	width:235px;
	height:35px;
	color:rgba(55,55,55,0.3);
	text-align:center;
	padding-top:15px;
	transition:2s color;
	font-family:"微软雅黑";
	text-decoration:none;
	cursor:pointer;
}
#a1:hover {
	background-color:rgba(55,55,55,0.5);
	color:#fff;
}

</style>