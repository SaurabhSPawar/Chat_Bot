<!DOCTYPE html>
<html>
<head>
  <title>chatbot</title>
  <style type="text/css">
    body{
      margin: 0px 0px;
    }
  </style>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body >
    <img src="takle.jpg" style="width:100%;height: 100%; float: left;"> 
  <img src="robo2.jpg" class="title_image_chatbot" style="border-radius: 50px; width:100px;height:100px ;float:left;margin-top: -739px;margin-left: 48%;position: relative;z-index: +30000; border: 2px solid #dcdcdc;">


<div  style="width:1000px;min-height:600px;border:1px solid black;position: absolute; float: left;margin-top: 4%;margin-left: 15%;background: rgb(0,0,0,0.6);">
  <div style="width:80%;height:9%;background:rgb(0,0,0,0.6);margin-left: 10%;margin-top: 7%;color:white; "><center><br><b>How can I help ?</b><br></center></div>
<div id="chat_div" class="chat_div" style="width:920px;min-height:60px;border:1px solid transparent;position: absolute; float: left;margin-top: 1%;margin-left: 3%;"></div>
  <div class="Input_Button_Div" style="position: absolute;bottom: 10px; float:left;margin-left: 20%;">
    <hr>
   <input type="text"  name="user_query" id="user_input" class="Query_input" placeholder="Enter Query Here" style="height:30px;background: rgb(0,0,0,0.6); color:white;width:600px;border:1px solid black;">
   <button class="Query_submit" type="submit" class="send_data" id="send_data" name="send_data" style="background: transparent;color:black;border: 1px solid transparent;">
    <i class="fa fa-send fa-2x ;"></i></button>
</div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
         alert("hii");
        $("#send_data").click(function()
     {
        
        var user_string = document.getElementById("user_input").value;
        var clientHeight = document.getElementById('chat_div').clientHeight;
      if(clientHeight>200)
      {

/*alert("ooo no");
alert(clientHeight);*/
  
if(user_string != "")
     {
       
       
         
              $("#chat_div").append(' <div class="abc" style="max-width:300px;border:1px solid black;border-radius:20px; z-index:+40000;word-wrap: break-word;background:rgb(0,0,0,0.6);color:white;padding: 5px 15px;">'+user_string+'</div><br><br>');
               $.ajax({    

              url: 'http://localhost/Chatbot/Include/datamine.php',    
              type: 'post', 
            //  dataType: 'json',  
              data : {
              user_string:user_string,
              },                   
              success: function(data)         
              {
                $("#chat_div").append(' <div class="abc" style="border:1px solid black;min-width:300px;z-index:+40000;border-radius:20px;word-wrap: break-word;background:rgb(0,0,0,0.6);color:white;padding: 5px 15px;float:right;"> '+data+'</P></div><br><br>');
               
              } 
             
            });
      
     } 
     setTimeout(function() {

    window.location="http://localhost/Chatbot/chatbot.php"; 
}, 5000);
    
}
else{
   if(user_string != "")
     {
       
         
              $("#chat_div").append(' <div class="abc" style="border:1px solid black;max-width:300px;z-index:+40000;border-radius:20px;word-wrap: break-word;background:rgb(0,0,0,0.6);color:white;padding: 5px 15px;"> '+user_string+'</P></div><br><br>');
               $.ajax({    

              url: 'http://localhost/Chatbot/Include/datamine.php',    
              type: 'post', 
             // dataType: 'json',  
              data : {
              user_string:user_string,
              },                   
              success: function(data)         
              {
                /*console.log(data);*/
                if(data!='')
                {
                $("#chat_div").append(' <div class="abc" style="border:1px solid black;min-width:300px;z-index:+40000;border-radius:20px;word-wrap: break-word;background:rgb(0,0,0,0.6);color:white;padding: 5px 15px;float:right;"> '+data+'</P></div><br><br>');
               
              } 
              }
            });
          
      
     }
     }     
}); 
     
});
</script> 
</html>