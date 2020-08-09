<?php 
$questionid = $_GET['id'];
include('connection.php');
	 $sql=mysqli_query($link,"delete from solutions where questionid='".$questionid."'");
		header('location:http://localhost/Chatbot/viewallquery.php');
		
?>