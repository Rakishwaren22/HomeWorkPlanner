<?php


require('Config.php');
    
      
       if(isset($_POST["registered"]))
       {
           $conn = new Connection();
           $link = $conn->getLink();
           
           $sql = "CALL sp_uerinfo(?,?,?)";
           $res = $link->prepare($sql);
           $res->bind_param('sss', $_POST["username"],$_POST["email"],$_POST["password"]);
           

    if ($_POST["password"] === $_POST["password_confirm"]) {
                  // success!
                if ($res->execute())
                 {
                      header("location:login.php?inserted=1");
                 }
           
                 $res->close();
                 $link->close();
               
               }

            else {
                 // failed :(
                
                echo '<script>alert("confirm password is invalid")</script>';
               
            }
       }
       
     
       
       if(isset($_GET["inserted"]))
       {
           echo '<script>alert("registered successfully")</script>';
       }

    
       ?>
           
     <?php  
       session_start();
     if(isset($_POST['login']))
    {
         $email=$_POST['l_email'];
         $password=($_POST['l_password']);
         $con = mysqli_connect("localhost:3306","root","", "test");
         $query=mysqli_query($con,"CALL loginDetails('$email','$password')");
         $num=mysqli_fetch_array($query);
         if($num>0)
         {
             $_SESSION['login']=$_POST['l_email'];
             if($email == "admin")
                 {
                 header("location:admin.php");
             }
             else
                 {
                  header("location:user.php");
             }
            
         }
         else
         {
             $_SESSION['login']=$_POST['l_email'];
             echo "<script>alert('Invalid  login details');</script>";
             $extra="login.php";

         }
    }
    ?>