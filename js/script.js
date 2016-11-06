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

  // search btn
  $(document).on("click", "#searchBtn", function(){
     //window.open("results.html")
    // values from inputs
    var departureDes = $("#departureDes").val();
    var arrivalDes = $("#arrivalDes").val();
    var departDate = $("#depart").val();
    var arriveDate = $("#arriveDate").val();
    var passangers = $('#passNumber :selected').text();
    // link to api
    var linkToApi = 'api.php?command=save&departureDes='+departureDes+'&arrivalDes='+arrivalDes+'&departDate='+departDate+'&arriveDate='+arriveDate+'&passangers='+passangers;
    console.log(linkToApi);
    $.getJSON(linkToApi, function(jData){
        console.log(jData);
          });


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

      $('#demo1').typeahead({
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
      $('#demo2').typeahead({
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

  $(function () {

      $('#demo4').typeahead({
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
  // datepicker
  $(function () {
    // departure date picker
    $('#depart').datepicker(); // departure date picker
    $('#departOneWay').datepicker();
    // arrival date picker
    $('#arriveDate').datepicker();
    })

  // results go back 
  $("#backToSearchBtn").click(function(){
       window.location.assign("search.html");
  });

