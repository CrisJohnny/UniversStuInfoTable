<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$pwd=$password;
	if($username=="请输入用户名" || $password=="*****"){
		header("Location:reg.php?error=2");
              exit();
	}else if(strlen($username)>4 || strlen($password)<=6){
		header("Location:reg.php?error=3");
              exit();
	}
	
       $conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("ddxx",$conn) or die(mysql_error());
       $sql="select name from user";
	   $res=mysql_query($sql,$conn);
	   if($username==mysql_fetch_assoc($res)){
		   header("Location:login.php?error=1");
		   exit();
	   }else{
			   //发送sql语句,验证
       			$sql="insert into user (name,password) values ('".$username."','".$password."')";
       			$res=mysql_query($sql,$conn);
				header("Location:login.php?a1=1",5000);
		  		//关闭资源
           		mysql_free_result($res);
           		mysql_close($conn);
	   }

?>