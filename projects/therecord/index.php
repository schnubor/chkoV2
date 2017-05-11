<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Developer | The Record",
        "During my study in Leipzig and as a part of my masters thesis I started
        working on a new platform for vinyl collectors using Open Data as a basis.",
        $currentPage,
        "/assets/images/projects/fortherecord/fortherecord1.jpg"
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container singleProject text">
        <h1>The Record</h1>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    During my study in Leipzig and as a part of my <a href="https://www.leipzigschoolofmedia.de/fileadmin/content/Dokumente/Masterarbeiten/CMM/Masterarbeit_Korndoerfer-Christian_2014.pdf" title="Master thesis" target="_blank">masters thesis</a> I started
                    working on a new platform for vinyl collectors using Open Data as a basis. The idea was to replace old school techniques like using excel or worse, bring collectors together, connect and encourage them to rediscover their collections.
                    By now users only need to provide artist and title of their vinyls in order to add them to their collection. Everything else like track list, label, catalog number, genre, etc. will be aggregated automatically with the help of various
                    music related APIs. After populating the <a href="https://therecord.de/user/1/collection" target="_blank">collection</a>, various sorting and filter tools are provided. In addition a personal collectors profile is created,
                    which provides several <a href="https://therecord.de/user/1" target="_blank">statistics</a> on your collection. Another feature is the <a href="https://therecord.de/user/1/jukebox" target="_blank">Jukebox</a>, which
                    will play random tracks from your collection in an endless loop. Maybe it's time to listen some old records again?
                </p>
            </div>
        </div>

        <div class="row images">
            <?php 
                projectImage( 'fortherecord', 'fortherecord2', 'Screenshot of the Welcome screen');
                projectImage( 'fortherecord', 'fortherecord1', 'Screenshot of the Vinyl collection');
                projectImage( 'fortherecord', 'fortherecord3', 'Screenshot of the Statistics');
                projectImage( 'fortherecord', 'fortherecord4', 'Screenshot of the Jukebox');
            ?>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    The platform aggregates and visualizes data from various APIs, like Discogs, Spotify, iTunes or Youtube.
                    By combining datasets from different sources throughout the web, new and more valuable data can be created.
                    This well-orchestrated data is then made public as <strong>Open Data</strong> again by using an open API.<br><br>
                    The whole project is Open Source and realized with the <strong>MVC</strong> based PHP framework <a href="https://laravel.com/" title="Laravel" target="_blank">Laravel</a> in combination with <strong>Vue.js</strong> for some frontend components 
                    and hosted with <a href="https://forge.laravel.com/" title="Laravel Forge" target="_blank">Laravel Forge</a> on Digital Ocean.
                    You can check out the code on <a href="https://github.com/schnubor/therecord" title="Fortherecord on Github" target="_blank">Github</a>.
                </p>
            </div>
        </div>

        <?php renderBackButton(); ?>
    </div>

    <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
</body>

</html>
