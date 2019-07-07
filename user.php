<html>
        <head>
        
        <?php
        include ('Main.php'); 
        require ('Task.php');
        require ('delete.php');
        require ('notes.php');
       
        
        ?>
            
            
        
          <link rel="stylesheet" href="../HomePlanner/sidepro.css">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
<body>
    
    <div class="container-user">
        <div class="layer">
    
            <div class="d-flex bg-light" style="height:100%; background-size: cover; background-color: rgb(0,0,0); border-style: solid">
                
<!--###############################################################################----NOTES------##########################################################################-->

                <div class="card" style="width: 100%">
                    <div class="card-header" style=" height:15%">
                        <h6><b>  <?php echo "Today:   " .date("l,  "). date("d/m/Y"); ?></b></h6>
                        <h5>Notes  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addNotes"><i class="fas fa-plus"></i> Add Notes</button></h5>
                       
                    </div>
                    <div class="card-body" style=" background-color: rgb(0,0,0); opacity: 0.95">
                        <?php
                        if ($notes->num_rows > 0)
                        {
                             while ($rown = mysqli_fetch_assoc($notes))
                            {   

                                $notesid=$rown['notesid'];
                                $notestitle=$rown['notestitle'];
                                $notestype=$rown['notestype'];
                                $notesdetail=$rown['notesdetail'];
                    ?>
                         <div  class="card bg-warning  view_notes " style="height:10%; padding:5px" type="button"  name="notes_view" value="notes_view" id="<?php echo $notesid;?>"   data-toggle="modal" >
                             <div class="card-body" style="">
                                
                                        <div class="w3-left"><span class="card-text text-white">Notes Title:  <?php echo $notestitle; ?></span></div>
                                        <div class="w3-right"><span class="card-text text-white" >Type:  <?php echo $notestype; ?></span></div><br>
                                           
                             </div>
                        </div>
                        
                        <br>
                        
                         <?php
                             }
                             
                             
                        }
                        
                        ?>
                    </div>
                </div>

<!--###############################################################################----Task-------##########################################################################-->

                <div class="card" style="width: 100%">
                    <div class="card-header" style=" height:15%">
                        <h5>Task <br> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTask"><i class="fas fa-plus"></i> New Task</button></h5>
                    </div>
                    
                    <div class="card-body" style=" background-color: rgb(0,0,0); opacity: 0.95; padding:20px">
                    <?php
                    
                   
                     if ($task->num_rows > 0)
                        {
                             while ($rowt = mysqli_fetch_assoc($task))
                            {   

                                $taskid=$rowt['taskid'];
                                $title=$rowt['title'];
                                $duedate=$rowt['duedate'];
                                $subject=$rowt['subject'];
                                $progress=$rowt['progress'];
                                $detail=$rowt['detail'];
                    ?>
                        
                        
                         
                            <div  class="card bg-primary view_data" style="height:12%" type="button"  name="view" value="view" id="<?php echo $taskid;?>"   data-toggle="modal" >
                            <div class="card-body" style="">
                                
                                <div class="w3-left"><span class="card-text text-white">Title: <?php echo $title; ?></span></div>
                                <div class="w3-right"><span class="card-text text-white" >Due: <?php echo  $duedate; ?></span></div><br>
                                 <div class="w3-left"><span class="subject  text-white" >Subject: <?php echo $subject; ?></span></div>
                                <div class="w3-right"><span class="card-text text-white">Progress: <?php echo $progress; ?>%</span></div>  
                            </div>
                        </div>
                        
                            
                       
                        <br>

                    
                     <?php
                             }
                             
                             
                        }
                        
                        ?>
                        
                        </div>
                </div>
