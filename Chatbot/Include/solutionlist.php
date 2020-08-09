<?php 
session_start();
if($_SESSION['user_name']==null && $_SESSION['userpass']==null)
   {
     session_unset();session_destroy(); header('location:http://localhost/Chatbot/admin.php');
   }
else{
        include('connection.php');
 $query="select * from solutions";
        $sql=mysqli_query($link,$query);
  }
?>