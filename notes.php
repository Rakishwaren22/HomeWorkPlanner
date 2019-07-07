 <!-- Add New Notes -->
<?php
   
    $userid=$_SESSION['login'];
    $con = mysqli_connect("localhost:3306","root","", "test");
    $query=mysqli_query($con,"select * from userinfo where email='$userid'");
    $rows=mysqli_fetch_array($query);
    $id=$rows["userid"];
    
  
    
    if(isset($_POST["addnotes"]))
       {
           
           
          
           
           $sql = "CALL sp_addNotes('".$_POST["notestitle"]."' , '".$_POST["notestype"]."','".$_POST["notesdetail"]."','".$id."')";
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


 <!-- List Notes -->

<?php
    $userid=$_SESSION['login'];
    $con = mysqli_connect("localhost:3306","root","", "test");
    $query=mysqli_query($con,"select * from userinfo where email='$userid'");
    $rows=mysqli_fetch_array($query);
    $id=$rows["userid"];
    
    
    $notes= mysqli_query($con, "CALL notesout('$id')")or die("Error: " . mysqli_error($con));
    
    
   ?>

 <!--###############################################################################################################################################-->

<!-- Edit Task -->
<?php
     
 $con = mysqli_connect("localhost:3306","root","", "test");
 
 
 if(isset($_POST["notesinsert"]))
 {
     
           
          
           $query= "UPDATE notes SET notestitle='".$_POST["notesTitle"]."', notestype='".$_POST["notesType"]."', notesdetail='".$_POST["notesDetail"]."' WHERE notesid='".$_POST["notes_id"]."'";
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
