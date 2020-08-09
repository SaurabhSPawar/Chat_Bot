<?php
include('Include/connection.php');
session_start();

/*if($_SESSION['user_name'] !== null && $_SESSION['userpass'] !== null)
   {  
      
               header('location:http://localhost/chatbot/Querylist.php');
           
   }*/
if(isset($_POST['submit']))
{

        $user_name = $_POST['user_name'];
        $userpass = $_POST['user_password'];
		if($user_name == '' || $userpass=='')
		{

			$userid_note = "Invalid Email Id or Password";
		}
		else
		{
		    $query="select * from login_id where user_name='".$user_name."' ";

		    $sql=mysqli_query($link,$query);
		    $result  = mysqli_fetch_row($sql);
	        	/*print_r($result);*/
            /*$userid_note = "You are Logined";*/
          /*  Array ( [0] => 1 [1] => Admin [2] => 1234 ) */
            if ($user_name ==  $result[1] && $userpass ==  $result[2] )
            {
            	  $userid_note = "You are Logined";
            	   session_start();
            	  $_SESSION["user_name"]=$user_name;
            	  $_SESSION["userpass"]=$userpass;
            	  header('location:http://localhost/chatbot/Querylist.php');
            }
            else
            {
            	$userid_note = "Invalid Email Id or Password";
            }

		}
}
?>