<?php
  session_start();
  //configure and connect to database
   $db_host = "localhost";
   $db_name = "mydb";
   $db_user = "root";
   $db_pass = "";

  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

  //get values from form
  $user_id = $_SESSION['id'];

  $query = "SELECT *
  FROM users
  LEFT JOIN preferences
  ON users.id=preferences.user_id
  WHERE users.id='$user_id'";

  $result = $conn->query($query);
  $rows = $result->num_rows;

 if($query)
 {
   $info = array();
   for($j = 0; $j < $rows; $j++) //all found rows
   {
     $result->data_seek($j); //find the data
     $row = $result->fetch_array(MYSQLI_ASSOC);
     array_push($info, $row);//push data into array
   }
   echo json_encode($info); //return JSON object
 }

 $conn->close();
?>
