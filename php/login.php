<?php

session_start();
//configure database
 $db_host = "localhost";
 $db_name = "mydb";
 $db_user = "root";
 $db_pass = "";

 $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

  $email = $_GET['email'];
  $password = $_GET['password'];
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

  //if it finds a user with this email and password it will return 1
  if (mysqli_num_rows($result)  == 1) {
  	$_SESSION['username'] = $row['firstname'];
  	$_SESSION['id'] = $row['id'];
    $jData = array("response" => "true", "username" => $row['firstname']);
    $output = json_encode($jData);
    echo $output;
  	}
  else {
    $jData = array("response" => "Wrong username or password");
    $output = json_encode($jData);
    echo $output;
  }


?>
