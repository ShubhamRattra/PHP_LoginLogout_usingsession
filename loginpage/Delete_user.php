<?php   

include "connection.php";

 if(isset($_GET['id'])) 
  {  
       $id=$_GET['id'];  

       $_SESSION = [];

       session_unset();
       session_destroy();

       $delete=mysqli_query($conn,"DELETE FROM user WHERE id='$id'");  
       if ($delete) 
       {  
         header("location:index.php"); 
         die();  
       }  
  } 

?>  