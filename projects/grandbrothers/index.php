<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Development | Grandbrothers",
        "Christian Korndoerfer is a full-stack web engineer living and working in Berlin.
        His work ranges from designing user interfaces to implementing APIs and server infrastructure."
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container singleProject">
        <h1>Grandbrothers</h1>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    <a href="http://grandbrothersmusic.com" target="_blank">Grandbrothersmusic.com</a>
                    is the official homepage of a band from Düsseldorf / Germany – <br>Erol Sarp and Lukas Vogel.
                    <br/><br/>
                    In order to achieve their special sound Lukas developed an unusual system for playing
                    the piano. Drawing on his technical background, he created a series of electromechanical
                    hammers that could be controlled via laptop (on software that he designed himself, no less) to ‘play’ the piano.
                    This process allowed the duo to discover new, previously unknown sounds –
                    sounds that couldn’t be achieved through conventional playing –
                    which give the record its unique sonic qualities.
                </p>
            </div>
        </div>

        <div class="row images">
            <img src="/assets/images/projects/grandbrothers/grandbrothers3.jpg" alt="screenshot of the grandbrothers homepage">
            <img src="/assets/images/projects/grandbrothers/grandbrothers2.jpg" alt="screenshot of the grandbrothers homepage">
            <img src="/assets/images/projects/grandbrothers/grandbrothers1.jpg" alt="screenshot of the grandbrothers homepage">
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    The site was build entirely with Laravel 4 and a custom made CMS which allows creating, editing and deleting of site admins, news and live gigs.
                    This CMS was the first version of CHKO CMS. The design and scroll animation (which I later called the "Paternoster-Effekt") reflects the duality in their sound.
                    You can check out the code on <a href="https://github.com/schnubor/grandbrothers" title="Github repository" target="_blank">Github</a>.
                </p>
            </div>
        </div>
    </div>

    <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
</body>

</html>
