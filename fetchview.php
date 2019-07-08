<?php

$connect = mysqli_connect("localhost:3306","root","", "test");
if(!$connect)
{
	die('Connection not Establish');
}
if(isset($_POST['task_id']))
{
	$output='';
	$sql="SELECT * FROM task WHERE taskid = '".$_POST["task_id"]."'";
	$result=mysqli_query($connect,$sql);
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_array($result);
		$output.='
		<!-- Modal Header -->
             <div class="modal-header bg-primary">
                 <h4 class="modal-title">View Task</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
        
             <!-- Modal body -->
             <div class="modal-body">
                 
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Title</span>
                         </div>
                         <li class="list-group-item"> <span>'.$row['title'].'</span></li>
                     </div>
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Detail</span>
                         </div>
                        <textarea>'.$row['detail'].'</textarea>
                     </div>
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Due Date</span>
                         </div>
                         <li class="list-group-item"> <span>'.$row['duedate'].'</span></li>
                     </div>
                     <div class="input-group mb-3 input-group-sm">
                         <div class="input-group-prepend">
                             <span class="input-group-text">Progress</span>
                         </div>
                         <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:'.$row['progress'].'%"><span>'.$row['progress'].'%</span></div>
                     </div>
                 
                 
                 
             </div>
        
             <!-- Modal footer -->
             <div class="modal-footer bg-primary">
                 <input type="hidden" name="task_id" id="task_id" />
                  
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>';
	}
	echo $output;
}
?>