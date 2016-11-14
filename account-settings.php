<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/account.css">
  </head>
  <body>
    <!-- multistep form -->
    <form id="msform" action="./" method="post" name="msForm">
    	<!-- progressbar -->
    	<ul id="progressbar">
    		<li class="active">Travel Information</li>
    		<li>Flight Destination</li>
    		<li>Accommodation</li>
        <li>Services</li>
        <li>Payment</li>
    	</ul>
    	<!-- fieldsets -->

      <!-- section one - personal info -->
    	<fieldset>

        We need just a few things to set up your profile. Fill in or leave blank for now.
        You have full control of your profile.
    		<h2 class="fs-title">Travel Information</h2>
          <!-- personal information -->
          <div class="personalInformation">

            <!-- passport /id -->
            <div class="form-group">
              <input type="text" class="form-control" placeholder="passport / ID" name="passport_ID">
            </div>

            <!-- mobile -->
            <div class="form-group">
              <input type="text" class="form-control" placeholder="mobile" name="mobile">
            </div>
          </div> <!-- end of personal information -->
    		<input type="button" name="next" class="next action-button" value="Next" />
        <a href="search.php">Skip for now</a>
    	</fieldset>

<!-- section two - flight destination -->
    	<fieldset>
    		<h2 class="fs-title"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
          Flight Destination</h2>
          <!-- travel from.. -->
          <div class="form-group">
            <input type="text" class="form-control" name="departure" placeholder="travel from...">
          </div>
          <!-- prefered time -->
          <div class="form-group">
            <input type="text" class="form-control" name="departureTime" placeholder="prefered time">
          </div>
    		<input type="button" name="previous" class="previous action-button" value="Previous" />
    		<input type="button" name="next" class="next action-button" value="Next" />
    	</fieldset>
      <!-- flight destination -> END  -->

      <!-- section 3 - accommmodation -->
    	<fieldset>
    		<h2 class="fs-title"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
          Accommodation</h2>
          <!-- price slider -->
          <div class="form-group accomodationTypes"><br>
            <div class="price">500 &euro;</div>
            <input type="range" name="accommo_PriceMax" id="range" min="100" max="1000">
          </div>
          <!-- type of accomodation -->
          <div class="form-group">
            <label class="checkbox"><input type="checkbox" name="accommo_Type" value="">hotel</label>
            <label class="checkbox"><input type="checkbox" value="">apartment</label>
            <label class="checkbox"><input type="checkbox" value="">other</label>
          </div>
          <!-- number of rooms-->
          <div class="form-group">
            <select class="form-control" name="accommo_Rooms">
              <option selected disabled>number of rooms</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
    		<input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    	</fieldset>

      <!-- section four - services -->
      <fieldset>
    		<h2 class="fs-title"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        Services</h2>
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
          <select class="form-control" name="seat">
            <option selected disabled>seat preference</option>
            <option>front-window</option>
            <option>rear-window</option>
            <option>front-aisle</option>
            <option>rear-aisle</option>
            <option>other</option>
          </select>
        </div>
    		<input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    	</fieldset>

      <!-- section 5- payment -->
      <fieldset>
    		<h2 class="fs-title"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span class="divTitles">
        Payment</h2>
        <!-- card number -->
        <div class="form-group">
          <input type="text" class="form-control" placeholder="card number" name="card_Num">
        </div>
        <!-- date of expire-->
        <div class="form-group">
          <div class="inner-addon left-addon ">
            <img src="img/calendar.png" class="glyphicon">
              <input id="depart" class="datepicker form-control depart" name="card_Date"  placeholder="ex. date " style="height:50px;">
          </div>
        </div>
        <!-- card holder -->
        <div class="form-group">
          <input type="text" name="card_Name" class="form-control" placeholder="card holder">
        </div>
        <!-- cvr -->
        <div class="form-group">
          <input type="text" name="card_ccv" class="form-control" placeholder="CCV">
        </div>
    		<input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
    	</fieldset>
    </form>

    <!-- jQuery -->
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

    <script src="js/account.js" type="text/javascript">


    </script>
  </body>
</html>
