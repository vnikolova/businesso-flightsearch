$("#searchBtn").click(function(){
  $("#content").load("search-results.html");
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

  // departure date picker
  $('#depart').datepicker();
  // arrival date picker
  $('#arrive').datepicker();

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

$(document).on("click", "#logOutBtn", function(){
     window.location.assign("index.html");
});
