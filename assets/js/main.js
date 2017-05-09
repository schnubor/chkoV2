$(function() {
    console.log( "Made with 🍔" );

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
	                					$('#contactForm').after('<p class="alert alert-warning warning"><i class="fa fa-warning" aria-hidden="true"></i> Invalid Captcha</p>');
	                					break;

	                	case "email": 	$('.warning').hide();
	                					$('#contactForm').after('<p class="alert alert-warning warning"><i class="fa fa-warning" aria-hidden="true"></i> Invalid Email address</p>');
	                					break;

	                	default: break;
                	}
                }
            }
         );
    });
})

function sendMailCallback() {
    console.log('mail sent');

    $.post(
        '../../resources/library/sendMail.php',
        $('#contactForm').serializeArray(),
        function(data) {
            console.log(data);
            if(data == "true"){ // Captcha verified!
                $('#contactForm').fadeOut(function(){
                    console.log('success');
                    $(this).after('<p class="alert alert-success"><i class="fa fa-check"></i> <strong>Thank you!</strong> I\'ll get back to you asap :)</p>')
                });
            }
            else{
                switch(data){
                    case "captcha": $('.warning').hide();
                                    $('#contactForm').after('<p class="alert alert-warning warning"><i class="fa fa-warning" aria-hidden="true"></i> Invalid Captcha</p>');
                                    break;

                    case "email": 	$('.warning').hide();
                                    $('#contactForm').after('<p class="alert alert-warning warning"><i class="fa fa-warning" aria-hidden="true"></i> Invalid Email address</p>');
                                    break;

                    default: break;
                }
            }
        }
     );
}
