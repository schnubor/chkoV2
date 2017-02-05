<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Developer | Steve Reich – Sixp Pianos",
        "The official website for an LP of Steve Reich's reworked piece \"Six Pianos\" from 1974,
        released by FILM Recordings in Berlin.",
        "/assets/images/projects/sixpianos/sixpianos1.jpg"
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container singleProject text">
        <h1>Steve Reich - Six Pianos</h1>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    <blockquote class="blockquote" cite="http://pitchfork.com/reviews/albums/22596-six-pianos-keyboard-study-1/">
                        "Berlin's FILM Recordings offers a new recording of two golden-era works by the minimalist masters, reimagined and modernized."
                        <footer class="blockquote-footer">Daniel Martin-McCormick on
                            <a href="http://pitchfork.com/reviews/albums/22596-six-pianos-keyboard-study-1/" title="Pitchfork article" target="_blank">
                                <cite title="Pitchfork">Pitchfork</cite>
                            </a>
                        </footer>
                    </blockquote>
                </p>

                <p>
                    The <a href="http://film-recordings.com/sixpianos" title="official website of six pianos" target="_blank">official website</a> for an LP of Steve Reich's reworked piece "Six Pianos" from 1974,
                    released by <a href="http://film-recordings.com" title="FILM recordings" target="_blank">FILM Recordings</a> in Berlin.
                    It also includes Terry Reiley's "Keyboard Study #1" which fits in very nicely. <br><br>
                    You can listen to the whole LP and even enable or disable certain layers of Six Pianos by clicking on the pianists name or by finding the right
                    "track" in the album cover. It's a playful approach of discovering complexity behind the piece.
                </p>
            </div>
        </div>

        <div class="row images">
            <img src="/assets/images/projects/sixpianos/sixpianos1.jpg" alt="Six Pianos home screen">
            <img src="/assets/images/projects/sixpianos/sixpianos2.jpg" alt="Kiosk Royal projects">
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    The site is a single page application and was built from scratch in one night without using any framework or CMS.
                    During development I used <a href="http://yeoman.io/" title="yeoman" target="_blank">yeoman.io</a> for scaffolding, precompiling and building the project.
                </p>
            </div>
        </div>

        <a href="/projects" class="btn">&#8592; Back to overview</a>
    </div>

    <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
</body>

</html>
