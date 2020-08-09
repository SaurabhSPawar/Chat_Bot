  <?php 
/*  unset($_SESSION['user_name']);
 unset($_SESSION['userpass']);*/
  session_unset();
  session_destroy(); 
  header('location:http://localhost/Chatbot/admin.php');
  ?>