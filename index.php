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
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div class="container">

        </div>

        <script>
          $(function(){
              $(".typer").typed({
                strings: [
                    "Full-stack web development",
                    "Node.js",
                    "React.js",
                    "Vue.js",
                    "Backbone.js",
                    "AWS infrastructure",
                    "Docker",
                    "Ansible",
                    "Laravel",
                    "Open source",
                    "UI/UX design",
                    "Burger 🍔 ",
                    "Videogames"
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
