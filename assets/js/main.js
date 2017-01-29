$(function() {
    $('[data-toggle="tooltip"]').tooltip()

    // Kontaktanfrage
    $('#contactForm').submit(function(event) {
    	event.preventDefault();

    	$.post(
            '../../resources/library/verify-kontakt.php',
            $('#kontakt').serializeArray(),
            function(data) {
                console.log(data);
                if(data == "true"){ // Captcha verified!
	                $('#contactForm').fadeOut(function(){
		                console.log('success');
	                });
                }
                else{
                	switch(data){
	                	case "captcha": $('.warning').hide();
	                					$('#contactForm').append('<p class="warning">&#9888; Falscher Code! Bitte &uuml;berpr&uuml;fen Sie Ihre Eingabe</p>');
	                					break;

	                	case "email": 	$('.warning').hide();
	                					$('#contactForm').append('<p class="warning">&#9888; Ung&uumlltige Email Adresse! Bitte &uuml;berpr&uuml;fen Sie Ihre Eingabe</p>');
	                					break;

	                	default: break;
                	}
                }
            }
         );
    });
})
