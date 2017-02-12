<?php
require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Home";
$useH1 = true;
?>

<!DOCTYPE html>
<html>
    <?php renderHead("Christian Korndörfer | Web Developer", "Christian Korndoerfer | Full-stack web developer | Berlin"); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>

        <div id="home" class="container">
            <p class="lead intro">
                Full-stack web developer working and living in Berlin. <br>
                I design, build and ship web applications since 2008 and
                enjoy helping enthusiastic people bringing their ideas to life,
                while keeping them clean, robust and maintainable.
            </p>

            <div class="text" style="margin-top: -40px;">
                <a class="btn" href="/about" title="About"><i class="fa fa-info" aria-hidden="true"></i> About</a>
                <a class="btn" href="https://github.com/schnubor" title="Github" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
                <a class="btn" href="/about/CV.pdf" title="CV"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download CV</a>
            </div>

            <?php require_once(TEMPLATES_PATH . '/projects.php'); ?>
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
