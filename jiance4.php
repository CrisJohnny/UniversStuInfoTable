<?php
		$name=$_GET['name'];
		$bt=$_POST['bt'];
		$lx=$_POST['lx'];
		$text=$_POST['textarea'];
       $conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("ddxx",$conn) or die(mysql_error());
	   $sql="select id from user where name='".$name."'";
       $res=mysql_query($sql,$conn);
	   $row=mysql_fetch_assoc($res);	
	   $id=$row['id'];
       
	   $sql="insert into tz (bt,lx,name,id) values ('".$bt."','".$lx."','".$name."',$id)";
	   $res=mysql_query($sql,$conn);
	   $sql="select tz_id from tz where bt='".$bt."'";
	   $res=mysql_query($sql,$conn);
	   $row=mysql_fetch_assoc($res);	
	   $tz_id=$row['tz_id'];
	   $sql="update tznr set nr='".$text."' where tz_id='".$tz_id."' ";
	   $res=mysql_query($sql,$conn);
	   header("Location:$tz_id.php?name=$name&tz_id=$tz_id");

		   
	
	
?>