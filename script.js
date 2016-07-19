$(function () {
  $('[data-toggle="tooltip"]').tooltip()

$( ".progress" ).click(function() {
		console.log('hello');
  		$( ".progress-bar" ).animate({
    	width: "100%"
  		}, 1000, 'linear', function() {
    	$( this ).append( "<div>! Animation error !</div>" );
  		});
	});


});

	