<!--###############################################################################----Exam-------##########################################################################-->
                
                <div class="card" style="width: 100%" >
                    <div class="card-header" style=" height:15%">
                        <h5>Exams Schedule<br> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addTask"><i class="fas fa-plus"></i> Add Exam</button></h5>
                    </div>
                    <div class="card-body" style=" background-color: rgb(0,0,0); opacity: 0.95">
                        
                             <div  class="card bg-danger view_data" style="height:12%" type="button"  name="view" value="view" id="<?php echo $taskid;?>"   data-toggle="modal" >
                                 <div class="card-body" style="">
                                
                                        <div class="w3-left"><span class="card-text text-white">Subject: <?php echo $title; ?></span></div>
                                        <div class="w3-right"><span class="card-text text-white" >Exam date: <?php echo  $duedate; ?></span></div><br>
                                         <div class="w3-left"><span class="subject  text-white" >Exam type: <?php echo $subject; ?></span></div>
                                        <div class="w3-right"><span class="card-text text-white">Revision Progress: <?php echo $progress; ?>%</span></div>  
                                </div>
                             </div>
                        
                            
                       
                        <br>
                    </div>
                </div>
                    
            </div>
        </div>
        
    </div>
    
    
    
</body>




<!--####################################################################################################################################################################-->

<!-- The Add New Task -->
 <!-- The Modal -->
 <div class="modal fade" id="addTask">
     <form  action="" method="post">
     <div class="modal-dialog modal-dialog-centered">
          
         <div class="modal-content">
             
      
             <!-- Modal Header -->
             <div class="modal-header">
                 <h4 class="modal-title">Add New Task</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
        
             <!-- Modal body -->
             <div class="modal-body">
                 
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Subject</span>
                         </div>
                         <input type="text" class="form-control" id="subject" name="subject">
                     </div>
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Homework Type</span>
                         </div>
                         <input type="text" class="form-control" id="hometype" name="hometype">
                     </div>
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Title</span>
                         </div>
                         <input type="text" class="form-control" id="title" name="title">
                     </div>
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Detail</span>
                         </div>
                         <input type="text" class="form-control" id="detail" name="detail">
                     </div>
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Due Date</span>
                         </div>
                         <input type="date" class="form-control" id="due" name="due">
                     </div>
                 
                 
             </div>
        
             <!-- Modal footer -->
             <div class="modal-footer">
                 <button type="submit" class="btn btn-success"   name="addtask" value="addtask" >Submit</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
             
         </div>
          
     </div>
     </form>
 </div>
<!--######################################################################################################################################################################-->
         
 <!--####################################################################################################################################################################-->
 <!-- Task update -->
  <!-- The Modal -->
  <div class="modal fade" id="dataModal" >
       <form  action="" method="post">
     <div class="modal-dialog modal-dialog-centered">
           
      
					
         <div class="modal-content" id="task_detail">
             
           
      
             <!-- Modal Header -->
             <div class="modal-header">
                 <h4 class="modal-title"><span></span>Task</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
        
             <!-- Modal body -->
             <div class="modal-body" >
                 
                 <div class="card" >
                    <div class="card-header" style=" height:15%">
                        <h5>Due Date</h5>
                    </div>
                    <div class="card-body" style=" background-color: rgb(231, 234, 229)">
                        <input type="date" class="form-control" id="duedate" name="duedate">
                     
                    </div>
                </div>
                 
                 <div class="card" >
                         <div class="card-header" style=" height:15%">
                                <h5>Detail:</h5>
                                
                         </div>
                     <div class="card-body" style=" background-color: rgb(231, 234, 229)">
                         <textarea  class="form-control" rows="5"  id="details" name="details"></textarea>
                     </div>
                 </div>     
                 
                  <div class="card" >
                    <div class="card-header" style=" height:15%">
                        <h5>Progress:</h5>
                    </div>
                    <div class="card-body" style=" background-color: rgb(231, 234, 229)">
                        
                       <div class="slidecontainer">
                           <input type="range"  min="1" max="100" id="progress" name="progress"  value="myRnage" class="slider" >
                        <p>Percentage: <span id="set"></span>%</p>
                     </div>
                    </div>
                </div>
                 
                 
                 
             </div>
        
             <!-- Modal footer -->
             <div class="modal-footer">
                 <input type="hidden" name="task_id" id="task_id" />
                  <button type="submit" class="btn btn-success" name="delete" id="delete" onClick="return confirm('Are you sure compeleted the task ?')">Completed</button>
                  <button type="submit" class="btn btn-secondary" name="insert" id="insert" value="Update" >Update</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
       </form>
  </div>
  
  <script>
      $(document).ready(function(){
          $(document).on('click', '.view_data', function(){
              var task_id = $(this).attr("id");
              
              $.ajax({
                  url:"fetch.php",
                  method:"POST",
                  data:{task_id:task_id},
                  dataType:"json",
                  success:function(data){
                      $('#duedate').val(data.duedate);
                      $('#progress').val(data.progress);
                      $("#details").val(data.detail);
                      $('#task_id').val(data.taskid);
                      $('#insert').val("Update");
                      
                      $('#dataModal').modal('show');
                  }
              });
            
               
          });
              
      });
  
  
  
  </script>
 <!--####################################################################################################################################################################--> 
  
  <!-- The Add New Notes -->
 <!-- The Modal -->
 <div class="modal fade" id="addNotes">
     <form  action="" method="post">
     <div class="modal-dialog modal-dialog-centered">
          
         <div class="modal-content">
             
      
             <!-- Modal Header -->
             <div class="modal-header">
                 <h4 class="modal-title">Add New Notes</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
        
             <!-- Modal body -->
             <div class="modal-body">
                 
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Notes Title:</span>
                         </div>
                         <input type="text" class="form-control" id="notestitle" name="notestitle">
                     </div>
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Type:</span>
                         </div>
                         <input type="text" class="form-control" id="notestype" name="notestype">
                     </div>
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Notes:</span>
                         </div>
                         <textarea  class="form-control" rows="5"  id="notesdetail" name="notesdetail"></textarea>
                     </div>
               
                 
             </div>
        
             <!-- Modal footer -->
             <div class="modal-footer">
                 <button type="submit" class="btn btn-success"   name="addnotes" value="addnotes" >Submit</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
             
         </div>
          
     </div>
     </form>
 </div>
