$( document ).ready(function() {

  // register bottom
  $(document).on("click", "#registerBtn", function(){
    $("#login").hide();
    $("#register").show();
  });

  // login bottom
  $(document).on("click", "#loginBtn", function(){
    $("#login").show();
    $("#register").hide();
  });

  // register submit
  $(document).on('submit','#registerForm', function(){
    $.ajax({
      type: "POST",
      url: "php/register.php",
      data: $('#registerForm').serialize(),
      success: function(data){
        if(data == "true"){
          //user is registered and logged in
          // go to account settings
          window.location.assign("../account-settings.php");
       }
       else{
        console.log('error');
       }
     }
    });
  });

// on log in
$(document).on('click','#loginSubmit', function(){
  var emailInput = $('#emailLogin').val();
  var passwordInput = $('#passwordLogin').val();
  var thelink = 'php/login.php?email='+emailInput+'&password='+passwordInput;

  $.getJSON(thelink,function(data)
  {
    if(data.response === "true"){
      console.log(data.username);
      $("#chooseFlight").hide();
      localStorage.setItem("user",data.username);
      $('#loginForm')[0].reset(); //clear the form
      window.location.assign("results.php");
   }
   else{
     console.log('error');
   }
  });
});


});
