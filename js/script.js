  $( document ).ready(function() {

  // register bottom
  $(document).on("click", "#registerBtn", function(){
     register()
  });
  function register(){
    $("#login").hide();
    $("#register").show();
  }

  // login bottom
  $(document).on("click", "#loginBtn", function(){
     login()
  });
  function login(){
    $("#login").show();
    $("#register").hide();
  }


  // submit
  $(document).on("click", "#submitBtn", function(){
    //email and password value
    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();

    console.log(username, password, email);


      localStorage.setItem('name', username);
      localStorage.setItem('email', email);
      localStorage.setItem('password', password);

      submitBtn();

  });

  function submitBtn(){
    $("#register").hide();
    $("#login").hide();
    $("#alert").show();
  }

  // sign up
  $(document).on("click", "#signUpBtn", function(){

   // stored data from the register-form
      var storedName = localStorage.getItem('name');
      var storedPw = localStorage.getItem('email');
      var storedPw = localStorage.getItem('password');

      // entered data from the login-form
      var userName =  $("#usernameLog").val();
      var userPw = $("#passwordLog").val();

      // check if stored data from register-form is equal to data from login form
      if(userName == storedName && userPw == storedPw) {
          window.location.assign("search.html");
          $("#chooseFlight").hide();

      }else {
          alert('incorrect username or password');
      }
    });

    // oneWayBtn
    $(document).on("click", "#onewayBtn", function(){
      $("#return").hide();
      $("#oneWay").show();
    });

    // returnBtn
    $(document).on("click", "#returnBtn", function(){
      $("#oneWay").hide();
      $("#return").show();
    });

    // searc btn return
    $(document).on("click", "#searchBtnReturn", function(){
      console.log("x");
      // take values
      var departureDes = $("#departureDes").val();
      var arrivalDes = $("#arrivalDes").val();
      var departureDate = $("#depart").val();
      var arrivalDate = $("#arriveDate").val();
      var passangersnumber = $("#passNumber").val();

      var linkToApi = 'api.php?command=return&departureDes='+departureDes+'&arrivalDes='+arrivalDes+'&departureDate='+departureDate+'&arrivalDate='+arrivalDate+'&passangersnumber='+passangersnumber;
      console.log(linkToApi);
      $.getJSON(linkToApi, function(jData){
        // console.log(jData);
          });

      $("#content").load("results.html");
    });
    // search btn one way
    $(document).on("click", "#searchBtnOneway", function(){
      // take values
      var departureDesOne = $("#departureDesOne").val();
      var arrivalDesOne = $("#arrivalDesOne").val();
      var departOne = $("#departOne").val();
      var passNumberOne = $("#passNumberOne").val();

      var linktoApi = 'api.php?command=oneway&departureDesOne='+departureDesOne+'&arrivalDesOne='+arrivalDesOne+'&departOne='+departOne+'&passNumberOne='+passNumberOne;
      console.log(linktoApi);
      $.getJSON(linktoApi, function(jData){
        // console.log(jData);
          });
      $("#content").load("results.html");
    });

    // datepicker
  $(function () {
    // departure date picker
    $('#depart').datepicker(); // departure date picker
    $('#arriveDate').datepicker();
    // arrival date picker
    $('#departOne').datepicker();
    })



  // });
  // //display values from localhost
  // document.getElementById("displayedUser").innerHTML = localStorage.getItem("name");
  // document.getElementById("displayedName").innerHTML = localStorage.getItem("name");
  // document.getElementById("displayedEmail").innerHTML = localStorage.getItem("email");
  // document.getElementById("displayedPass").innerHTML = localStorage.getItem("password");

   $("#results").hide();
  $(document).on("click", "#loginSubmitted", function(){
   loginSubmitted();
  });
  function loginSubmitted(){
    $("#alert").hide();
    $("#login").show();
  }

  });

  $(document).on("click", ".btn-select", function(){
     window.location.assign("overview.html");
  });
  $(document).on("click", "#backToSearchResultsBtn", function(){
     window.location.assign("index.html");
  });
  $(document).on("click", "#logOut", function(){

  });
  $(document).on("click", "#backToSearchBtn", function(){
  	$("#search").show();
  	$("#results").hide();
  });



  $(".flight-section").mouseover(function(){
    $(this).find(".btn-select").css("display", "block");
  })
  $(".flight-section").mouseout(function(){
    $(this).find(".btn-select").css("display", "none");
  })

  $(".btn-select").click(function() {
    $("#content").load("overview.html");
  })

  function displayResult(item, val, text) {
      console.log(item);
      $('.alert').show().html('You selected <strong>' + val + '</strong>: <strong>' + text + '</strong>');
  }

  $(function () {

      $('.departureDes').typeahead({
          source: [
          { id: 1, name: 'Toronto' },
          { id: 2, name: 'Montreal' },
          { id: 3, name: 'New York' },
          { id: 4, name: 'Buffalo' },
          { id: 5, name: 'Boston' },
          { id: 6, name: 'Columbus' },
          { id: 7, name: 'Dallas' },
          { id: 8, name: 'Vancouver' },
          { id: 9, name: 'Seattle' },
          { id: 10, name: 'Los Angeles' },
          { id: 11, name: 'Copenhagen' },
          { id: 12, name: 'Berlin' },
          { id: 13, name: 'Las Vegas' },
          { id: 14, name: 'Barcelona' },
          { id: 15, name: 'London' },
          { id: 16, name: 'Paris' },
          { id: 17, name: 'Oslo' },
          { id: 18, name: 'Malmo' }
        ],
          itemSelected: displayResult
      });
      $('.arrivalDes').typeahead({
          source: [
          { id: 1, name: 'Toronto' },
          { id: 2, name: 'Montreal' },
          { id: 3, name: 'New York' },
          { id: 4, name: 'Buffalo' },
          { id: 5, name: 'Boston' },
          { id: 6, name: 'Columbus' },
          { id: 7, name: 'Dallas' },
          { id: 8, name: 'Vancouver' },
          { id: 9, name: 'Seattle' },
          { id: 10, name: 'Los Angeles' },
          { id: 11, name: 'Copenhagen' },
          { id: 12, name: 'Berlin' },
          { id: 13, name: 'Las Vegas' },
          { id: 14, name: 'Barcelona' },
          { id: 15, name: 'London' },
          { id: 16, name: 'Paris' },
          { id: 17, name: 'Oslo' },
          { id: 18, name: 'Malmo' }
        ],
          itemSelected: displayResult
      });
      $('#demo3').typeahead({
          source: [
          { id: 1, name: 'Toronto' },
          { id: 2, name: 'Montreal' },
          { id: 3, name: 'New York' },
          { id: 4, name: 'Buffalo' },
          { id: 5, name: 'Boston' },
          { id: 6, name: 'Columbus' },
          { id: 7, name: 'Dallas' },
          { id: 8, name: 'Vancouver' },
          { id: 9, name: 'Seattle' },
          { id: 10, name: 'Los Angeles' },
          { id: 11, name: 'Copenhagen' },
          { id: 12, name: 'Berlin' },
          { id: 13, name: 'Las Vegas' },
          { id: 14, name: 'Barcelona' },
          { id: 15, name: 'London' },
          { id: 16, name: 'Paris' },
          { id: 17, name: 'Oslo' },
          { id: 18, name: 'Malmo' }
        ],
          itemSelected: displayResult
      });

  });

  // search destination
  var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
      var matches, substrRegex;

      // an array that will be populated with substring matches
      matches = [];

      // regex used to determine if a string contains the substring `q`
      substrRegex = new RegExp(q, 'i');

      // iterate through the pool of strings and for any string that
      // contains the substring `q`, add it to the `matches` array
      $.each(strs, function(i, str) {
        if (substrRegex.test(str)) {
          matches.push(str);
        }
      });

      cb(matches);
    };
  };

  // results go back
  $("#backToSearchBtn").click(function(){
       window.location.assign("search.html");
  });

  ////////////////////////// ACCOUNT SETTINGS ///////////////////////////
   $(".personalCrumb").css({"color:": "black"});
  // next btn to prefered destination
  $(document).on("click", ".nextToPreferedDes", function(){
    $(".personalInformation").hide();
    $(".flightDestination").show();
    $(".personalCrumb").css({"color:": "black"});
    $(".flightDesCrumb").css({"font-weight": "800", "font-size": "130%"});
  });

  // next btn to accomodation
  $(document).on("click", ".nextToAccomodation", function(){
    $(".flightDestination").hide();
    $(".accomodation").show();
    $(".flightDesCrumb").css({"font-weight": "400", "font-size": "100%"});
    $(".accomodationCrumb").css({"font-weight": "800", "font-size": "130%"});
  });

  // price bar
  var rng = document.querySelector("#range");
  var listener = function() {
    window.requestAnimationFrame(function() {
      document.querySelector(".price").innerHTML = rng.value + " &euro;";
    });
  };

  // rng.addEventListener("mousedown", function() {
  //   listener();
  //   rng.addEventListener("mousemove", listener);
  // });
  // rng.addEventListener("mouseup", function() {
  //   rng.removeEventListener("mousemove", listener);
  // });

  // plus baggage btn
  $(document).on("click", ".plusBaggageBtn", function(){
    console.log("x");
    $(".addBaggage").hide();
    $(".baggageAdded").show();
    $(".plusBaggageBtn").hide();
  });

  // plus meal btn
  $(document).on("click", ".plusMealBtn", function(){
    // console.log("x");
    $(".addMeal").hide();
    $(".mealAdded").show();
    $(".plusMealBtn").hide();
  });

  // next btn to services
  $(document).on("click", ".nextToServices", function(){
    $(".accomodation").hide();
    $(".services").show();
    $(".accomodationCrumb").css({"font-weight": "400", "font-size": "100%"});
    $(".servicesCrumb").css({"font-weight": "800", "font-size": "130%"});
  });

  // next to payment
  $(document).on("click", ".nextToPayment", function(){
    console.log("x");
    $(".services").hide();
    $(".payment").show();
    $(".servicesCrumb").css({"font-weight": "400", "font-size": "100%"});
    $(".paymentCrumb").css({"font-weight": "800", "font-size": "130%"});
  });

  $("#popover").popover({ trigger: "hover" });

  // sumbit payment
  $(document).on("click", "#submitPaymentBtn", function(){
     window.location.assign("confirmation.html");
  });

