$(document).ready(function() {
	$('.projects').hide();
	$('#card-1-content-more').hide();
	$('#card-1-action-more').hide();
	$('#card-2-content-more').hide();
	$('#card-2-action-more').hide();
	
	$('.projects-btn').click(function(e) {   
	    $('.profile').fadeOut('fast', function() {
	        $('.projects').fadeIn('fast');
	    });
	});

	$('.back-btn').click(function(e) {   
	    $('.projects').fadeOut('fast', function() {
	        $('.profile').fadeIn('fast');
	    });
	});

	$('#info-more-1').click(function(e) {  
		var hiddentContentHeight = $('#card-1-image').height() + $('#card-1-content').height();
	    $('#card-1-image').fadeOut('fast');
	    $('#card-1-content').fadeOut('fast', function() {
	        $('#card-1-content-more').fadeIn('fast');
	    });
	    $('#card-1-action').fadeOut('fast', function() {
	        $('#card-1-action-more').fadeIn('fast');
	    });
	    $('#card-1-content-more').height(hiddentContentHeight);
	});

	$('#info-less-1').click(function(e) {   
	    $('#card-1-content-more').fadeOut('fast', function() {
	        $('#card-1-content').fadeIn('fast');
	    });
	    $('#card-1-action-more').fadeOut('fast', function() {
	        $('#card-1-action').fadeIn('fast');
	        $('#card-1-image').fadeIn('fast');
	    });

	});

	$('#info-more-2').click(function(e) {  
		var hiddentContentHeight = $('#card-2-image').height() + $('#card-2-content').height();
	    $('#card-2-image').fadeOut('fast');
	    $('#card-2-content').fadeOut('fast', function() {
	        $('#card-2-content-more').fadeIn('fast');
	    });
	    $('#card-2-action').fadeOut('fast', function() {
	        $('#card-2-action-more').fadeIn('fast');
	    });
	    $('#card-2-content-more').height(hiddentContentHeight);
	});

	$('#info-less-2').click(function(e) {   
	    $('#card-2-content-more').fadeOut('fast', function() {
	        $('#card-2-content').fadeIn('fast');
	    });
	    $('#card-2-action-more').fadeOut('fast', function() {
	        $('#card-2-action').fadeIn('fast');
	        $('#card-2-image').fadeIn('fast');
	    });

	});
});