<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$pwd=$password;
	if($username=="请输入用户名" || $password=="*****"){
		header("Location:login.php?error=2");
              exit();
	}else if(strlen($username)>4 || strlen($password)<=6){
		header("Location:login.php?error=3");
              exit();
	}
		
	
       $conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("ddxx",$conn) or die(mysql_error());
       
       //发送sql语句,验证
       $sql="select password from user where name='".$username."'";
       $res=mysql_query($sql,$conn);

       if($row=mysql_fetch_assoc($res)){
           //2.取出数据库密码
		   $a1=$row['password'];
           if($a1==$pwd){
               //说明合法
              header("Location:index.php?name=$username");
               exit();
          }}
		  else{
			  header("Location:login.php?error=1");
              exit();
		  }
		  //关闭资源
           mysql_free_result($res);
           mysql_close($conn);

		   
	
	
?>