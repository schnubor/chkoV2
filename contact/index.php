<?php
require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Contact";
?>

<!DOCTYPE html>
<html>
    <?php renderHead(
        "Christian Korndoerfer | Web Developer | Contact",
        "Get in touch with Christian Korndoerfer | Full-stack web developer | Berlin",
        $currentPage
    ); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div id="contact" class="container text">
            <h1>— Contact</h1>
            <div class="row">
                <div class="col-md-8 offset-md-1">
                    <p>
                        Feel free to use the following form to get in touch with
                        me for any questions and/or job inquieries. You can also
                        email me directly: info[at]chko.org<br>
                        I'll answer asap and depending on my current status.
                    </p>
                    <p>
                        For professional inquiries please get in touch via
                        <a href="https://de.linkedin.com/in/christian-korndörfer-8802045b" title="LinkedIn" target="_blank">LinkedIn</a>.
                    </p>
                    <p>
                        <strong>Current status: </strong>
                        <?php renderStatusText($status); ?>
                    </p>
                </div>

                <!-- <div class="col-md-5 text">
                    <form class="form" action="<?php LIBRARY_PATH . "/sendMail.php" ?>" id="contactForm">
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" placeholder="Your email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="8" cols="80"
                            placeholder="Your message" style="resize: none;" required></textarea>
                        </div>
                        <button
                            class="g-recaptcha btn"
                            data-sitekey="6LdalxMUAAAAALgaw2Z4m_esFFvKYlXWTfrWsuUy"
                            data-callback="sendMailCallback"
                            data-badge="inline">
                            <i class="fa fa-send" aria-hidden="true"></i> Send message
                        </button>
                    </form>
                </div> -->
            </div>
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
