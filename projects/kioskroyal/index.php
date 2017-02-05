<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Developer | Kiosk Royal",
        "Kios-Royal.com is the personal online portfolio of Carsten Aermes and Hanna Zeckau.",
        "/assets/images/projects/kioskroyal/kioskroyal2.jpg"
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container singleProject text">
        <h1>Kiosk Royal</h1>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    <a href="http://kiosk-royal.com" target="_blank">Kios-Royal.com</a> is the
                    personal online portfolio of Carsten Aermes and Hanna Zeckau.
                    The design was completely done by them but is driven by a custom CMS which
                    allows managing projects, admins and images as well as customization of
                    colors and fonts for each project.
                </p>
            </div>
        </div>

        <div class="row images">
            <img src="/assets/images/projects/kioskroyal/kioskroyal2.jpg" alt="Welcome screen">
            <img src="/assets/images/projects/kioskroyal/kioskroyal1.jpg" alt="Kiosk Royal projects">
            <img src="/assets/images/projects/kioskroyal/kioskroyal3.jpg" alt="Backend UI of the CMS">
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    The site was build from scratch with Laravel 5.1 and is hosted with Forge.
                    You can check out the code on <a href="https://github.com/schnubor/kiosk-royal" title="Fortherecord on Github" target="_blank">Github</a>.
                </p>
            </div>
        </div>

        <a href="/projects" class="btn">&#8592; Back to overview</a>
    </div>

    <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
</body>

</html>
