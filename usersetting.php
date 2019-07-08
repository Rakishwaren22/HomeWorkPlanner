<html>
        <head>
        
        <?php
        include ('Main.php'); 
        require ('resetpass.php');
       
        
        ?>
            
            <?php
       $userid=$_SESSION['login'];
    $con = mysqli_connect("localhost:3306","root","", "test");
    $query=mysqli_query($con,"select Username, Email from userinfo where email='$userid'");
    while($row=mysqli_fetch_array($query))
    
{?>
        
          <link rel="stylesheet" href="../HomePlanner/sidepro.css">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         

          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

          
          <script src="Boostrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
          <script src="../HomePlanner/js/userReset.js"></script>
  
          
          <div id="mySidenav" class="sidenav">
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../HomePlanner/user.php">Home</a>

            <a href="../HomePlanner/History.php">History</a>

            <a href="#">Calendar</a>

            <a href="../HomePlanner/usersetting.php">Setting</a>
            <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout  </a>
        </div>
        
        </head>
    
    
    <body style="background-image:url(../HomePlanner/Image/userset.jpg)">
        
        
         <div class="container w3-center" >
            <div class="text-white">
                 <h2>Profile</h2>
                  <p>Setting up your profile:</p>
            </div>
         <div class="card w3-center" style="width:350px;  margin: auto; opacity: 0.85">
             <img class="card-img-top" src="../HomePlanner/Image/profile.png" style="height:300px; width: 300px; margin: auto;" alt="Card image">
             <div class="card-body">
                  <h4 class="card-title"><span ><h4><b><?php echo htmlentities($row['Username']);?></b></h4></span></h4>
                  <h4 class="card-title"><span ><h4><?php echo htmlentities($row['Email']);?></h4><?php } ?></span></h4>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Reset Password</button>
             </div>
         </div>
  
        </div>
        
        
        <div class="modal fade " id="myModal">
  <div class="modal-dialog modal-dialog-centered">
      <form action="" method="post">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
          <h4 class="modal-title"><b>Reset Password</b></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
         <div class="input-group mb-3">
             <div class="input-group-prepend">

                <span class="input-group-text">New Password</span>

                <span class="input-group-text">Password</span>

            </div>
            <input type="password" name="repassword" id="repassword" class="form-control">
         </div>
           
           
           <div class="input-group mb-3">
             <div class="input-group-prepend">

                <span class="input-group-text">Confirm New Password</span>

                <span class="input-group-text">Confirm Password</span>

            </div>
               <input type="password" name="repassword_confirm" id="repassword_confirm" class="form-control">
            
         </div>
          <input type="checkbox" onclick="mypassword()">Show Password
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="reset" id="reset" onClick="return ReValidate()">Reset</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
      </form>
  </div>
            
</div>
        
        
    </body>
    
    
  <!--############################################################################################################################################################-->  
    
    
</html>