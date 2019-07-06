
 <!-- Add New Task -->
<?php
   
    $userid=$_SESSION['login'];
    $con = mysqli_connect("localhost:3306","root","", "test");
    $query=mysqli_query($con,"select * from userinfo where email='$userid'");
    $rows=mysqli_fetch_array($query);
    $id=$rows["userid"];
    
   $date= date("Y-m-d");
    
    if(isset($_POST["addtask"]))
       {
           
           
          
           
           $sql = "CALL sp_addtask('".$_POST["subject"]."' , '".$_POST["hometype"]."','".$_POST["title"]."','".$_POST["detail"]."','".$_POST["due"]."','".$id."','".$date."')";
           if(mysqli_query($con, $sql))
           {
               header("location:user.php");
               
               
           }
           
           else{
               
               echo "Error" . mysqli_error($con);
           }
           
           
           
                  // success!
               
       }
       
     
      ?>
     
 <!-- List Task -->

<?php
    $userid=$_SESSION['login'];
    $con = mysqli_connect("localhost:3306","root","", "test");
    $query=mysqli_query($con,"select * from userinfo where email='$userid'");
    $rows=mysqli_fetch_array($query);
    $id=$rows["userid"];
    
    
    $task= mysqli_query($con, "CALL taskout('$id')")or die("Error: " . mysqli_error($con));
    
    
   ?>

<!--###############################################################################################################################################-->

<!-- Edit Task -->
<?php
     
 $con = mysqli_connect("localhost:3306","root","", "test");
 
 
 if(isset($_POST["insert"]))
 {
     
           
          
           $query= "UPDATE task SET duedate='".$_POST["duedate"]."', progress='".$_POST["progress"]."', detail='".$_POST["details"]."' WHERE taskid='".$_POST["task_id"]."'";
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

 
      
     
     