var apikey = "e80f8937d3736bd5034b5240d9836c3cbec07fea";
var baseUrl = "http://www.giantbomb.com/api";

// construct the uri with our apikey
var GamesSearchUrl = baseUrl + '/search/?api_key=' + apikey + '&format=jsonp';
var query = "vlambeer";
$(document).ready(function() {

	  // send off the query
	  $.ajax({
	    url: GamesSearchUrl + '&query=' + encodeURI(query) + '&json_callback=?' ,
	    dataType: 'JSONP',
	    success: function (data) {
	    	console.log(data.results[0].name);
	        $(".name").html(data.results[0].name);
	  }

	});
});