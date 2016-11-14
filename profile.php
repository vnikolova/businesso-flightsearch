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
      <div class="col-xs-8 col-xs-offset-2">
        <h2>Profile Settings</h2>
      </div>
      <!-- column one - personal info , flight destination, accomo -->
      <div class="col-xs-5 col-xs-offset-1">
        <h3>Pesonal Information</h3>
        <h4 id="firstName"><small>First Name</small><span></span></h5>
        <h4 id="lastName"><small>Last Name</small><span></span></h4>
        <h4 id="email"><small>E-mail</small><span></span></h4>
        <h4 id="mobile"><small>Mobile</small><span></span></h4>
        <h4 id="passportID"><small>Passport / ID</small><span></span></h4>
        <h3>Destination and Time</h3>
        <h4 id="time"><small>Time</small><span></span></h4>
        <h4 id="departure"><small>Departing from</small><span></span></h4>
        <h3>Accommodation</h3>
        <h4 id="accommoType"><small>Type</small><span></span></h4>
        <h4 id="rooms"><small>Rooms</small><span></span></h4>
        <h4 id="price"><small>Price Range</small><span></span></h4>

      </div>

      <!-- column two - service and payment info -->
      <div class="col-xs-5">
        <h3>Services</h3>
        <h4 id="checkedBaggage"><small>Checked-in Baggage</small><span></span></h4>
        <h4 id="cabinBaggage"><small>Cabin Baggage</small><span></span></h4>
        <h4 id="seat"><small>Seat</small><span></span></h4>
        <h4 id="meal"><small>Meal</small><span></span></h4>
        <h3>Payment</h3>
        <h4 id="cardNum"><small>Card</small><span></span></h4>
        <h4 id="expDate"><small>Expiry Date</small><span></span></h4>
        <h4 id="cardholder"><small>Cardholder</small><span></span></h4>
        <h4 id="ccv"><small>CCV</small><span></span></h4>

      </div>
    </div>
    <!-- end of content -->

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- scripts -->
    <script src="js/profile.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.4.1/bootstrap-slider.js"></script>
 -->
</body>
<?php
} else {
    header("location:login.html");
}
?>
</html>
