<?php
  session_start();
  //configure and connect to database
   $db_host = "localhost";
   $db_name = "mydb";
   $db_user = "root";
   $db_pass = "";

   $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

  //get values from form
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = 'INSERT INTO users (firstName, lastName, email, password)
    VALUES ("'.$firstName.'","'.$lastName.'","'.$email.'","'.$password.'")';
  $result=mysqli_query($conn,$sql);

  //if it finds a user with this email and password it will return 1
  if ($result) {
    //login user by setting session id and username
    $_SESSION['username'] = $row['firstname'];
    $_SESSION['id'] = $row['id'];
    $jData = array("response" => "true", "username" => $row['firstname']);
    $output = json_encode($jData);
    echo $output;
  	}
  else {
    echo "There has been an error";
  }


?>
