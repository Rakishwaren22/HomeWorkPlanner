<?php

 $connect = mysqli_connect("localhost:3306","root","", "test");
 
 if(isset($_POST["notes_id"]))
 {
     
     $query = " SELECT * FROM notes WHERE notesid = '".$_POST["notes_id"]."'";
     $result = mysqli_query($connect, $query);
     $row = mysqli_fetch_array($result);
     echo json_encode($row);
 }
 ?>

