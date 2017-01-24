<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Developer | For The Record",
        "Christian Korndoerfer is a full-stack web engineer living and working in Berlin.
        His work ranges from designing user interfaces to implementing APIs and server infrastructure."
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container project">
        <div class="row">
            <div class="col-md-12">
                <h1>For The Record</h1>
                <p>
                    During my study in Leipzig and as a part of my <a href="https://www.leipzigschoolofmedia.de/fileadmin/content/Dokumente/Masterarbeiten/CMM/Masterarbeit_Korndoerfer-Christian_2014.pdf" target="_blank">masters thesis</a> I started
                    working on a new platform for vinyl collectors using Open Data as a basis. The idea was to replace old school techniques like using excel or worse, bring collectors together, connect and encourage them to rediscover their collections.
                    By now users only need to provide artist and title of their vinyls in order to add them to their collection. Everything else like tracklist, label, catalog number, genre, etc. will be aggregated automatically with the help of various
                    music related APIs. After populating the <a href="http://beta.diskollect.com/user/2/collection" target="_blank">collection</a>, various sorting and filter tools are provided. In addition a personal collectors profile is created,
                    which provides several <a href="http://beta.diskollect.com/user/2" target="_blank">statistics</a> on your collection. Another feature is the <a href="http://beta.diskollect.com/user/2/jukebox" target="_blank">Jukebox</a>, which
                    will play random tracks from your collection in an endless loop. Maybe it's time to listen some old records again?
                    <br><br> The platform aggregates data from various sources, like Discogs, Soundcloud, iTunes or Youtube and displays it in one place. By combining datasets from different sources throughout the web, new and more valuable data can
                    be created. This data is then made public again by using an API and therefor part of the Open Data movement.
                    <br><br> The whole project is Open Source and realized with the MVC based PHP framework <a href="http://laravel.com" target="_blank">Laravel</a>.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <hr>
                <p class="h3 links">Related Links</p>
                <ul>
                    <li>
                        <a href="http://beta.diskollect.com" title="For The Record Beta" target="_blank">For The Record Beta</a>
                    </li>
                    <li>
                        <a href="http://laravel.com" title="Laravel.com" target="_blank">Laravel.com</a>
                    </li>
                    <li>
                        <a href="https://www.leipzigschoolofmedia.de/fileadmin/content/Dokumente/Masterarbeiten/CMM/Masterarbeit_Korndoerfer-Christian_2014.pdf" title="Masters Thesis" target="_blank">Masters Thesis</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
