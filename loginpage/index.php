<?php

include "connection.php";

if (isset($_POST['login']))
     {  
       //$msg="Data inserted successfully"; 
       header("location:login.php");  
     }

if (isset($_POST['register']))
     {  
      //$msg="Data inserted successfully"; 
      header("location:register.php");  
     }

?>

 <!DOCTYPE html>  
 <html lang="en">  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Form</title>  

      <link rel="stylesheet" href="style_index.css"> 
 </head>

 <body>  
 <div class="container">  

      <h1>WELCOME</h1>

      <form method="post" action=""> 

          <br><br> 
          <input type="submit" class="log_btn" name="login" value="Login"> 
          <br><br>    

          <br><br> 
          <input type="submit" class="reg_btn" name="register" value="Register"> 
          <br><br>    

      </form> 

 </div> 
 </body>  
 </html>     