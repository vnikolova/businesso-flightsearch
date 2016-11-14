<html>

<head>
    <title>Businesso - Your business travels organized.</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/loginStyles.css">
-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
session_start();
if(isset($_SESSION['username'])) {

?>
<body>
  <?php include_once "header.html" ?>

    <!-- content -->


    <div class="container">
        <div class="col-lg-8 col-lg-offset-2 paymentPage">
            <h2>TOTAL PRICE: <span style="float:right">... &euro;</span></h2> <br>

            <ul class="nav nav-tabs">
                <li role="presentation" class="active">
                    <a href="#">
                        <img src="img/card.jpg" class="img-responsive" width="300">
                    </a>
                </li>
                <li role="presentation">
                    <img src="img/paypal.png" width="200" class="paypalImage">
                </li>
            </ul> <br>
            <div class="row">
            </div>
            <div class="col-lg-6">
                <!-- selected card--><br>
                <div class="selectedCard">
                    <p><strong>use saved card:</strong></p>
                    <p class="savedCardInfo">card number: ...... <br><br> card holder: ...... <br><br> ex. date: ...... <br><br> cvr: ...
                    </p>
                </div>
            </div>
            <div class="col-lg-6"><br>
                <p><strong>select another card:</strong></p>
                <!-- card number -->
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="card number">
                </div>
                <!-- date of expire-->
                <div class="form-group">
                    <div class="inner-addon left-addon ">
                        <img src="img/calendar.png" class="glyphicon">
                        <input id="depart" class="datepicker form-control depart" placeholder="ex. date " style="height:50px;">
                    </div>
                </div>
                <!-- card holder -->
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="card holder">
                </div>
                <!-- cvr -->
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="cvr">
                </div>
            </div>
            <div class="col-lg-6 col-lg-offset-3">
                <button type="button" class="btn btn-success active form-control submitPaymentBtn" id="submitPaymentBtn">SUBMIT</button>
            </div>
        </div>
    </div>
    </div>

    </div>


    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- scripts -->
    <script src="js/script.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.4.1/bootstrap-slider.js"></script>
 -->
</body>
<?php
} else {
    header("location:login.html");
}
?>
</html>
