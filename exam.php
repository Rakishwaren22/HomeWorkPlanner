  <!-- Add New Exam -->
<?php
   
    $userid=$_SESSION['login'];
    $con = mysqli_connect("localhost:3306","root","", "test");
    $query=mysqli_query($con,"select * from userinfo where email='$userid'");
    $rows=mysqli_fetch_array($query);
    $id=$rows["userid"];
    
  
    
    if(isset($_POST["addexam"]))
       {
           
           
          
           
           $sql = "CALL sp_addExam('".$_POST["subjectexm"]."' , '".$_POST["examtype"]."','".$_POST["examdetail"]."','".$_POST["examdate"]."','".$id."')";
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

  
  <!-- List Exam -->
  
  
  <?php
    $userid=$_SESSION['login'];
    $con = mysqli_connect("localhost:3306","root","", "test");
    $query=mysqli_query($con,"select * from userinfo where email='$userid'");
    $rows=mysqli_fetch_array($query);
    $id=$rows["userid"];
    
    
    $exam= mysqli_query($con, "CALL examout('$id')")or die("Error: " . mysqli_error($con));
    
    
   ?>

 <!--###############################################################################################################################################-->
 
 
 <!-- Edit Exam -->
<?php
     
 $con = mysqli_connect("localhost:3306","root","", "test");
 
 
 if(isset($_POST["examinsert"]))
 {
     
           
          
           $query= "UPDATE exam SET examdate='".$_POST["examdates"]."', examdetail='".$_POST["examdetails"]."', examprogress='".$_POST["examprogress"]."' WHERE examid='".$_POST["exam_id"]."'";
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