<!--######################################################################################################################################################################-->

<!--####################################################################################################################################################################-->
 <!-- Notes update -->
  <!-- The Modal -->
  <div class="modal fade" id="notesModal" >
       <form  action="" method="post">
     <div class="modal-dialog modal-dialog-centered">
           
      
					
         <div class="modal-content" id="task_detail">
             
           
      
             <!-- Modal Header -->
             <div class="modal-header  bg-warning">
                 <h4 class="modal-title"><span></span>Notes</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
        
             <!-- Modal body -->
             <div class="modal-body" >
                 
                 <div class="card bg-warning" >
                    <div class="card-header" style=" height:15%">
                        <h5>Notes Title:</h5>
                    </div>
                    <div class="card-body" style=" background-color: rgb(231, 234, 229)">
                        <input type="text"  class="form-control" id="notesTitle" name="notesTitle">
                     
                    </div>
                </div>
                 
                 
                   <div class="card bg-warning" >
                    <div class="card-header" style=" height:15%">
                        <h5>Notes Type:</h5>
                    </div>
                    <div class="card-body" style=" background-color: rgb(231, 234, 229)">
                        <input type="text"  class="form-control" id="notesType" name="notesType">
                     
                    </div>
                </div>
                 
                 <div class="card bg-warning" >
                         <div class="card-header" style=" height:15%">
                                <h5>Notes:</h5>
                                
                         </div>
                     <div class="card-body" style=" background-color: rgb(231, 234, 229)">
                         <textarea  class="form-control" rows="10" style="height:20%" id="notesDetail" name="notesDetail"></textarea>
                     </div>
                 </div>     
                 
                 
                 
                 
                 
             </div>
        
             <!-- Modal footer -->
             <div class="modal-footer bg-warning">
                 <input type="hidden" name="notes_id" id="notes_id" />
                  <button type="submit" class="btn btn-success" name="notesdelete" id="notesdelete" onClick="return confirm('Are you sure want to delete this notes ?')">Delete</button>
                  <button type="submit" class="btn btn-secondary" name="notesinsert" id="notesinsert" value="notesUpdate" >Save</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
       </form>
  </div>
  
  
 <!--####################################################################################################################################################################-->
  
 <script>
var slider = document.getElementById("progress");
var output = document.getElementById("set");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


</html>

