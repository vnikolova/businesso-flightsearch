
<!DOCTYPE html>
<html>

<head>
    <title>Businesso - Your business travels organized.</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">

    <style>
    body{
         background: url("back.jpg");
        background-size: cover;
    }
    </style>

</head>


    <body>
      <?php include_once "header.html" ?>
      <!-- search results -->
        <div class="container" id="results">

        </div>
        <!-- end of the search results -->


        <!-- choose flights header section begin -->
        <div class="container-fluid">
          <div class="col-lg-4 col-lg-offset-1">


          <div id="results" class="" style="margin-top: 50px;">
              <ol class="breadcrumb breadcrumb-arrow">
                  <li><a href="search.php">Search</a></li>
                  <li class="active"><span>Select Flight</span></li>
                  <li class="active" style="opacity: 0.5"><span>Overview</span></li>
              </ol>
          </div>
          </div>
            <!-- choose flights header section begin -->
            <div class="" id="chooseFlight">
                <div class="col-xs-10 col-xs-offset-1">
                    <h3>Choose Flights</h3> <br>
                </div>
                <!-- search combination begin -->
                <div class="row flight-section">
                    <div class="col-xs-10 col-xs-offset-1">
                        <div class="row" style="border:1px solid black;">
                          <div class="panel panel-default" >
                            <div class="panel-heading" style="height:60px;">
                              <div class="col-lg-4">
                                <img src="img/departures.png" alt="plane_logo_departure">
                              </div>
                              <div class="col-lg-4">
                                <h3 style="margin-top:5px;">
                                <?php
                                $receivedDeparture = $_GET['departureDes'];
                                    echo $receivedDeparture;
                                ?>
                                -
                                <?php
                                $receivedArrival = $_GET['arrivalDes'];
                                    echo $receivedArrival;
                                ?>
                                </h3>
                              </div>

                            </div>
                          </div>
                            <div class="panel-body">
                              <div class="col-lg-4">
                                <h3>
                                <?php
                                $departureDate = $_GET['departureDate'];
                                    echo $departureDate;
                                ?>
                                </h3>
                              </div>
                              <div class="col-lg-4">
                                <h3> 9:00</h3>
                              </div>
                              <div class="col-lg-4">
                                <h3>300 dkk</h3>
                              </div>
                            </div>
</div>
                            <div class="row">
                                <div class="col-xs-2 col-xs-offset-9">
                                    <button type="button" class="btn btn-select selectBtn">SELECT</button>
                                </div>
                            </div>
                          </div>

</div>
  <div class="row flight-section">
      <div class="col-xs-10 col-xs-offset-1">
                          <div class="row" style="border:1px solid black;">
                            <div class="panel panel-default" >
                              <div class="panel-heading" style="height:60px;">
                                <div class="col-lg-4">
                                  <img src="img/departures.png" alt="plane_logo_departure">
                                </div>
                                <div class="col-lg-4">
                                  <h3 style="margin-top:5px;">
                                  <?php
                                  $receivedDeparture = $_GET['departureDes'];
                                      echo $receivedDeparture;
                                  ?>
                                  -
                                  <?php
                                  $receivedArrival = $_GET['arrivalDes'];
                                      echo $receivedArrival;
                                  ?>
                                  </h3>
                                </div>

                              </div>
                            </div>
                              <div class="panel-body">
                                <div class="col-lg-4">
                                  <h3>
                                  <?php
                                  $departureDate = $_GET['departureDate'];
                                      echo $departureDate;
                                  ?>
                                  </h3>
                                </div>
                                <div class="col-lg-4">
                                  <h3> 13:00</h3>
                                </div>
                                <div class="col-lg-4">
                                  <h3>250 dkk</h3>
                                </div>
                              </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-2 col-xs-offset-9">
                                    <button type="button" class="btn btn-select selectBtn">SELECT</button>
                                </div>
                            </div>
                        </div>

          </div>

          <div class="row flight-section">
              <div class="col-xs-10 col-xs-offset-1">
                                  <div class="row" style="border:1px solid black;">
                                    <div class="panel panel-default" >
                                      <div class="panel-heading" style="height:60px;">
                                        <div class="col-lg-4">
                                          <img src="img/departures.png" alt="plane_logo_departure">
                                        </div>
                                        <div class="col-lg-4">
                                          <h3 style="margin-top:5px;">
                                          <?php
                                          $receivedDeparture = $_GET['departureDes'];
                                              echo $receivedDeparture;
                                          ?>
                                          -
                                          <?php
                                          $receivedArrival = $_GET['arrivalDes'];
                                              echo $receivedArrival;
                                          ?>
                                          </h3>
                                        </div>

                                      </div>
                                    </div>
                                      <div class="panel-body">
                                        <div class="col-lg-4">
                                          <h3>
                                          <?php
                                          $departureDate = $_GET['departureDate'];
                                              echo $departureDate;
                                          ?>
                                          </h3>
                                        </div>
                                        <div class="col-lg-4">
                                          <h3> 18:00</h3>
                                        </div>
                                        <div class="col-lg-4">
                                          <h3>890 dkk</h3>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2 col-xs-offset-9">
                                            <button type="button" class="btn btn-select selectBtn">SELECT</button>
                                        </div>
                                    </div>
                                </div>

                  </div>
            <!-- footer -->
            <div class="panel-footer">
                <p style="text-align:center; padding:15px;">Copyright &copy; Businesso 2016 Copenhagen</p>
                <div id="footer" style="margin-top:-20px;">
                    <a href="#"> Contact </a>|
                    <a href="#"> FAQ </a>|
                    <a href="#"> About </a>
                </div>
            </div>
        </div>


        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- typeahead CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
        <!-- scripts -->
        <script src="js/script.js"></script>
        <!-- datepicker CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
        <script>
        </script>

    </body>


</html>
