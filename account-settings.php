<html>
<head>
    <title>Businesso - Your business travels organized.</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- <link rel="stylesheet" type="text/css" href="css/loginStyles.css">
-->
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
session_start();
if(isset($_SESSION['username'])) {

?>
  	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container wraper">
        <!-- Brand and toggle get grouped for bestter mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <p class="logoTxtProfile">
              <img src="img/paper-airplane-icon.png" alt="businesso_logo"> Businesso
            </p>
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user welcomeUser"></span> <span id="displayedUser"></span></a></li>
          <li>
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#"data-toggle="modal" data-target="#myModal">My Profile</a></li>
                <li><a href="login.html" id="logOutBtn" >Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul> <!-- end of the right nav bar -->
      </div>
    </nav> <!-- Navigation END --> <br><br><br><br><br>
    <!-- content -->
    <div class="container">
    	<!-- breadcrumbs for a timeline -->
    	<div class="col-lg-10 col-lg-offset-1">
	    	<ul class="breadcrumb" style="text-align:center; background-color:white;">
			  <li class="personalCrumb">personal information</li>
			  <li class="flightDesCrumb">flight destination</li>
			  <li class="accomodationCrumb">accomodation</li>
			  <li class="servicesCrumb">services</li>
			  <li class="paymentCrumb">payment info</li>
			</ul>
		</div>

		<!-- personal information -->
		<div class="col-lg-4 col-lg-offset-4">
			<!-- personal information -->
			<div class="personalInformation">
				<h3><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> PERSONAL INFORMATION</h3> <br><br>
				<!-- name -->
				<div class="form-group">
					<input type="text" class="form-control" placeholder="name and surname">
				</div>
				<!-- passport /id -->
				<div class="form-group">
					<input type="text" class="form-control" placeholder="passport / ID">
				</div>
				<!-- date of birth -->
				<div class="form-group">
                   <div class="inner-addon left-addon ">
                    <img src="img/calendar.png" class="glyphicon">
                      <input id="depart" class="datepicker form-control depart"  placeholder="date of birth " style="height:50px;">
                  </div>
				</div>
				<!-- mobile -->
				<div class="form-group">
					<input type="text" class="form-control" placeholder="mobile">
				</div>
				<!-- next -->
				<div class="form-group">
					<button type="button" class="btn btn-default form-control active nextToPreferedDes" > NEXT </button>
				</div>
				<!-- or skip -->
				<div class="form-group">
					<button type="button" class="btn btn-default skipBtn nextToPreferedDes"> or skip </button>
				</div>
			</div> <!-- end of personal information -->

			<!-- flight destination  -->
			<div class="flightDestination" id="flightDestination" style="display:none;">
				<h3><span class="glyphicon glyphicon-plane" aria-hidden="true"></span> FLIGHT DESTINATION</h3> <br>
				<!-- travel from.. -->
				<div class="form-group">
					<input type="text" class="form-control" placeholder="travel from...">
				</div>
				<!-- travel to.. -->
				<div class="form-group">
					<input type="text" class="form-control" placeholder="travel to...">
				</div>
				<!-- prefered time -->
				<div class="form-group">
					<input type="text" class="form-control" placeholder="prefered time">
				</div>
				<!-- next -->
				<div class="form-group">
					<button type="button" class="btn btn-default active form-control nextToAccomodation"> NEXT </button>
				</div>
				<!-- or skip -->
				<div class="form-group">
					<button type="button" class="btn btn-default skipBtn nextToAccomodation"> or skip </button>
				</div>
			</div> <!-- flight destination -> END  -->

			<!-- accomodation  -->
			<div class="accomodation" style="display:none;">
				<h3><span class="glyphicon glyphicon-home" aria-hidden="true"></span> ACCOMODATION</h3>
				<!-- price slider -->
				<div class="form-group accomodationTypes"><br>
					<div class="price">500 &euro;</div>
					<input type="range"/ id="range" min="100" max="1000">


				</div><br>
				<!-- type of accomodation -->
				<div class="form-group">
					<label class="checkbox-inline"><input type="checkbox" value="">hotel</label>
					<label class="checkbox-inline"><input type="checkbox" value="">apartment</label>
				</div> <br>
				<!-- number of rooms-->
				<div class="form-group">
					<select class="form-control">
						<option selected disabled>number of rooms</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div> <br>
				<!-- next -->
				<div class="form-group">
					<button type="button" class="btn btn-default active form-control nextToServices"> NEXT </button>
				</div>
				<!-- or skip -->
				<div class="form-group">
					<button type="button" class="btn btn-default skipBtn nextToServices"> or skip </button>
				</div>
			</div> <!-- accomodation -> END  -->

			<!-- services  -->
			<div class="services" style="display:none;">
				<h3><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> SERVICES</h3>
				<!-- price slider -->
				<div class="form-group"><br>
					<button type="button" class="plusBaggageBtn"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
					 <span class="addBaggage">add an extra baggage</span>
					 <span class="baggageAdded" style="display:none;">extra baggage added!</span>
				</div>
				<!-- price slider -->
				<div class="form-group"><br>
					<button type="button" class="plusMealBtn"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
					 <span class="addMeal">add a meal</span>
					 <span class="glyphicon glyphicon-question-sign mealAdded" id="popover" data-trigger="hover" data-content="menu according to the service on the board" aria-hidden="true" style="display:none;"></span> meal added!
				</div><br>
				<!-- seat -->
				<div class="form-group">
					<select class="form-control">
						<option selected disabled>seat preference</option>
						<option>window seat</option>
						<option>middle seat</option>
						<option>corner seat</option>
						<option>extra space for legs </option>
					</select>
				</div> <br>
				<!-- next -->
				<div class="form-group">
					<button type="button" class="btn btn-default active form-control nextToPayment"> NEXT </button>
				</div>
				<!-- or skip -->
				<div class="form-group">
					<button type="button" class="btn btn-default skipBtn nextToPayment"> or skip </button>
				</div>
			</div> <!-- services -> END  -->

			<!-- payment  -->
			<div class="payment" style="display:none;">
				<h3><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span class="divTitles"> PAYMENT</h3> <br><br>
				<!-- card number -->
				<div class="form-group">
					<input type="text" class="form-control" placeholder="card number">
				</div>
				<!-- date of expire-->
				<div class="form-group">
                   <div class="inner-addon left-addon ">
                    <img src="img/calendar.png" class="glyphicon">
                      <input id="depart" class="datepicker form-control depart"  placeholder="ex. date " style="height:50px;">
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
				<!-- next -->
				<div class="form-group">
					<button type="button" class="btn btn-default form-control active saveBtn" > SAVE </button>
				</div>
			</div> <!-- services -> END  -->
		</div>
    </div>


<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script><!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- scripts -->
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.4.1/bootstrap-slider.js"></script>

<?php
} else {
    header("location:login.html");
}
?>

</body>
</html>
