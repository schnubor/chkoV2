<?php
require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Features";
?>

<!DOCTYPE html>
<html>
    <?php renderHead("PHP Boilerplate", ""); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div class="container">

        </div>

        <script>
          $(function(){
              $(".typer").typed({
                strings: [
                    "HTML5",
                    "CSS3",
                    "Node.js",
                    "AWS",
                    "React.js",
                    "Backbone.js",
                    "Vue.js",
                    "Laravel",
                    "Open Source",
                    "UI/UX"
                ],
                typeSpeed: 50,
                loop: true,
                backDelay: 1000,
                cursorChar: '_'
              });
          });
        </script>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
