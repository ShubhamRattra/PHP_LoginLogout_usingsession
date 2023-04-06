<?php

session_start();

include "connection.php";

?>


<!DOCTYPE html>  
<html lang="en">  

 <head> 
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

      <title>Show Data from database in Table</title>  

      <link rel="stylesheet" href="style_profile.css">
 </head> 

 <body>  
 <div class="container">  

     <br><br> 
     <a href="logout.php"><input type="submit" name="logout" class="logout_btn" value="Logout"></a> 
     <br><br>  

     <h1>Profile Page</h1>

      <table border="1" cellpadding="0">  
           <tr>   
                <th>Name</th>  
                <th>Phone Number</th> 
                <th>Email</th>    
           </tr>  


           <?php    

           $Email = $_SESSION["Email"];

          if($Email != null)
          {

                $select = mysqli_query($conn,"SELECT * FROM user WHERE Email='$Email'");  
                $num = mysqli_num_rows($select);  

                if($num>0) 
                {  
                     while($result= mysqli_fetch_assoc($select))
                     {  
                         echo "  
                               <tr>   
                                    <td>".$result['Name']."</td>  
                                    <td>".$result['Phonenumber']."</td> 
                                    <td>".$result['Email']."</td>    
                                    <td>  
                                        <a href='Delete_user.php?id=".$result['id']."' class='opt'>Delete</a>
                                        <a href='Edit_user.php?id=".$result['id']."' class='opt'>Edit/Update</a>  
                                    </td> 
                               </tr>  
                          ";  
                     }  
                } 
          } 

          else
          {
               header("Location: login.php");
          }

           ?> 


      </table>  

 </div>  
 </body>  

</html>  