<?php
     
 $con = mysqli_connect("localhost:3306","root","", "test");
 $complete='1';
 
 if(isset($_POST["complete"]))
 {
    
           
          
           $query= "UPDATE task SET Completed='".$complete."' WHERE taskid='".$_POST["task_id"]."'";
           $message ='Data Updated';
           
           if(mysqli_query($con, $query))
           {
               header("location:user.php");
               
               
           }
           
           else{
               
               echo "Error" . mysqli_error($con);
           }
           
           
           
                  // success!
               
       }

?>