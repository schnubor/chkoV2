<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Developer | tape.tv",
        "tape.tv was an Online Music Television Streamin Service and the first Berlin based company I worked for as a designer and developer.",
        $currentPage,
        "/assets/images/projects/tapetv/tapetv1.jpg"
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container singleProject text">
        <h1>tape.tv</h1>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    When I started working at tape.tv in 2012, tape 2.5 was just
                    released and the whole application was still based on Flash
                    and did not have a mobile version. It was a mess.
                    <br/><br/>
                    In order to get rid of Flash I worked closely with many product
                    managers to get rid of old parts of the platform and replace
                    them with modern HTML5 solutions. This often involved rethinking
                    and redesigning whole structures of the platform.
                    I was also involved in designing and implementing single purpose
                    websites for certain events at this time.
                </p>
            </div>
        </div>

        <div class="row images">
            <?php 
                projectImage( 'tapetv', 'tapetv3', 'Screenshot of the tape.tv website');
            ?>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    In a guerilla action in early 2013 two other colleagues and
                    me decided to finally <strong>create a sufficient mobile version of
                    the site</strong> on our own, which should include the whole catalogue
                    of videos, search, filtering and basic navigation.
                    My role was designing the whole thing from scratch and implementing
                    certain frontend related parts of the app.
                    The project turned out be a great success and increased traffic
                    dramatically at that time.
                </p>
            </div>
        </div>

        <div class="row images">
            <?php 
                projectImage( 'tapetv', 'tapetv2', 'tape.tv mobile app design');
            ?>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    Everything changed when <a href="https://techcrunch.com/2013/08/27/berlins-startups-consolidate-as-the-much-hyped-amen-is-acquired-by-tape-tv/" target="_blank">tape.tv acquired Amen</a>
                    in 2013. We decided to rebuild the whole product from scratch and
                    I worked as a frontend developer and designer together with the former
                    Amen Team and their founders Florian Weber (CTO) and Felix Petersen (CEO of Amen).
                    During that time my skills in <strong>Ruby on Rails, Backbone.js,
                    test driven development (TDD) and overall UX/UI design</strong> improved rapidly and I
                    learned alot thanks to a great, experienced team.
                    <br/><br/>
                    Besides all that I also did some motion works including the opening sequence
                    of the Vodafone sponsored show <a href="https://vimeo.com/35758324" title="The Night Start Here Intro Video" target="_blank">The Night Starts Here</a>.
                    <br><br>
                    tape.tv had a good run, but went out of business in november 2016.
                </p>
            </div>
        </div>

        <?php renderBackButton(); ?>
    </div>

    <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
</body>

</html>
