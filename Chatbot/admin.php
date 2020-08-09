<!DOCTYPE html>
<html>
<head>
  <title>ChatBot FAQ Admin Page</title>
  <style>
/**{
  border:2px solid black;
}*/
body{margin:0;padding:0;}
body:before{
  content:'';
  position:fixed;
  width:100vw;
  height:100vh;
 background-image: url(takle.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  -webkit-background-size:cover;
  background-size: cover;
  -moz-filter:blur(10px);
  filter:blur(1px); 
}
.contact-form{
  position:absolute;
  top:55%;
  left:50%;
  -webkit-transform:translate(-50%,-50%);
  -moz-transform:translate(-50%,-50%);
  -o-transform:translate(-50%,-50%);
  transform:translate(-50%,-50%);
  width:500px;
  height:290px;
  padding:80px 40px;
background-color: rgba(0,0,0,0.6);
border: 1px solid #dcdcdc;/*rgba(0,0,0,0.6)*/}
</style>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="main.css" rel="stylesheet">
</head>
<body class="a">
  <?php include('Include/login.php');?>  
<div class="contact-form"> 
<img src="robo2.jpg" class="title_image">
<div class="bottom_inputtype"><h4><center>Admin Sign-in</center></h4></div>
<?php if(!empty($userid_note)) { echo "<p style='color:red;'>".$userid_note."</p>"; } ?>
<?php if(!empty($user_login_note)) { echo "<p style='color:green;'>".$userid_note."</p>"; } ?>
<!-- login DIV -->
<!--  -->
<form method="post" >
<div class="user_id_div">
     <input type="text" name="user_name" class="user_id" placeholder="User Name"> 
     <i class="fa fa-user fa-2x" class="user_id_fa" style="border: 0px solid black;color:white;background-color: transparent;margin-left: 10px;"></i>
</div>

 <div class="password_div">
     <input type="Password" name="user_password" class="user_password" placeholder="Password"> 
     <i class="fa fa-key fa-2x" class="password_fa" style="border: 0px solid black;color:white;background-color: transparent;margin-left: 10px;"></i></div>
<button  type="submit" name="submit" class="submit"><i class="fa fa-sign-in fa-3x"></i></button>
</div>
</form>
</body>
</html>