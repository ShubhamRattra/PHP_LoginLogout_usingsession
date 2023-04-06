<?php

session_start();

include "connection.php";

$Email= "";
$Password= "";

if(isset($_POST["submit"])){
  $Email = $_POST["Email"];
  $Password = $_POST["Password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result) > 0)
  {
    if($Password == $row['Password'])
    {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      $_SESSION["Email"] = $Email;
      
      header("Location: profile.php");
    }

    else
    {
      echo "<script> alert('Wrong Password'); </script>";
    }
  }

  else
  {
    echo "<script> alert('User Not Registered'); </script>";
  }
}

?>

 <!DOCTYPE html>  
 <html lang="en">  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Form</title>  

      <link rel="stylesheet" href="style_login.css"> 
 </head>

 <body>  

 <div class="container">  

      <h1>Login Page</h1>
      
      <a href="register.php"><input type="submit" name="signup" class="singup_btn" value="Don't have an account"></a> 
      <br><br>

      <form method="post" action="">     

          <label for="email">Enter Your Email: 
               <input id="email" type="email" name="Email" placeholder="Enter your Email" class="data-insert" required> 
          </label>
           
          <label for="password">Enter Your Password: 
               <input id="password" type="text" name="Password" minlength="4" placeholder="Enter your Password" class="data-insert" required> 
          </label> 

          <br><br> 
          <input type="submit" name="submit" class="login_btn" value="Login"> 
          <br><br>   

      </form> 

 </div>  
 </body>  
 </html>  