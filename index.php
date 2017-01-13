<?php
require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Home";
?>

<!DOCTYPE html>
<html>
    <?php renderHead("Christian Korndörfer", "Christian Korndörfer is a full-stack web engineer living and working in Berlin.
    His work ranges from designing user interfaces to implementing APIs and server infrastructure."); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>

        <div class="container">
            <p class="lead intro">
                Working and living in Berlin as a full-stack web developer
                I design, build and ship web applications since 2008.
                I value constant learning, challenging problems, enthusiastic
                people around me and the open source movement.
            </p>
        </div>

        <script>
          $(function(){
              $(".typer").typed({
                strings: [
                    "Full-stack developer",
                    "Video game addict",
                    "Software engineer",
                    "Laravel fanboy",
                    "Open source defender",
                    "Burger lover 🍔 ",
                    "HTML/CSS/JS coach"
                ],
                typeSpeed: 60,
                loop: true,
                backDelay: 1500,
                cursorChar: '_',
                shuffle: true
              });
          });
        </script>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
