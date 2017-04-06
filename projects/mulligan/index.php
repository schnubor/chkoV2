<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Developer | Mulligan",
        "Mulligan is small single page application, written to quickly find and view Magic The Gathering cards.",
        "/assets/images/projects/mulligan/mulligan1.jpg"
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container singleProject text">
        <h1>Mulligan</h1>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    <a href="http://mulligan.chko.org" title="Mulligan site" target="_blank">Mulligan</a> is small <strong>single page application</strong>, written to quickly find and view Magic The Gathering cards.
                    Since I love the game itself and wasn't happy with the speed and UX of compareable sites, I decided to create my own little catalog.
                    In addition to a quick search and various filters it also provides a clean detail view for each card, including rulings and shopping links.
                </p>
            </div>
        </div>

        <div class="row images">
            <img src="/assets/images/projects/mulligan/mulligan1.jpg" alt="search view">
            <img src="/assets/images/projects/mulligan/mulligan2.jpg" alt="card details view">
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    The site utilizes an <strong>REST API</strong> provided by <a href="http://magicthegathering.io/" title="MTG REST API" target="_blank">magicthegathering.io</a> to fetch card data.
                    I built it using exclusivly <a href="https://vuejs.org/" title="Vue.js homepage" target="_blank">Vue.js 2</a> in order to learn more about the framework – I have to say it's pretty nice.
                    <br><br>
                    You can check out the code over on <a href="https://github.com/schnubor/mulligan" title="Mulligan on Github" target="_blank">Github</a>.
                </p>
            </div>
        </div>

        <?php renderBackButton(); ?>
    </div>

    <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
</body>

</html>
