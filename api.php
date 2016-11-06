<?php
		$departureDes = $_GET['departureDes'];
		$arrivalDes = $_GET['arrivalDes'];
		$departDate = $_GET['departDate'];
		$arriveDate = $_GET['arriveDate'];
		$passangers = $_GET['passangers'];

		$as_json = '{"departureDes":"'.$departureDes.'", "arrivalDes":"'.$arrivalDes.'", "departDate":"'.$departDate.'", "arriveDate":"'.$arriveDate.'", "passangers":"'.$passangers.'"}'; 
		$myfile = file_put_contents('data.txt', $as_json.PHP_EOL , FILE_APPEND | LOCK_EX);
?>