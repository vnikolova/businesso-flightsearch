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


// register submit
$(document).on("click", "#submitRegisterBtn", function(){
  //get input values
  var firstName = $("#firstName").val();
  var lastName = $("#lastName").val();
  var email = $("#email").val();
  var password = $("#password").val();
  var repeatPassword = $("#repeatPassword").val();

  if(password !== repeatPassword) {
   $('#formErrorModal').modal('show');
 }

  // submitRegistrationForm(firstName, lastName, email, password, repeatPassword);
  displayConfirmation();
});

function displayConfirmation(){
  $("#register").hide();
  $("#login").hide();
  $("#alert").show();
}

function submitRegistrationForm(fn, ln, email, password) {

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
        window.location.assign("results.html");
        $("#chooseFlight").hide();

    }else {
        alert('incorrect username or password');
    }
  });



});
