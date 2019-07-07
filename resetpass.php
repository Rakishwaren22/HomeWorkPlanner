
<!--Reset Password-->
<?php
     
 
 $userid=$_SESSION['login'];
    $con = mysqli_connect("localhost:3306","root","", "test");
    $query=mysqli_query($con,"select * from userinfo where email='$userid'");
    $rows=mysqli_fetch_array($query);
    $id=$rows["userid"];
 
 if(isset($_POST["reset"]))
 {
     
           
          
           $query= "UPDATE userinfo SET passwords='".$_POST["repassword"]."' WHERE userid='".$id."'";
           $message ='Data Updated';
           
           if(mysqli_query($con, $query))
           {
               header("location:usersetting.php");
               
               
           }
           
           else{
               
               echo "Error" . mysqli_error($con);
           }
           
           
           
                  // success!
               
       }

?>
