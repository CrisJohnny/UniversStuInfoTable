<?php
		$name=$_GET['name'];
		$tz_id=$_GET['tz_id'];
		$text=$_POST['textarea'];
       $conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("ddxx",$conn) or die(mysql_error());
       
       //发送sql语句,验证
       $sql="select id from user where name='".$name."'";
       $res=mysql_query($sql,$conn);

		$row=mysql_fetch_assoc($res);	
 		$id=$row['id'];
		
		$sql="insert into tznr (tz_id,hfid,name,nr) values ($tz_id,$id,'".$name."','".$text."')";
		$res=mysql_query($sql,$conn);
		header("Location:$tz_id.php?name=$name&tz_id=$tz_id");


		   
	
	
?>