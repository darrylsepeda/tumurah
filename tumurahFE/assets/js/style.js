
$('#btn-signin').click(function(){
	$('#form-signin').toggle();
});
 $('#btn-option').click(function(){
	$('#form-option').toggle();
});
$('.btn-signup').click(function(){
	$('#form-signup').toggle("fast");
	$('#cover').toggle("fast");
	$('#form-signup').modal({
	  keyboard: true
	});
});

$(function() {
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 5000000,
		step: 100000,
		values: [ 0, 5000000 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
});