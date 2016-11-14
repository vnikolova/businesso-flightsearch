<?php
$command = $_GET['command'];

if($command == "return"){
// return	
$departureDes = $_GET['departureDes'];
$arrivalDes = $_GET['arrivalDes'];
$departDate = $_GET['departureDate'];
$arriveDate = $_GET['arrivalDate'];
$passangers = $_GET['passangersnumber'];

$as_json = '{"departureDes":"'.$departureDes.'", "arrivalDes":"'.$arrivalDes.'", "departDate":"'.$departDate.'", "arriveDate":"'.$arriveDate.'", "passangers":"'.$passangers.'"}'; 
$myfile = file_put_contents('data.txt', $as_json.PHP_EOL , FILE_APPEND | LOCK_EX);
}
else{
// one way
$departureDesOne = $_GET['departureDesOne'];
$arrivalDesOne = $_GET['arrivalDesOne'];
$departOne = $_GET['departOne'];
$passNumberOne = $_GET['passNumberOne'];

$oneWay_json = '{"departureDesOne":"'.$departureDesOne.'", "arrivalDesOne":"'.$arrivalDesOne.'", "departOne":"'.$departOne.'", "passNumberOne":"'.$passNumberOne.'"}';
$myfile = file_put_contents('data.txt', $oneWay_json.PHP_EOL , FILE_APPEND | LOCK_EX);
}

?>