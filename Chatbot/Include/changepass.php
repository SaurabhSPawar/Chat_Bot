<?php
session_start();
$user=$_SESSION['user_name'];

if($_SESSION['user_name']==null && $_SESSION['userpass']==null)
   {
     session_unset();session_destroy(); header('location:http://localhost/Chatbot/admin.php');
   }
else
{
	if(isset($_POST['submit']))
	{
        $userpass1 = $_POST['pass1'];
        $userpass2 = $_POST['pass2'];
		if($userpass1 == '' || $userpass2=='')
		{

			$user_note = "Please enter Password";
		}
		elseif($userpass1 != $userpass2)
		{
			$user_note="Password does not match with confirm Password";
		}
		else{
			include('Include/connection.php');
			$query= 'UPDATE login_id SET password="'.$userpass2.'" WHERE user_name= "'.$user.'"';
		
			/*"UPDATE `solutions` SET `questionid`=[value-1],`question`=[value-2],`answer`=[value-3] WHERE 1";*/
			$sql=mysqli_query($link,$query);
			$user_note="Password Change Sucessfully ";
		}
	}
}
?>