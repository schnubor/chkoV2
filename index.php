<?php
require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Home";
?>

<!DOCTYPE html>
<html>
    <?php renderHead("Christian Korndörfer | Web Developer", "Christian Korndoerfer is a full-stack web engineer living and working in Berlin.
    His work ranges from designing user interfaces to implementing APIs and server infrastructure."); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>

        <div id="home" class="container">
            <p class="lead intro">
                Working and living in Berlin as a full-stack web developer
                I design, build and ship web applications since 2008. <br>
                I enjoy helping enthusiastic people bringing their ideas to life,
                while keeping them clean, robust and scaleable.
            </p>
            <a class="codeLink" href="/about">getAbout();</a>
            <a class="codeLink" href="/about">getCV();</a>

            <?php require_once(TEMPLATES_PATH . '/projects.php'); ?>
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
