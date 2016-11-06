$( document ).ready(function() {

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
