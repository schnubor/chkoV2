<?php
require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html>
    <?php renderHead(
        "Christian Korndoerfer | Projects",
        "Christian Korndörfer is a full-stack web engineer living and working in Berlin.
        His work ranges from designing user interfaces to implementing APIs and server infrastructure."
    ); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div class="container">
            <?php require_once(TEMPLATES_PATH . '/projects.php'); ?>
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
