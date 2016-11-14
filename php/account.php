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
$mobile = $_POST['mobile'];
$passport_ID = $_POST['passport_ID'];
$departure = $_POST['departure'];
$departureTime = $_POST['departureTime'];
$accommo_Type = $_POST['accommo_Type'];
$accommo_Type = $_POST['accommo_Rooms'];
$seat = $_POST['seat'];
$meal = $_POST['meal'];
$card_Num = $_POST['card_Num'];
$card_Date = $_POST['card_Date'];
$card_Name = $_POST['card_Name'];
$card_ccv = $_POST['card_ccv'];

$sql = 'INSERT INTO preferences (user_id, mobile, passport_ID, departure, departureTime,
accommo_Type, accommo_Rooms, accommo_PriceMin, accommoPriceMax, baggageChecked, bagaggeCabin,
seat, meal, card_Num, card_Date,card_Name, card_ccv)
  VALUES ("'.$user_id.'","'.$mobile.'","'.$passport_ID.'","'.$departure.'","'.$departureTIme.'",
  "'.$accommo_Type.'","'.$accommo_Rooms.'", null, null, null, null,"'.$seat.'","'.$meal.'",
  "'.$card_Num.'",,"'.$card_Date.'","'.$card_Name.'","'.$card_ccv.'")';

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//if it finds a user with this email and password it will return 1
if (mysqli_num_rows($result)  == 1) {
  $jData = array("response" => "true");
  $output = json_encode($jData);
  echo $output;
  }
else {
  $jData = array("response" => "Wrong username or password");
  $output = json_encode($jData);
  echo $output;
}
?>
