<?php

 $connected = mysqli_connect("localhost:3306","root","", "test");
 
 if(isset($_POST["exam_id"]))
 {
     
     $query = " SELECT * FROM exam WHERE examid = '".$_POST["exam_id"]."'";
     $result = mysqli_query($connected, $query);
     $row = mysqli_fetch_array($result);
     echo json_encode($row);
 }
 ?>