<?php

session_start();
include('Config.php');
//validating session
if(strlen($_SESSION['login'])==0)
{
    header('location:login.php');
}
else
{
    

?>
 <?php
      
    $userid=$_SESSION['login'];
    $con = mysqli_connect("localhost:3306","root","", "test");
    $query=mysqli_query($con,"select Username from userinfo where email='$userid'");
    while($row=mysqli_fetch_array($query))
{?>


<html>
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="../HomePlanner/Boostrap/bootstrap-4.3.1-dist/css/bootstrap.css">
         <link rel="stylesheet" href="../HomePlanner/Boostrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="../HomePlanner/style.css">
    
         <script src="../HomePlanner/js/jquery.min.js"></script>
         <script src="Boostrap/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
         <script src="Boostrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
         <script src="../HomePlanner/js/sidebar.js">

</script>
         
         
        <title></title>
        
 

        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <span style="margin-left: 85%; "><h4>Welcome: <?php echo htmlentities($row['Username']);?></h4>
                 <?php } ?></span>
        </nav>
    </head> 
   
    <body class="pbody">
   
    
    
    </body>
</html>

<?php } ?>