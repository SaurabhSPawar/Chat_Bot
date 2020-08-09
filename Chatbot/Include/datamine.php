<?php
include ('connection.php');
$user_string= $_POST['user_string'];
$user_string=strtolower($user_string); // string convert lo lower case
$split_string = explode(" ", $user_string); //splite string to word array
$size=count($split_string); //size of array
$i=0;
b:
$sql="select * from solutions where question = '".$split_string[$i]."'";
a:
$result = mysqli_query($link, $sql);
$result_arr = mysqli_fetch_row($result);
/*print_r($result_arr);*/
//this if use to find result is empty or not if empty then i++ goto b
 if(empty($result_arr))
{
 	if($i<$size)
 	{
      $i++;
      if(!empty($split_string[$i]))
      {
      goto b;

      }
      else
      {
        echo " Sorry... I can't  understand ";
      }
    }
}
//this if use to check answer /link given by db if answer then display result 
//and i++ goto b
//hint
//1 = answer 
//2 = link
y:
if($result_arr[3]=="1")
{ 
   $data=$result_arr[2];
  echo $data;
  if($i<$size)
  { 

   $i++; 
   if(!empty($split_string[$i]))
     {
       goto b;
     }
   else{
      /* $data="Thank You";
       echo $data;*/
     }
   //echo json_encode($data);
  }
}
/* problem is here like
1. if i++ is empty 
2. if i++ result/link
3. i++ word not found
*/

if($result_arr[3]=="2")
{

	if($i<=$size)
	{
    x:
      $i++;

      if(!empty($split_string[$i]))
        {
          $new_string=$result_arr[2]; 
    $sql=$new_string." where question = '".$split_string[$i]."'";

   //echo $sql;
         $result = mysqli_query($link, $sql);
//echo "<pre>"; print_r($result); exit;
          if(!empty($result))
          {
             $result_arr = mysqli_fetch_array($result); 
            //echo "<pre>"; print_r($result_arr);
             /*Array
                  (
                      [0] => 1
                      [questionid] => 1
                      [1] => to
                      [question] => to
                      [2] => select * from to
                      [answer] => select * from to
                      [3] => 2
                      [status] => 2
                  )*/
         
                 
               if(empty($result_arr))
                 {

                    goto x;


                 }
                else
                {
                  
                  goto y;
                }

        }


     }
  else{
     echo "Sorry... I can't understand.. ";
    }

        }
}

/*function findwords(&$arr , i){

  

}*/
?>