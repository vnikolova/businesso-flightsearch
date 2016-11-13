
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
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container wraper">
                <!-- Brand and toggle get grouped for better mobile display -->
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
                                <li><a href="#" data-toggle="modal" data-target="#myModal">My Profile</a></li>
                                <li><a href="login.html" id="logOutBtn">Log Out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- end of the right nav bar -->
            </div>
        </nav>
        <!-- Navigation END -->
        <br><br>


        <!-- search results -->
        <div class="container" id="results">
            <!-- breadcrumb -->
            <div id="results" class="" style="margin-top: 50px;">
                <ol class="breadcrumb breadcrumb-arrow">
                    <li><a href="search.php">Search</a></li>
                    <li class="active"><span>Select Flight</span></li>
                    <li class="active" style="opacity: 0.5"><span>Overview</span></li>
                </ol>
            </div>
            <!-- go back btn -->
            <div class="col-xs-2">
                <div class="btn btn-info" id="backToSearchBtn">
                    Go Back
                </div>
            </div>
            <!-- sort by -->
            <div class="col-xs-1 col-xs-offset-4 center">
                <label>SORT BY:</label>
            </div>
            <!-- sort -> select -->
            <div class="col-xs-2">
                <select class="form-control" style="margin-top: -8px;">
            <option>Best Match</option>
            <option>Price: Ascending</option>
            <option>Price: Descending</option>
          </select>
            </div>
            <!-- change preferences -->
            <div class="col-xs-3">
                <span class="glyphicon glyphicon-cog"></span>
                <span>CHANGE PREFERECES</span>
            </div>
        </div>
        <!-- end of the search results -->
        <br>

        <!-- choose flights header section begin -->
        <div class="container-fluid">
            <!-- choose flights header section begin -->
            <div class="" id="chooseFlight">
                <div class="col-xs-10 col-xs-offset-1">
                    <h3>Choose Flights</h3>
                </div>
                <!-- search combination begin -->
                <div class="row flight-section">
                    <div class="col-xs-10 col-xs-offset-1" style="border: 2px solid black;">
                        <div class="row">
                            <div class="col-xs-12" id="blue">

                                <div class="col-lg-1">
                                    <img src="img/departures.png" alt="plane_logo_departure">
                                </div>

                                <div class="col-lg-3">
                                    <div class="receivedDeparture">
                                        <h3>
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
                                 <div class="col-lg-3">
                                    <div class="receivedDeparture">
                                        <h3>
                                        <?php
                                        $departureDate = $_GET['departureDate'];
                                            echo $departureDate;
                                        ?>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h3>
                                        09:35
                                    </h3>
                                </div>
                                <div class="col-lg-2 ">
                                    <h3>225 dkk</h3>
                                </div>

                            </div>
                        </div>

                        <div class="row" style="border-top: 2px solid black">
                            <div class="col-lg-12" id="blue">
                                <div class="col-lg-1">
                                    <img src="img/arrival.png" alt="plane_logo_arrival">
                                </div>

                                <div class="col-lg-3">
                                   <h3>

                                        <?php
                                        $receivedArrival = $_GET['arrivalDes'];
                                            echo $receivedArrival;
                                        ?>
                                        -
                                        <?php
                                        $receivedDeparture = $_GET['departureDes'];
                                            echo $receivedDeparture;
                                        ?>
                                        
                                        </h3>
                                </div>
                                <div class="col-lg-3">
                                    <h3>
                                        <?php
                                        $arrivalDate = $_GET['arrivalDate'];
                                            echo $arrivalDate;
                                        ?>
                                    </h3>
                                </div>

                                <div class="col-lg-3">
                                    <h3>
                                        17:40
                                    </h3>
                                </div>

                                <div class="col-lg-2">
                                    <h3>400 dkk</h3>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- col -->
                    <div class="row">
                        <div class="col-xs-2 col-xs-offset-9">
                            <button type="button" class="btn btn-info btn-select">Select</button>
                        </div>
                    </div>
                </div>
                
                <div class="row flight-section">
                    <div class="col-xs-10 col-xs-offset-1" style="border: 2px solid black;">
                        <div class="row">
                            <div class="col-xs-12" id="blue">

                                <div class="col-lg-1">
                                    <img src="img/departures.png" alt="plane_logo_departure">
                                </div>

                                <div class="col-lg-3">
                                    <div class="receivedDeparture">
                                        <h3>
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
                                 <div class="col-lg-3">
                                    <div class="receivedDeparture">
                                        <h3>
                                        <?php
                                        $departureDate = $_GET['departureDate'];
                                            echo $departureDate;
                                        ?>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h3>
                                        13:45
                                    </h3>
                                </div>
                                <div class="col-lg-2 ">
                                    <h3>130 dkk</h3>
                                </div>

                            </div>
                        </div>

                        <div class="row" style="border-top: 2px solid black">
                            <div class="col-lg-12" id="blue">
                                <div class="col-lg-1">
                                    <img src="img/arrival.png" alt="plane_logo_arrival">
                                </div>

                                <div class="col-lg-3">
                                   <h3>

                                        <?php
                                        $receivedArrival = $_GET['arrivalDes'];
                                            echo $receivedArrival;
                                        ?>
                                        -
                                        <?php
                                        $receivedDeparture = $_GET['departureDes'];
                                            echo $receivedDeparture;
                                        ?>
                                        
                                        </h3>
                                </div>
                                <div class="col-lg-3">
                                    <h3>
                                        <?php
                                        $arrivalDate = $_GET['arrivalDate'];
                                            echo $arrivalDate;
                                        ?>
                                    </h3>
                                </div>

                                <div class="col-lg-3">
                                    <h3>
                                        6:40
                                    </h3>
                                </div>

                                <div class="col-lg-2">
                                    <h3>900 dkk</h3>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- col -->
                    <div class="row">
                        <div class="col-xs-2 col-xs-offset-9">
                            <button type="button" class="btn btn-info btn-select">Select</button>
                        </div>
                    </div>
                </div>

                <div class="row flight-section">
                    <div class="col-xs-10 col-xs-offset-1" style="border: 2px solid black;">
                        <div class="row">
                            <div class="col-xs-12" id="blue">

                                <div class="col-lg-1">
                                    <img src="img/departures.png" alt="plane_logo_departure">
                                </div>

                                <div class="col-lg-3">
                                    <div class="receivedDeparture">
                                        <h3>
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
                                 <div class="col-lg-3">
                                    <div class="receivedDeparture">
                                        <h3>
                                        <?php
                                        $departureDate = $_GET['departureDate'];
                                            echo $departureDate;
                                        ?>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h3>
                                        13:30
                                    </h3>
                                </div>
                                <div class="col-lg-2 ">
                                    <h3>500 dkk</h3>
                                </div>

                            </div>
                        </div>

                        <div class="row" style="border-top: 2px solid black">
                            <div class="col-lg-12" id="blue">
                                <div class="col-lg-1">
                                    <img src="img/arrival.png" alt="plane_logo_arrival">
                                </div>

                                <div class="col-lg-3">
                                   <h3>

                                        <?php
                                        $receivedArrival = $_GET['arrivalDes'];
                                            echo $receivedArrival;
                                        ?>
                                        -
                                        <?php
                                        $receivedDeparture = $_GET['departureDes'];
                                            echo $receivedDeparture;
                                        ?>
                                        
                                        </h3>
                                </div>
                                <div class="col-lg-3">
                                    <h3>
                                        <?php
                                        $arrivalDate = $_GET['arrivalDate'];
                                            echo $arrivalDate;
                                        ?>
                                    </h3>
                                </div>

                                <div class="col-lg-3">
                                    <h3>
                                        8:40
                                    </h3>
                                </div>

                                <div class="col-lg-2">
                                    <h3>200 dkk</h3>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- col -->
                    <div class="row">
                        <div class="col-xs-2 col-xs-offset-9">
                            <button type="button" class="btn btn-info btn-select">Select</button>
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

