<?php

if(isset($_POST["task_id"]))
{
    $output='';
    $connect=mysqli_connect("localhost:3306","root","", "test");
    $query ="SELECT * FROM task WHERE taskid='".$_POST["task_id"]."'";
    $result = mysqli_query($connect, $query);
    $output .='
         <div class="modal-header">
                 
           ';
    
    while($row = mysqli_fetch_array($result))
    {
        $output .='
            <h4 class="modal-title">Title: <span>'.$row["title"].'</span></h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
        
             <!-- Modal body -->
             <div class="modal-body" >
            <div class="card" >
            <div class="card-header" style=" height:15%">
         <h5>Due Date</h5>
                    </div>
                    <div class="card-body" style=" background-color: rgb(231, 234, 229)">
                        
                       <span>'.$row["duedate"].'</span>
                    </div>
                </div>
                 
                 
                  <div class="card" >
                    <div class="card-header" style=" height:15%">
                        <h5>Progress:</h5>
                    </div>
                    <div class="card-body" style=" background-color: rgb(231, 234, 229)">
                        
                       <div class="slidecontainer">
                        <input type="range" min="1" max="100" value="'.$row["progress"].'"   class="slider" id="myRange">
                        <p>Percentage: <span id="demo" >'.$row["progress"].'</span>%</p>
                     </div>
                    ';
    }
    $output .= "</div>
                </div>";
    echo $output;
}
?>

