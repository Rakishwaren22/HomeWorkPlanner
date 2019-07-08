
<html>
    <head>
        <?php
        include ('Main.php');
        require ('delete.php');
        require ('viewTask.php');
        require ('fetch.php');
        
        ?>
      
        <div id="mySidenav" class="sidenav">
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../HomePlanner/user.php">Home</a>
            <a href="../HomePlanner/History.php">History</a>
            <a href="../HomePlanner/usersetting.php">Setting</a>
            <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout  </a>
        </div>
    
    <link rel="stylesheet" href="../HomePlanner/sidepro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
        </head>

    <body style="background-image: url(../HomePlanner/Image/history.jpg)">
        
        <div class="container-history" style="background-color: rgb(0,0,0); height:100%;  opacity: 0.76;">
            
                <div class="container w3-center">
  <h2 class="text-white"><b>Completed Task History</</h2>
  <div>&nbsp;</div>              
  <table class="table table-dark " style="position: relative; margin: auto">
    <thead>
      <tr>
        <th>Title</th>
        <th>Subject</th>
        <th>Type</th>
        <th>Progress</th>
      </tr>
    </thead>
    <tbody>
        <?php


          if ($Htask->num_rows > 0)
             {
                  while ($rowt = mysqli_fetch_assoc($Htask))
                 {   

                     $Htaskid=$rowt['taskid'];
                     $Htype=$rowt['type'];
                     $Htitle=$rowt['title'];
                     $Hduedate=$rowt['duedate'];
                     $Hsubject=$rowt['subject'];
                     $Hprogress=$rowt['progress'];
                     $Hdetail=$rowt['detail'];
         ?>
                        
      <tr>
        <td><?php echo $Htitle ?></td>
        <td><?php echo $Hsubject ?></td>
        <td><?php echo $Htype ?></td>
        <td><?php echo $Hprogress ?>%</td>
        <td><button type="button" class="btn btn-primary Hview_data"  name="Hview" value="Hview" id="<?php echo $Htaskid;?>" data-toggle="modal"><i class="fa fa-eye"></i> View Task</button>
        <button type="button" class="btn btn-danger Hview_delete"  name="delete" value="delete"  onClick="reloadWithNoCache();return confirm('Are you sure want to delete the task ?')" id="<?php echo $Htaskid;?>" data-toggle="modal"><i class="fa fa-trash"></i> Delete</button></td>
        
      </tr>
      <?php
            }
                             
                             
        }

      ?>
    </tbody>
  </table>
</div>
            </div>
        </div>
    </body>
    
    
    
    <!--########################################################################---View Complete Task---#######################################################################-->

<!-- The Add New Task -->
 <!-- The Modal -->
 <div class="modal fade" id="viewTask">
     <form  action="" method="post">
     <div class="modal-dialog modal-dialog-centered">
          
         <div class="modal-content" id="data">
             
      
            <!--Data will show-->
                 
                 
              
              
             
         </div>
          
     </div>
     </form>
 </div>
  
  
  <script type="text/javascript">
	$(document).on('click','.Hview_data',function()
	{
		var task_id=$(this).attr("id");
		$.ajax({
			url:"fetchview.php",
			method:"post",
			data:{task_id:task_id},
			success:function(data)
			{
				$('#data').html(data);
				$('#viewTask').modal("show");
			}
		});
	});
	</script>
        
        
        
        <script type="text/javascript">
	$(document).on('click','.Hview_delete',function()
	{
		var task_id=$(this).attr("id");
		$.ajax({
			url:"DeleteView.php",
			method:"post",
			data:{task_id:task_id},
			success:function(data)
			{
				$('#data').html(data);
				
			}
		});
	});
	</script>
        
        <script>
        function reloadWithNoCache(){
             window.location = window.location.href + '?eraseCache=' + Math.random();
         }
        </script>
<!--######################################################################################################################################################################-->

</html>

