<?php

$connect = mysqli_connect("localhost:3306","root","", "test");
if(isset($_POST["task_id"]))
 {
     
           $query= "DELETE FROM task WHERE taskid='".$_POST["task_id"]."'";
         
           $message ='Data Updated';
           
           if(mysqli_query($connect, $query))
           {
               header("location:History.php");
               
               
           }
           
           else{
               
               echo "Error" . mysqli_error($connect);
           }
           
           
           
                  // success!
               
       }

?>