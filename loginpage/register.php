<?php   

 include "connection.php";  
 
 $Name= "";
 $Email= "";
 $Phonenumber= "";
 $Password= "";

 if (isset($_POST['submit'])) 
 { 

      $Name= $_POST['Name'];
      $Email= $_POST['Email'];
      $Phonenumber= $_POST['Phonenumber'];
      $Password= $_POST['Password'];

      $id= $_GET['id'];

      $select= mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");  
      $data= mysqli_fetch_assoc($select);
          
           $insert= 
           mysqli_query($conn,
               "
               INSERT INTO user (Name, Email, Phonenumber, Password, Createdtime) 
               VALUES ('$Name','$Email','$Phonenumber','$Password', NOW())
               ");  

           if($insert) 
           {  
             //$msg="Data inserted successfully"; 
             header("location:login.php");  
           }
           else
           {  
             $msg="Error, Data not inserted!";  
           }  
  
 }  

?>  



 <!DOCTYPE html>  
 <html lang="en">  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Form</title>  

      <link rel="stylesheet" href="style_register.css"> 
 </head>

 <body>  
 <div class="container">  

      <h1>Registeration Form</h1>

      <form method="post" action=""> 

          <label for="Name">Enter Your Name: 
               <input id="Phonenumber" type="text" name="Name" placeholder="Enter your Name" class="data-insert" value="<?php echo $Name; ?>" required>   
          </label> 

          <label for="Email">Enter Your Email: 
               <input id="Email" type="email" name="Email" placeholder="Enter your Email" class="data-insert" value="<?php echo $Email;?>" required>   
          </label>

          <label for="Phonenumber">Enter Your Phone Number: 
               <input id="Phonenumber" type="text" name="Phonenumber" maxlength="10" placeholder="Enter your Phone Number" class="data-insert" value="<?php echo $Phonenumber;?>" required>   
          </label> 

          <label for="Password">Enter Your Password: 
               <input id="Password" type="text" name="Password" minlength="4" placeholder="Enter your Password" class="data-insert" value="<?php echo $Password;?>" required> 
          </label> 

          <br><br> 
          <input type="submit" name="submit" class="sub_btn_regi" value="Submit"> 
          <br><br>  

      </form> 

 </div>  
 </body>  
 </html>  