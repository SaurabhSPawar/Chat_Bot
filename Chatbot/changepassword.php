<!DOCTYPE html>
<html>
<head>
  <title>ChatBot FAQ Change Password</title>
  <style>
/*{
  border:2px solid black;
}*/
body{
  margin:0;
  padding:0;
}
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
  min-height:230px;
  padding:80px 40px;
background-color: rgba(0,0,0,0.6);
border: 1px solid #dcdcdc;
/*rgba(0,0,0,0.6)*/
}
</style>
<link rel="stylesheet" href="main.css">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="a">
    <div class="dropdown" ><i class="fa  fa-bars fa-3x" ></i></div>
<div class="dropdowndiv">
  <ul class="dropdownlist">
    <li><a href="http://localhost/Chatbot/Querylist.php">user query list</a></li>
    <li><a href="http://localhost/Chatbot/addnewquery.php">Insert new query</a></li>
    <li><a href="http://localhost/Chatbot/viewallquery.php">View All Query</a></il>
    <li><a href="http://localhost/Chatbot/changepassword.php">Change Password</a></li>
    <li><a href="http://localhost/Chatbot/Include/logout.php">Log Out</a></li>
  </ul>
</div>
<form method="post" class="contact-form"> 
<?php  include('Include/changepass.php')?>
<img src="robo2.jpg" style="position:absolute;border-radius: 50px; width:100px;height:100px ;margin-top: -135px;margin-left: 36%; border: 2px solid #dcdcdc;" class="title_image">
<div class="bottom_inputtype"><h4><center>Change Password</center></h4></div>
<?php if(!empty($user_note)) { echo "<p style='color:red;'>".$user_note."</p>"; } ?>
<!-- login DIV -->
<div class="New_Answer_div" >
 <input type="text" name="pass1" class="user_id" placeholder="New Password"> <i class="fa fa-key fa-2x user_id_fa"></i>
</div>
 <div class="New_Answer_div">
 <input type="text" name="pass2" class="user_id"placeholder="Confirm Password"> 
    <i class="fa fa-key fa-2x" style="border: 0px solid black;color:white;background-color: transparent;margin-left: 10px;"></i></div>
<!-- <button style="background-color: transparent;color: white;padding:10px 10px 10px 10px;margin-left: 165px ;margin-top :20px;border: 0px solid black;"><i class="fa fa-sign-in fa-2x"></i></button> -->
<button type="submit" name="submit" class="submit_changepassword" ><i class="fa fa-sign-in fa-2x"></i></button>
</form>
<script src="jq.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
$('.dropdowndiv').hide();
$('.dropdown').click(function(){
$('.dropdowndiv').show();
});
 $(document).mouseup(function(e){
var container =$('.dropdowndiv');
if(!container.is(e.target)&&container.has(e.target).length==0)
{
container.hide();
  }
  });
    });
  
 

</script></body>
</html>