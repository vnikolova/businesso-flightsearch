<?php
  session_start();
  //configure and connect to database
   $db_host = "localhost";
   $db_name = "mydb";
   $db_user = "root";
   $db_pass = "";

   $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
  // //create database
  //   $connectToDB = mysqli_query($conn, "Create database if not exists MyDB");
  //   //choose database
  //   mysqli_select_db($conn,"MyDb");
  //
  //   $tryQuery = mysqli_query($conn, "SELECT id FROM users");
  //
  //   if(empty($tryQuery)) {
  //       $query = "CREATE TABLE users (
  //              id INT NOT NULL AUTO_INCREMENT,
  //              PRIMARY KEY(id),
  //              firstname VARCHAR(30) NOT NULL,
  //              lastname VARCHAR(30) NOT NULL,
  //              email VARCHAR(50) NOT NULL,
  //              password VARCHAR(20) NOT NULL,
  //          )";
  //       $result = mysqli_query($conn, $query);
  //   } else {
  //     echo "There has been an error";
  //   }

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
    echo "true";
  	}
  else {
    echo "There has been an error";
  }


?>
