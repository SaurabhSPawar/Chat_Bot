<?php 
$questionid = $_GET['id'];
include('connection.php');
	 $sql=mysqli_query($link,"delete from user_query where question_id='".$questionid."'");
		header('location:http://localhost/Chatbot/Querylist.php');
		
?>