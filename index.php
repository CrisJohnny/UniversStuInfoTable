

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>大学生信息交流平台——首页</title>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.7.2.custom.css" type="text/javascript"></script>
<script src="js/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>
</head>
<script>
	$(function(){ 
          $("#x_x").draggable({ containment: '#kk', scroll: false });//容器拖动 
		  $("#s_h").draggable({ containment: '#kk', scroll: false });//容器拖动  
		  $("#z_y").draggable({ containment: '#kk', scroll: false });//容器拖动 
		  $("#bg").draggable({ containment: '#kk', scroll: false });//容器拖动
		  $("#lb").draggable({ containment: '#kk', scroll: false });//容器拖动                
  	})
</script>
<style>
*{
	margin:0 auto;
	padding:0;
	font-family:"微软雅黑";
}
body{
	
	-webkit-animation:50s yd linear alternate infinite;
	-moz-animation:50s yd linear alternate infinite;
	-ms-animation:50s yd linear alternate infinite;
	-o-animation:50s yd linear alternate infinite;
	background-position:0px 0px;
	background-image:url(img/xk.png);

}
@keyframes yd{
	 5%{ background-position:-50px -0px; }
	10%{ background-position:-100px -50px; }
	15%{ background-position:-150px -100px; }
	20%{ background-position:-100px -150px; }
	25%{ background-position:-50px -200px; }
	30%{ background-position:-100px -200px; }
	35%{ background-position:-150px -150px; }
	40%{ background-position:-150px -100px; }
	45%{ background-position:-100px -150px; }
	50%{ background-position:-200px -100px; }
	55%{ background-position:-150px -50px; }
	60%{ background-position:-100px -0px; }
	65%{ background-position:-50px -50px; }
	70%{ background-position:-0px -100px; }
	75%{ background-position:-50px -150px; }
	80%{ background-position:-100px -200px; }
	85%{ background-position:-150px -150px; }
	90%{ background-position:-100px -100px; }
	95%{ background-position:-50px -50px; }
   100%{ background-position:-0px -0px; }
	
}

#kk{
	float:left;
	width:1365px;
	height:649px;
}



#d_h{
	position:absolute;
	float:left;
	width:75px;
	height:658px;

	opacity:0.6;
	margin-top:-47px;
	/*margin-left:1265px;*/
}

#d_h tr{
	height:50px;
}

#d_h td{
	text-align:center;
	width:75px;
	font-weight:bold;
	color:rgba(22,22,22,0.5);
	border-radius:100px;
	border:3px solid rgba(22,22,22,0.5);
	cursor:pointer;
}



#x_x,#s_h,#z_y{
	float:left;
	position:absolute;
	width:250px;
	height:250px;
	background-color:rgba(153,153,153,0.5);
	border-top-left-radius:50px;
	border-top-right-radius:50px;
	cursor:move;

}
#x_x_1,#s_h_1,#z_y_1{
	width:250px;
	height:50px;
	background-color:#333;
	opacity:0.8;
	color:#fff;
	font-size:30px;
	text-align:center;
	border-top-left-radius:50px;
	border-top-right-radius:50px;
}
#x_x{
	margin-left:200px;
	margin-top:100px;
}
#s_h{
	margin-left:450px;
	margin-top:100px;
}
#z_y{	margin-left:700px;
	margin-top:100px;
}

iframe{
	width:246px;
	height:205px;
}

span{
	font-size:10px;
	text-decoration:none;
	cursor:pointer;
	color:#333;
}
span:hover{
	color:#fff;
}

#xm{
	animation:1s bs linear alternate infinite;
}
#tc{
	animation:1s bs linear alternate infinite;
	animation-delay:0.1s;
}
#xx{
	animation:1s bs linear alternate infinite;
	animation-delay:0.2s;
}
#sh{
	animation:1s bs linear alternate infinite;
	animation-delay:0.3s;
}
#zy{
	animation:1s bs linear alternate infinite;
	animation-delay:0.4s;
}
#bj{
	animation:1s bs linear alternate infinite;
	animation-delay:0.5s;
}
#yy{
	animation:1s bs linear alternate infinite;
	animation-delay:0.6s;
}
#dx{
	animation:1s bs linear alternate infinite;
	animation-delay:0.7s;
}
@keyframes bs{
	50%{ background-color:rgba(153,153,153,1);}
	100%{ background-color:rgba(153,153,153,0.5);}
}


	
</style>

