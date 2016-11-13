<?php
session_start();
if(isset($_SESSION['username'])) {

?>
<html>
<head>
      <title>Businesso - Your business travels organized.</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--my style -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
<link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
<style>
body{
        background: url('img/background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
</head>

<body>
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
                <li><a href="login.html" id="logOutBtn">Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul> <!-- end of the right nav bar -->
      </div>
        </nav> <!-- Navigation END -->

        <div class="container" id="content">
        	<div class="row">
        		<div class="col-lg-12 title">
		            <br><br>
		            <h1 style="color:white;font-family: 'Paytone One', sans-serif; letter-spacing:4px;">WHERE TO GO ?</h1>
		        </div>
        	</div>
        	<div class="row">
			    <div class="col-lg-4 col-md-offset-4">
			      	<br>
			      	<!-- return -->
			      	<div id="return">
			      		<div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-default active" id="returbBtn">return</button>
						  <button type="button" class="btn btn-default" id="onewayBtn">one way</button>
						</div>
                  <div class="form-group"><br>
                      <!-- departure -->
                       <div class="inner-addon left-addon">
                        <img src="img/departures.png" class="glyphicon">
                        <input type="text" id="departureDes" class="form-control departureDes" placeholder="FROM"/>
                    </div>
                  </div>
                  <div class="form-group">
                     <!-- arrival -->
                     <div class="inner-addon left-addon">
                      <img src="img/arrival.png" class="glyphicon">
                      <input type="text" id="arrivalDes" class="form-control arrivalDes" placeholder="TO"/>
                    </div>
                  </div>
              <form class="form-inline">
                  <div class="form-group">
                       <!-- departure date -->
                       <div class="inner-addon left-addon">
                        <img src="img/calendar.png" class="glyphicon">
                          <input id="depart" class="datepicker form-control depart"  placeholder="dd/mm/yy " style="width:150px; height:55px;">
                      </div>
                  </div>
                  <div class="form-group">
                       <!-- arrival date -->
                       <div class="inner-addon left-addon">
                        <img src="img/calendar.png" class="glyphicon">
                          <input id="arriveDate" class="datepicker form-control arriveDate"  placeholder="dd/mm/yy " style="width:150px;height:55px;">
                      </div>
                  </div>
                   <!-- passangers -->
                  <div class="form-group" style="margin-left:0px;">
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                          <select class="selectpicker passNumber" id="passNumber">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                          </select>
                      </label>
                  </div>
              </form><br>
               <button type="button" class="btn form-control searchBtn" id="searchBtnReturn">search</button>
			</div> <!-- end of return -->
			<div id="oneWay" style="display:none;">
				<!-- oneway -->
			      	<div id="return">
			      		<div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-default" id="returnBtn">return</button>
						  <button type="button" class="btn btn-default active" id="onewayBtn">one way</button>
						</div>

                  <div class="form-group"><br>
                      <!-- departure -->
                       <div class="inner-addon left-addon">
                        <img src="img/departures.png" class="glyphicon">
                        <input type="text" id="departureDesOne" class="form-control departureDes" placeholder="FROM"/>
                    </div>
                  </div>
                  <div class="form-group">
                     <!-- arrival -->
                     <div class="inner-addon left-addon">
                      <img src="img/arrival.png" class="glyphicon">
                      <input type="text" id="arrivalDesOne" class="form-control arrivalDes" placeholder="TO"/>
                    </div>
                  </div>
              <form class="form-inline">
                  <div class="form-group">
                       <!-- departure date -->
                       <div class="inner-addon left-addon">
                        <img src="img/calendar.png" class="glyphicon">
                          <input id="departOne" class="datepicker form-control depart"  placeholder="dd/mm/yy " style="width:150px; height:55px;">
                      </div>
                  </div>
                   <!-- passangers -->
                  <div class="form-group" style="margin-left:0px;">
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                          <select class="selectpicker passNumberOne" id="passNumberOne">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                          </select>
                      </label>
                  </div>
              </form><br>
               <button type="button" class="btn form-control searchBtn" id="searchBtnOneway">search</button>
			</div>
			</div>
	    </div>
	</div> <!-- end of the container -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- our scripts -->
<script src="js/script.js"></script>
 <!-- datepicker CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <!-- typeahead CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
</body>

</html>
<?php
  } else {
      header("location:login.html");
  }
?>
