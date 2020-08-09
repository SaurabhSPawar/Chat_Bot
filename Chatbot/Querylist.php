<!DOCTYPE html>
<html>
<head>
  <title>Query List</title>
  <style>
/**{
  border:2px solid black;
}*/
body{
  margin:0;
  padding:0;
}
body:before{
  z-index: -1;
  content:'';
  position:fixed;
  width:100%;
  height:100%;
 background-image: url('takle.jpg');
 background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  -webkit-background-size:cover;
  background-size: cover;*/
  -moz-filter:blur(10px);
  float:left;
  filter:blur(1px); 
}
.contact-form{
  position:absolute;
  top:10%;
  left:10%;
/*  -webkit-transform:translate(-0%,-0%);
  -moz-transform:translate(-0%,-0%);
  -o-transform:translate(-0%,-0%);
  transform:translate(-0%,-0%);*/
  width:75%;
  height:59%;
  padding:80px 40px;
background-color: rgba(0,0,0,0.6);
border: 1px solid #dcdcdc;
/*rgba(0,0,0,0.6)*/
}
</style>
<link href="main.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="a">
  <?php include('Include/getquerylist.php') ?>
  <div class="dropdown"><i class="fa  fa-bars fa-3x" style="color: white;margin-left: 10px; margin-top:10px; float: left; z-index: +1;position: absolute;" class="dropdown_fa"></i></div>
<div class="dropdowndiv">
  <ul class="dropdownlist">
    <li><a href="http://localhost/Chatbot/Querylist.php">user query list</a></li>
    <li><a href="http://localhost/Chatbot/addnewquery.php">Insert new query</a></li>
    <li><a href="http://localhost/Chatbot/viewallquery.php">View All Query</a></il>
    <li><a href="http://localhost/Chatbot/changepassword.php">Change Password</a></li>
    <li><a href="http://localhost/Chatbot/Include/logout.php">Log Out</a></li>
  </ul>
</div>
<div class="contact-form"> 
<img src="robo2.jpg" class="Query_img">
<div class="bottom_inputtype"><h4><center>List Of Questions</center></h4></div>

<?php
$i=1;
while($row=$sql->fetch_assoc())
  {   ?> 
<div class="questions discard2"><a href="http://localhost/Chatbot/Include/deleterecord2.php?id=<?php echo $row['question_id'];?> "class="question_link"><i class="fa fa-close"></i></a><p><?php echo $i;?> .&nbsp &nbsp  <?php echo $row['question'];?></p></div>
<?php 
$i++;
}
?>
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