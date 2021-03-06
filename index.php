<?php
require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Home";
$useH1 = true;
?>

<!DOCTYPE html>
<html>
    <?php renderHead("Christian Korndoerfer | Full-stack web developer & designer", 
	    "Full-stack Web Developer with a strong design and engineering background, living and working in Berlin.",
	    $currentPage); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>

        <div id="home" class="container">
            
            <h1>Full-stack web developer and <br>UI designer from Berlin.</h1>
            <p class="lead intro">
                I design, build and ship web applications since 2008 and
                enjoy helping enthusiastic people bringing their <a href="/projects">ideas</a> to life,
                while keeping them clean, robust and maintainable.
            </p>

            <div id="canvas"></div>

            <div class="text">
                <a class="btn" href="/about/" title="About"><i class="fa fa-info" aria-hidden="true"></i> About</a>
                <a class="btn" href="https://github.com/schnubor" title="Github" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
                <a class="btn" href="/about/CV.pdf" title="CV"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download CV</a>
            </div>
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