$("#popover").popover({ trigger: "hover" });

$(function() {

    // switch for one way
  $("#returnOn").on("click",function(e) {
    e.preventDefault();
    $("#return").hide();
    $("#oneWay").show();
  });
  // switch for return
  $("#returnOff").on("click",function(e) {
    e.preventDefault();
    $("#return").show();
    $("#oneWay").hide();
  });


});
//display values from localhost
document.getElementById("displayedUser").innerHTML = localStorage.getItem("name");
document.getElementById("displayedName").innerHTML = localStorage.getItem("name");
document.getElementById("displayedEmail").innerHTML = localStorage.getItem("email");
document.getElementById("displayedPass").innerHTML = localStorage.getItem("password");

 $("#results").hide();
$(document).on("click", "#loginSubmitted", function(){
 loginSubmitted();
});
function loginSubmitted(){
  $("#alert").hide();
  $("#login").show();
}

});

// search btn
$(document).on("click", "#searchBtn", function(){
  $("#search").hide();
  $("#results").show();
  $("#chooseFlight").show();
});
$(document).on("click", ".btn-select", function(){
   window.location.assign("overview.html");
});
$(document).on("click", "#backToSearchResultsBtn", function(){
   window.location.assign("index.html");
});
$(document).on("click", "#logOut", function(){
	 window.location.assign("index.html");
});
$(document).on("click", "#backToSearchBtn", function(){
	$("#search").show();
	$("#results").hide();
});



$(".flight-section").mouseover(function(){
  $(this).find(".btn-select").css("display", "block");
})
$(".flight-section").mouseout(function(){
  $(this).find(".btn-select").css("display", "none");
})

$(".btn-select").click(function() {
  $("#content").load("overview.html");
})

 });
