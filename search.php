
<html>
<head>
  <title>Businesso - Your business travels organized.</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--my style -->
<link rel="stylesheet" href="css/style.css" media="screen" title="no title"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
<style>
body{
        background: url('img/airplane.jpg');
        /*-webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px);*/
        background-repeat: no-repeat;
        background-size: cover;
    }
    .dropdown-toggle{
      margin-top:35px;
      background-color: transparent;
      color: white;

    }

</style>
</head>

<body>
  <?php include_once "header.html" ?>
        <div class="container" id="content" >
        	<div class="row">
        		<div class="col-lg-12">
		            <h1 class="title">WHERE TO GO ?</h1>
		        </div>
        	</div><br>
          <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
              <!-- tabs -->
              <ul class="nav nav-tabs" id="myTab">
              <li class="active"><a data-toggle="tab" href="#return">return</a></li>
              <li><a data-toggle="tab" href="#oneway">one way</a></li>
          </ul>
          <div class="tab-content">
              <div id="return" class="tab-pane fade in active">
                <form class="form-inline">
                  <!-- return -->
                  <div class="form-group"><br>
                      <!-- departure -->
                        <img src="img/departures.png" class="glyphicon planeIcons">
                        <input type="text" id="departureDes" class="departureDes active" placeholder="FROM ..."/>
                  </div>
                <div class="form-group" style="margin-top:20px; margin-left:0px; ">
                   <!-- arrival -->
                    <img src="img/arrival.png" class="glyphicon planeIcons">
                    <input type="text" id="arrivalDes" class="arrivalDes" placeholder="TO ... "/>
                </div>
                </form>
            <form class="form-inline">
                <div class="form-group">
                     <!-- departure date -->
                      <img src="img/calendar.png" class="glyphicon planeIcons">
                        <input type="text" id="depart" class="datepicker depart"  placeholder="DEPARTURE  " style="width:150px; height:55px;">
                </div>
                <div class="form-group">
                     <!-- arrival date -->
                      <img src="img/calendar.png" class="glyphicon planeIcons">
                        <input type="text" id="arriveDate" class="datepicker arriveDate"  placeholder="ARRIVAL " style="width:150px;height:55px;">
                </div>
                 <!-- passangers -->
                <div class="form-group" style="margin-left:0px;">
                    <span class="glyphicon glyphicon-user planeIcons" aria-hidden="true"></span>
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
            <button type="button" class="btn form-control searchBtn active" id="searchBtnReturn">SEARCH</button>

              </div>
              <div id="oneway" class="tab-pane fade">
                <form class="form-inline">
                              <div class="form-group"><br>
                                  <!-- departure -->
                                    <img src="img/departures.png" class="glyphicon planeIcons">
                                    <input type="text" id="departureDesOne" class="departureDes" placeholder="FROM ... "/>
                              </div>
                              <div class="form-group"  style="margin-top:20px; margin-left:0px; ">
                                 <!-- arrival -->
                                  <img src="img/arrival.png" class="glyphicon planeIcons">
                                  <input type="text" id="arrivalDesOne" class="arrivalDes" placeholder="TO ... "/>
                              </div>
                          </form>
                          <form class="form-inline">
                              <div class="form-group">
                                   <!-- departure date -->
                                    <img src="img/calendar.png" class="glyphicon planeIcons">
                                      <input type="text" id="departOne" class="datepicker depart"  placeholder="dd/mm/yy " style="width:150px; height:55px;">
                              </div>
                               <!-- passangers -->
                              <div class="form-group" style="margin-left:0px;">
                                  <span class="glyphicon glyphicon-user planeIcons" aria-hidden="true"style="margin-left:30px;"></span>
                                      <select class="selectpicker passNumberOne" style="margin-left:5px;" id="passNumberOne">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                      </select>
                                  </label>
                              </div>
                            </form>
                            <br>
                            <button type="button" class="btn form-control searchBtn active" id="searchBtnOneway">SEARCH</button>
              </div>
          </div>
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
