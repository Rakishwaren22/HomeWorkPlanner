

<html>
    <head>
        
        <?php
        include ('Main.php');
        include ('viewuser.php');
        ?>
        
        
        <div id="mySidenav" class="sidenav">
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../HomePlanner/admin.php">Home</a>   
            <a href="../HomePlanner/adminsetting.php">Setting</a>
            <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout  </a>
        </div>
    
    <link rel="stylesheet" href="../HomePlanner/sidepro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body style="background-image:url(../HomePlanner/Image/test2.jpg)">
    
    
    
     <div class="container">
          <h2 class="text-white">User Details</h2>
          <br>
          <br>
             <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                     <?php


          if ($user->num_rows > 0)
             {
                  while ($rowt = mysqli_fetch_assoc($user))
                 {   

                     $name=$rowt['username'];
                     $email=$rowt['email'];
                    
         ?>
                  <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $email ?></td>
                    
                  </tr>
                   <?php
            }
                             
                             
        }
        ?>
                </tbody>
                
               

      
            </table>
    
    
</body>

</html>