<body id="b">

<div id="kk">

    <div id="x_x">
    	<div id="x_x_1">

        学习

        	<span onclick="xs('x_x')">X</span>
        </div>
        <iframe frameborder="0" src="xx.php?name=<?php echo $_GET['name']; ?>">
        </iframe>
        
    </div>
    
    <div id="s_h">
    	<div id="s_h_1">
        生活
        	<span onclick="xs('s_h')">X</span>
        </div>
        <iframe frameborder="0" src="sh.php?name=<?php echo $_GET['name']; ?>">
        </iframe>
    </div>
    
    <div id="z_y">
    	<div id="z_y_1">
        职业
        	<span onclick="xs('z_y')">X</span>
        </div>
        <iframe frameborder="0" src="zy.php?name=<?php echo $_GET['name']; ?>">
        </iframe>
    </div>
	
</div>
<script>
	function xs(a){
		var a=document.getElementById(a);
		if(a.style.display=="block"){
			a.style.display="none";
		}else{
			a.style.display="block";
		}
	}
</script>
	<table id="d_h" cellpadding="0" cellspacing="10">
    	<tr>
        	<td id="xm"><?php echo $_GET['name']; ?></td>
        </tr>
        
        <tr>
        	<td id="tc"><a href="login.php">退出</a></td>
        </tr>
        
        <tr>
        	<td id="xx" onClick="xs('x_x')">学习</td>
        </tr>
        
        <tr>
        	<td id="sh" onClick="xs('s_h')">生活</td>
        </tr>
        
        <tr>
        	<td id="zy" onClick="xs('z_y')">职业</td>
        </tr>
        
        <tr>
        	<td id="bj" onClick="xs('bg')">背景</td>
        </tr>
        
        <tr>
        	<td id="yy" onClick="xs('lb')">音乐</td>
        </tr>
        
        <br><br>
        <tr>
        	<td id="dx" colspan="4" onClick="iframe1('fatie.php?name=<?php echo $_GET['name']; ?>')"><br>大学<br><br>信息<br><br>交流<br><br>平台<br><br></td>
        </tr>
        
    </table>
    
    <table id="bg" cellpadding="0" cellspacing="0">
    <tr>
    	<td id="s1"><span onclick="xs('bg')">X</span></td>
    </tr>
			<?php
			$conn = mysql_connect("localhost","root","root");
       		if(!$conn){
           		die("连接失败".mysql_error());
       		}
        
       		mysql_query("set names utf8",$conn) or die(mysql_error());
       		mysql_select_db("ddxx",$conn) or die(mysql_error());
       
       		//发送sql语句,验证
       		$sql="select * from bj";
       		$res=mysql_query($sql,$conn);
			
		   	while($row=mysql_fetch_assoc($res)){
			   echo "<tr style='cursor:pointer; width:200px;'><td href='#' onClick='bj(this.id)' id=".$row['lj'].">{$row['bt']}</td></tr>";
		   	}
			
			
			?>
            <script>
            function bj(d){
	document.getElementById('b').style.cssText="background-image:"+d+";";
	
}
</script>
     <tr>
    	<td id="s2"></td>
    </tr>
    </table>
    
    <style>
	#bg{
		position:absolute;
		float:left;
		margin-top:250px;
		margin-left:65px;
		width:65px;
		height:160px;
		background-color:rgba(55,55,55,0.5);
		border-bottom-left-radius:20px;
		border-bottom-right-radius:20px;
		border-top-left-radius:50px;
		border-top-right-radius:50px;
		text-align:center;
		display:none;
		cursor:move;
	}
	#s1{
		background-color:#666;
		height:10px;
		border-top-right-radius:50px;
		border-top-left-radius:50px;
	}
	#s2{
		background-color:#666;
		height:10px;
		border-bottom-left-radius:50px;
		border-bottom-right-radius:50px;
	}
	a:link,a:visited{
		text-decoration:none;
		color:rgba(66,66,66,0.5);
		
	}

	#bg tr:hover{
		animation:1s bs2 linear alternate;
		animation-fill-mode:forwards;
	}

	#bg tr{
		background-color:rgba(55,55,55,0);
		color:rgba(66,66,66,0.5);
	}
	@keyframes bs2{
		100%{ color:#fff; background-color:rgba(55,55,55,1);}
	}
	</style>
    <audio id="player">
				<source src="song/qcjnc.mp3" type="audio/mp3">
	</audio>
        <table id="lb" cellpadding="0" cellspacing="0">
    <tr>
    	<td id="s11"><span>
        <div id="ks" onClick="bf(this.id)">
        </div>
        <div id="zt" onClick="bf(this.id)">
        </div>
        </span></td>
    </tr>
			<?php
			$conn = mysql_connect("localhost","root","root");
       		if(!$conn){
           		die("连接失败".mysql_error());
       		}
        
       		mysql_query("set names utf8",$conn) or die(mysql_error());
       		mysql_select_db("ddxx",$conn) or die(mysql_error());
       
       		//发送sql语句,验证
       		$sql="select * from yy";
       		$res=mysql_query($sql,$conn);
			
		   	while($row=mysql_fetch_assoc($res)){
				$gs=$row['gs'];
				$gm=$row['gm'];
				$lj=$row['lj'];
				$i="$gs--$gm";
				
			   echo "
			   <tr style='cursor:pointer; width:200px;'>
			   <td href='#' onClick='bgm(this.id)' id='".$lj."'>
						{$i} 
					</td>
				</tr>";
		   	}
			
			
			?>

     <tr>
    	<td id="s22"></td>
    </tr>
    </table>
        
    </div>
    <script>
	function bgm(d){
	var a=document.getElementById('player');
	var b=document.getElementById('zt');
	var c=document.getElementById('ks');
	a.src=d;
	a.play();
	b.style.display="block";
	c.style.display="none";
	}
	
	function bf(a){
		var i=document.getElementById(a);
		var b=document.getElementById('zt');
		var c=document.getElementById('ks');
		var d=document.getElementById('player');
		if(a=='zt'){
			b.style.display="none";
			c.style.display="block";
			d.pause();
		}else{
			b.style.display="block";
			c.style.display="none";
			d.play();
		}
	}
			
	</script>
    <style>
	#lb{
		position:absolute;
		float:left;
		margin-top:150px;
		margin-left:65px;
		width:180px;
		height:180px;
		background-color:rgba(55,55,55,0.5);
		border-radius:50px;
		text-align:center;
		cursor:move;
		display:none;
	}
	#lb td{
		color:rgba(55,55,55,0.5);
		width:180px;
	}
	#lb tr:hover,#lb td:hover{
		background-color:#666;
		color:#fff;
	}
	audio{
		position:absolute;
	}
	#ks{
		position:absolute;
		margin-left:45px;
		margin-top:0px;
		width:0px;
		border-left:10px solid transparent;
		border-right:10px solid transparent;
		border-bottom:20px solid white;
		opacity:1;
		transform:rotate(90deg);
		cursor:pointer;
		  }
	#zt{
		position:absolute;
		margin-left:45px;
		margin-top:0px;
		width:5px;
		height:20px;
		border-left:5px solid #fff;
		border-right:5px solid #fff;
		cursor:pointer;
		display:none;
	}
	#s11{
		background-color:#666;
		height:50px;
		border-top-right-radius:50px;
		border-top-left-radius:50px;
	}
	#s22{
		background-color:#666;
		height:50px;
		border-bottom-left-radius:50px;
		border-bottom-right-radius:50px;
	}
	#d1{
		margin-left:70px;
		margin-top:10px;
	}
	#m1{
		width:100px;
	}
		
	</style>
    <div id="bb">
    <div id="x" onClick="iframe()">x</div>
    <iframe id="lyb" frameborder="0">
    </iframe>
    </div>
    <script>
	function iframe(){
		document.getElementById('bb').style.display="none";
	}
    function iframe1(j){
		document.getElementById('bb').style.display="block";
		document.getElementById('lyb').src =j;
	}
	</script>
    
    <style>
	#bb{
		margin-top:-50px;
		margin-left:965px;
		position:absolute;
		width:400px;
		height:665.5px;
		background:rgba(22,22,22,0.5);
		display:none;
	}
	#x{
		position:absolute;
		margin-left:350px;
		margin-top:30px;
		font-size:50px;
		transform:rotate(30deg);
		color:rgba(100,100,100,0.9);
		cursor:pointer;
		transition:1.5s color;
	}
	#x:hover{
		color:#fff;
	}
	#lyb{
		width:396px;
		height:657.5px;
	}
		
	</style>
</body>
</html>


    

