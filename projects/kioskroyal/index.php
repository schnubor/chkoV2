<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Development | Kiosk Royal",
        "Christian Korndoerfer is a full-stack web engineer living and working in Berlin.
        His work ranges from designing user interfaces to implementing APIs and server infrastructure."
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container singleProject">
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
            <img src="/assets/images/projects/fortherecord/fortherecord2.jpg" alt="Welcome screen">
            <img src="/assets/images/projects/fortherecord/fortherecord1.jpg" alt="Vinyl collection">
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    The site was build from scratch with Laravel 5.1 and is hosted with Forge.
                    You can check out the code on <a href="https://github.com/schnubor/kiosk-royal" title="Fortherecord on Github" target="_blank">Github</a>.
                </p>
            </div>
        </div>
    </div>

    <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
</body>

</html>
