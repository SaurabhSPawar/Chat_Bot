<!DOCTYPE html>
<html>
<head>
  <title>Query List</title>
  <style>
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
  top:10%;
  left:10%;
  width:75%;
  height:59%;
  padding:80px 40px;
background-color: rgba(0,0,0,0.6);
border: 1px solid #dcdcdc;
/*rgba(0,0,0,0.6)*/
}
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="main.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="a">
  <?php include('Include/solutionlist.php') ?>
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
<div class="contact-form container"> 

<img src="robo2.jpg" style="border-radius: 50px; width:100px;height:100px ;margin-top: -130px;margin-left: 43%; border: 2px solid #dcdcdc;position: absolute;" class="title_image">
<div class="bottom_inputtype"><h4><center>List Of Questions</center></h4></div>
<!-- <div class="questions"><a href="#" class="question_link"><i class="fa fa-close"></i></a>1. first question</div>
<div class="questions"><a href="#" class="question_link"><i class="fa fa-close"></i></a>2. second question</div> -->
<!-- <?php 
$i=0;
while($i<count($result)) { ?>
<div class="questions"><a href="#" class="question_link"><i class="fa fa-close discard"  name="discard"></i></a><p><?php echo $i;?> .&nbsp &nbsp <?php echo $result[$i];  ?></p></div>
<?php 
$i++;
}
?> -->
<form >
<?php
$i=1;
while($row=$sql->fetch_assoc())
  {   ?>

<div class="questions"  name="question_div"   >
 <a class="question_link discard"  href="http://localhost/Chatbot/Include/deleterecord.php?id=<?php echo $row['questionid']; ?>" value="<?php echo $row['questionid']; ?>" name="discard" style="background-color: transparent;border: 0px solid #dcdcdc">
    <i class="fa fa-close "></i>
  </a>
  <p class="question_para" value="<?php echo $row['question']; ?>" ><?php echo $i;?> .&nbsp &nbsp <?php echo $row['question'];  ?></p>
 <div class="paratoggle">
 <p style="color: white;"> Answer:&nbsp; &nbsp; <?php echo $row['answer'];?></p>
  </div>
</div>
<?php 
$i++;
}
?>
</form>
</div>

<!-- <div class="container">
  <h2>Simple Collapsible</h2>
  <p>Click on the button to toggle between showing and hiding content.</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div> -->







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