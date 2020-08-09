<?php
session_start();
if($_SESSION['user_name']==null && $_SESSION['userpass']==null)
   {
     session_unset();session_destroy(); header('location:http://localhost/Chatbot/admin.php');
   }
else
   {
   	 if(isset($_POST['submit']))
   	    {
   	    	include('connection.php');
   	    	/*echo 'hi';
   	    	exit;
   	   	/*print("hii");*/
   	    $question=$_POST['new_question'];
   	    $answer=$_POST['new_answer'];
	   	    if($question =='' || $answer == '')
	   	    {
	   	    	$user_note="please enter both Question and Answer ";
	   	    }
	   	    else
	   	    {
	   	    	$query="insert into solutions (question,answer) values('".$question."','".$answer."')";
	   	    	$sql=mysqli_query($link,$query);
	   	    	$user_note="Data Entered Sucessfully";
	   	    }
   	    }
   	}
   
?>