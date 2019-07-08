

<!-- List Completed Task -->

<?php
    $userid=$_SESSION['login'];
    $con = mysqli_connect("localhost:3306","root","", "test");
    $query=mysqli_query($con,"select * from userinfo where email='$userid'");
    $rows=mysqli_fetch_array($query);
    $id=$rows["userid"];
    
    
    $Htask= mysqli_query($con, "CALL taskComp('$id')")or die("Error: " . mysqli_error($con));
    
    
   ?>

<!--###############################################################################################################################################-->
