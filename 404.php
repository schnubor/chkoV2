<?php
require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Home";
$useH1 = true;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <?php renderHead("Christian Korndoerfer | Full-stack web developer & designer", "Christian Korndoerfer is a Full-stack Web Developer with a strong design and engineering background, living and working in Berlin.", "/assets/images/fb.jpg", true); ?>

	<body>
		<?php require_once(TEMPLATES_PATH . '/header.php'); ?>

        <div id="home" class="container">
            <p class="lead intro">
                Whoops, nothing here! <br/>
                Looking for one of these?
            </p>
            <div class="text" style="margin-top: -40px;">
	            <a class="btn" href="/" title="About"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                <a class="btn" href="/about/" title="About"><i class="fa fa-info" aria-hidden="true"></i> About</a>
                <a class="btn" href="/projects/" title="Github" target="_blank"><i class="fa fa-cube" aria-hidden="true"></i> Projects</a>
            </div>
        </div>
        
        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
	</body>
</html>