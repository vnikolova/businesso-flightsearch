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