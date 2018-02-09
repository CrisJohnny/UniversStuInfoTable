<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>大学生信息交流平台——登录</title>
</head>
<script>
	$(function(){ 
          $("#x_x").draggable({ containment: '#kk', scroll: false });//容器拖动  
		  $("#s_h").draggable({ containment: '#kk', scroll: false });//容器拖动  
		  $("#z_y").draggable({ containment: '#kk', scroll: false });//容器拖动                 
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

#dl{
	text-align:center;
}
#bt{
	margin-top:50px;
	font-size:50px;
	color:#fff;
}

hr{
	width:600px;
	height:0px;
	color:#fff;
	background-color:#fff;
	text-decoration:none;
}
input{
	margin-top:70px;
	width:300px;
	font-size:25px;
	border:0;
	background:transparent;
	color:#fff;
}
button{
	margin-top:50px;
	width:70px;
	height:50px;
	background:transparent;
	font-size:25px;
	border:1px solid #fff;
	border-radius:10px;
	color:#fff;
}
#yw{
	margin-top:50px;
	font-size:20px;
	color:#fff;
}
</style>
<body>

	<div id="dl">
    	<div id="bt">大学生信息交流平台</div>
        <div style="margin-top:30px;"><hr></div><br><span style=" font-size:30px; color:#fff;">登录</span>
        <div>
        
        	<form action="jiance.php" method="post">   
                  <input id="i1" type="text" name="username" value="请输入用户名" onFocus="xs('i1')"> 
                  <br><hr style="width:300px;">       
                  <input id="i2" style="margin-top:50px;" type="password" name="password" value="*****" onFocus="xs('i2')">
                  <br><hr style="width:300px;">  
                  <a href="reg.php"><button type="button">注册</button></a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="submit">登录</button><br>
                  <div style=" margin-top:10px;font-size:20px; color:red; width:200px; height:30px;">
                  
							<script>
                            
                                  function xs(a){
                                      var a=document.getElementById(a);
                                          if(a.value=="请输入用户名" || a.value=="*****"){
                                      a.value="";
                                  }}
                            
                            </script>
                            
                            <?php 
                                if(isset($_GET['error'])){
                                    if($_GET['error']==1){
                                        echo "用户名或密码错误";
                                    }else if($_GET['error']==2){
                                        echo "用户名或密码没有输入";
                                    }else if($_GET['error']==3){
                                        echo "用户名长度过长或密码长度过短";
                                    }
                                }
                                
                                if(isset($_GET['a1'])){
                                    if($_GET['a1']==1){
                                        echo "注册成功";
                                    }
                                }
                
                            ?>
                  
                  </div>
                  
            </form>
            <div style="margin-top:20px;"><hr></div>
            
     	</div>
      		<div id="yw">College Students' Information Exchange Platform</div>
    	
	</div>
</body>
</html>
	
