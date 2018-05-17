jQuery(document).ready($(function () {
    console.log("Made with 🍔");

    // typewriter
    $(".typer").typed({
        strings: [
            "Full-stack developer",
            "Video games addict 🕹️",
            "Software engineer",
            "React.js, Node.js, YouNameIt.js",
            "Open source supporter",
            "Burger lover 🍔 ",
            "HTML/CSS/JS coach",
            "Head of Shoulders",
            "Technical SEO engineer",
            "Ramen Slurper 🍜",
            "Gundam Pilot"
        ],
        typeSpeed: 60,
        loop: true,
        backDelay: 1500,
        cursorChar: '_',
        shuffle: true
    });

    // enable tooltips
    $('[data-toggle="tooltip"]').tooltip()

    // Kontaktanfrage
    $('#contactForm').submit(function (event) {
        event.preventDefault();

        $.post(
            '../../resources/library/verify-kontakt.php',
            $('#kontakt').serializeArray(),
            function (data) {
                if (data == "true") { // Captcha verified!
                    $('#contactForm').fadeOut(function () {
                        console.log('success');
                    });
                }
                else {
                    switch (data) {
                        case "captcha": $('.warning').hide();
                            $('#contactForm').after('<p class="alert alert-warning warning"><i class="fa fa-warning" aria-hidden="true"></i> Invalid Captcha</p>');
                            break;

                        case "email": $('.warning').hide();
                            $('#contactForm').after('<p class="alert alert-warning warning"><i class="fa fa-warning" aria-hidden="true"></i> Invalid Email address</p>');
                            break;

                        default: break;
                    }
                }
            }
        );
    });
}));
