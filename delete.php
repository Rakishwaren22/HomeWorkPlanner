<?php

$connect = mysqli_connect("localhost:3306","root","", "test");
if(isset($_POST["delete"]))
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
 

<?php

$connect = mysqli_connect("localhost:3306","root","", "test");
if(isset($_POST["notesdelete"]))
 {
     
           $query= "DELETE FROM notes WHERE notesid='".$_POST["notes_id"]."'";
         
           $message ='Data Deleted';
           
           if(mysqli_query($connect, $query))
           {
               header("location:user.php");
               
               
           }
           
           else{
               
               echo "Error" . mysqli_error($connect);
           }
           
           
           
                  // success!
               
       }

?>


<?php

$connect = mysqli_connect("localhost:3306","root","", "test");
if(isset($_POST["examdelete"]))
 {
     
           $query= "DELETE FROM exam WHERE examid='".$_POST["exam_id"]."'";
         
           $message ='Data Deleted';
           
           if(mysqli_query($connect, $query))
           {
               header("location:user.php");
               
               
           }
           
           else{
               
               echo "Error" . mysqli_error($connect);
           }
           
           
           
                  // success!
               
       }

?>