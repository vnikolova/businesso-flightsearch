<?php
session_start();
if(isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
    <title>Businesso - Your business travels organized.</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <?php include_once "header.html" ?>

 <!-- search results -->
      <div class="container" id="">

   <!-- Page Content -->
<section id="services" class="services-section">
      <div class="container" id="">
    <h2>FLIGHT OVERVIEW</h2>
   <hr>
   <div class="row">
      <div class="col-sm-12">
         <div class="col-lg-1">
            <img src="img/departures.png" alt="plane_logo_departure">
         </div>
         <div class="col-lg-4 col-lg-offset-3">
            <h4><strong>CPH - BCN</strong></h4>
         </div>
         <div class="col-lg-2 col-lg-offset-2">
            <h4><strong>225 Dkk</strong></h4>
         </div>
         <br>
         <div class="col-lg-1 col-lg-offset-1">
            <div>
            <br>
               <h4><strong>BCN</strong></h4>
            </div>
         </div>
         <div class="col-lg-3">
            <div>
            <br>
               <p>Departure date: 23/10/2016 </p>
               <p>Departure time: 12:35 </p>
            </div>
         </div>
         <div class="col-lg-1 col-lg-offset-1">
            <div>
            <br>
               <h4><strong>CPH</strong></h4>
            </div>
         </div>
         <div class="col-lg-3">
            <div>
            <br>
               <p>Arrival date: 23/10/2016 </p>
               <p>Arrival time: 13:35 </p>
            </div>
         </div>
      </div>
   </div><!-- /.row -->

      <hr>
   <div class="row">
      <div class="col-sm-12">
         <div class="col-lg-1">
            <img src="img/arrival.png" alt="plane_logo_arrival">
         </div>
         <div class="col-lg-4 col-lg-offset-3">
            <h4><strong>BCN - CPH</strong></h4>
         </div>
         <div class="col-lg-2 col-lg-offset-2">
            <h4><strong>225 Dkk</strong></h4>
         </div>
         <div class="col-lg-1 col-lg-offset-1">
            <div>
            <br>
               <h4><strong>CPH</strong></h4>
            </div>
         </div>
         <div class="col-lg-3">
            <div>
            <br>
               <p>Departure date: 26/10/2016 </p>
               <p>Departure time: 14:35 </p>
            </div>
         </div>
         <div class="col-lg-1 col-lg-offset-1">
            <div>
            <br>
               <h4><strong>BCN</strong></h4>
            </div>
         </div>
         <div class="col-lg-3">
            <div>
            <br>
               <p>Arrival date: 26/10/2016 </p>
               <p>Arrival time: 16:35 </p>
            </div>
         </div>
      </div>
   </div><!-- /.row -->

   <div class="preferencies">
        <div class="row" >
        <br>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="./img/airlinemealbig.jpg" alt="food">
                <h4><strong>Meal preferences</strong></h4>
                <p>Pick your favourite type of meal. You can alsways change your mealpreferencies in your profile.</p>
                <div class="form-group">
                      <select class="form-control" id="sel1">
                        <option>Europe cousine</option>
                        <option>Asian cousine</option>
                        <option>Non gluten</option>
                        <option>Vegan</option>
                        <option>Vegetarian</option>
                      </select>
                </div>
                <button type="button" class="btn btn-default" id="prefButton">Save</button>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="./img/hotel.jpeg" alt="hotels">
                <h4><strong>Accomodation preferences</strong></h4>
                <p>Annoyed of searching acommodation everytime ? We will do it for you !</p>
                <div class="form-group">
                      <select class="form-control" id="sel1">
                        <option label="">Type of accommodation</option>
                        <option>Hotel</option>
                        <option>Apartman</option>
                        <option>Hostel</option>
                      </select>
                </div>
                <div class="form-group">
                      <select class="form-control" id="sel1">
                        <option label="">Price</option>
                        <option>50eur - 100eur (per night)</option>
                        <option>100eur - 200eur (per night)</option>
                        <option>Doesn't matter</option>
                      </select>
                </div>
                <div class="form-group">
                      <select class="form-control" id="sel1">
                        <option label="">Location</option>
                        <option>City center</option>
                        <option>Downtown</option>
                        <option>Suburp</option>
                      </select>
                </div>
                <button type="button" class="btn btn-default" id="prefButton">Save & Search</button>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="./img/seats.jpg" alt="seats">
                <h4><strong>Flight seat preferences</strong></h4>
                <p>We want the best seat for you! Pick seat of the preference and we will try to get it for you.</p>
                <button type="button" class="btn btn-default" id="prefButton">Pick & Save</button>
            </div>
        </div>
        </div>
        <!-- /.row -->

   <hr/>
   <br>
   <div class="col-sm-12">
         <div class="col-lg-1">
            <h4><strong>TOTAL</strong></h4>
         </div>
         <div class="col-lg-4 col-lg-offset-3">
           <label class="checkbox-inline"><input type="checkbox" value="active">Use registered card</label>
           <label class="checkbox-inline"><input type="checkbox" value="">User Paypal account</label>
         </div>
         <div class="col-lg-2 col-lg-offset-2">
            <h4><strong>1025 Dkk</strong></h4>
         </div>

      </div>
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
   <button class="btn btn-default" id="prefButton" data-toggle="modal" data-target="#confirmation" >Purchase</button>
   <button class="btn btn-default backToSearch" id="backToSearchResultsBtn">Back to flight search</button>
</div>
<br>
</div>
</div>
</section><!-- /services .container -->

<br>


   <!-- <footer>
        <div class="footer navbar-fixed-bottom">
            <ul class="nav navbar-nav">
            <li><a>About</a></li>
            <li><a>FAQ</a></li>
            <li><a>Team</a></li>
            </ul>
            <ul class="nav navbar-nav">
            <li><a>&copy; Copyright 2016 Businesso</a></li>
            </ul>
        </div>
    </footer> -->

<!-- Modal Seat picker-->
   <div class="modal fade" id="seatPickerModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <div w3-include-html="seat_picker.html"</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal Confirmation -->
 <!-- Modal -->
  <div class="modal fade" id="confirmation" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirmation</h4>
        </div>
        <div class="modal-body">
          <div style="display:none;" id="myDiv" class="animate-bottom">
          <h2>SUCCESS!</h2>
          <p>Your order was processed succesfully.</p>
          <p>We sent your flight ticket on your email <strong>jp13@gmail.com.</strong></p>
          <p>You can also use a QR code for your mobile device</p>
          <img src="./img/qr.png"/>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <!-- modal end -->


<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/script.js"></script>


</body>
</html>
<?php
} else {
    header("location:login.html");
}
?>
