<!DOCTYPE html>
<html>
<head>
  <title>ChatBot FAQ Add New Query</title>
  <style>
/**{
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
  min-height:390px;
  padding:60px 60px;
background-color: rgba(0,0,0,0.6);
border: 1px solid #dcdcdc;
/*rgba(0,0,0,0.6)*/
}

</style>
<link href="main.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>
<body class="a">
  <?php include('Include/newquery.php'); ?>
    <div class="dropdown" ><i class="fa  fa-bars fa-3x"></i></div>
<div class="dropdowndiv">
  <ul class="dropdownlist">
    <li><a href="http://localhost/Chatbot/Querylist.php">User query list</a></li>
    <li><a href="http://localhost/Chatbot/addnewquery.php">Insert new query</a></li>
    <li><a href="http://localhost/Chatbot/viewallquery.php">View All Query</a></li>
    <li><a href="http://localhost/Chatbot/changepassword.php">Change Password</a></li>
    <li><a href="http://localhost/Chatbot/Include/logout.php">Log Out</a></li>
  </ul>
</div>  
<form method="POST"  class="contact-form"> 
<img src="robo2.jpg"  style="border-radius: 50px; width:100px;height:100px ;margin-top: -160px;margin-left: 39%; border: 2px solid #dcdcdc;">
<?php if(!empty($user_note)) { echo "<p style='color:red;'>".$user_note."</p>"; } ?>
<div class="add_question_div">
           <input type="text" name="new_question" class="New_Question new_question" placeholder="Enter Question">
</div>
<!-- login DIV -->
<div class="New_Answer_div">
 <input class="New_Answer new_answer" type="text" name="new_answer" placeholder="Enter Answer">
 </div>

<button type="submit" name="submit" class="New_Query_Submit" style="margin-top: 50px;"> Set Query </button>

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
  
 

</script>
</body>
</html>