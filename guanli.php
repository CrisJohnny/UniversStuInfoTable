<?php
$username=$_GET['name'];

	$conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("ddxx",$conn) or die(mysql_error());
	   
	if(isset($_GET['bt'])){
		$bt=$_GET['bt'];
		$sql="delete  from tz where bt='".$bt."'";
		$res=mysql_query($sql,$conn);
		echo "删除成功";
	}
		
       $sql="select bt from tz where name='".$username."'";
       $res=mysql_query($sql,$conn);
		echo "<table>";
       while($row=mysql_fetch_assoc($res)){
		   echo "<tr><td>{$row['bt']}</td><td onClick=\"window.parent.iframe1('guanli.php?bt=".$row['bt']."&name=$username')\" style='cursor:pointer;'>删除</td></tr>";
		  }
		  echo "<table>";
		 
		 

		   
	
	
?>
<style>
table{
	padding-top:100px;
	margin-left:50px;
	color:#fff;
	font-size:20px;
}
</style>