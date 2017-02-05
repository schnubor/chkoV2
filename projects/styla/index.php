<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Developer | styla.com",
        "Christian Korndoerfer is a full-stack web engineer living and working in Berlin.
        His work ranges from designing user interfaces to implementing APIs and server infrastructure."
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container singleProject text">
        <h1>styla.com</h1>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    After working for <a href="/projects/tapetv" title="my work for tape.tv">tape.tv</a>
                    I decided to stay in the glooming Berlin Startup world and joined
                    a small company which would later be called Styla - settings sails to conquer
                    the online magazine and content commerce market on an international scope as a SaaS.
                </p>
            </div>
        </div>

        <div class="row images">
            <img src="/assets/images/projects/styla/styla1.jpg" alt="styla.com homepage">
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    I became part of 10-man-sized team (including founders) sitting in a
                    shared office, drinking Club Mate. The startup vibe was real and I felt very much at home.
                    I quickly found my role in the 5-man-sized development team as a <strong>Frontend Developer</strong>.
                    Since the main application was also written in <strong>Backbone.js</strong> I began implementing new features
                    and core improvements soon after.
                </p>
            </div>
        </div>

        <div class="row images">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://player.vimeo.com/video/132720939" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    Since being a SaaS there is always work for spicific clients involved.
                    One of them not only wanted
                </p>
            </div>
        </div>

        <a href="/projects" class="btn">&#8592; Back to overview</a>
    </div>

    <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
</body>

</html>
