$(document).ready ( function(){

  $.getJSON('php/get-profile.php',function(data)
  {
    console.log(data[0]);
    //display personal info
    $('#firstName span').text(data[0].firstname);
    $('#lastName span').text(data[0].lastname);
    $('#email span').text(data[0].email);
    $('#mobile span').text(data[0].mobile);
    $('#passportID span').text(data[0].passpord_ID);

    //destination and time
    $('#time span').text(data[0].departure_Time);
    $('#departure span').text(data[0].departure);

    //display accommodation
    $('#accommoType span').text(data[0].accommo_Type);
    $('#rooms span').text(data[0].accommo_Rooms);
    $('#price span').text('from '+data[0].accommo_PriceMin +' to '+data[0].accommo_PriceMax);

    //display services
    $('#checkedBaggage span').text(data[0].baggage_Checked);
    $('#cabinBaggage span').text(data[0].baggage_Cabin);
    $('#seat span').text(data[0].seat);
    $('#meal span').text(data[0].meal);

    //display payment
    $('#cardNum span').text(data[0].card_Num);
    $('#expDate span').text(data[0].card_Date);
    $('#cardholder span').text(data[0].card_name);
    $('#ccv span').text(data[0].card_ccv);

  });
});
