<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Developer | perspective.co",
        "While working for Style for around 3 years I strengthened my knowledge in Frontend development and also more and more became interested in topic aside from that.",
        $currentPage,
        "/assets/images/projects/perspective/perspective1.jpg"
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container singleProject text">
        <h1>perspective.co</h1>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    While working for <a href="/projects/styla/" title="my work for styla.com">Styla</a> for around 3 years I strengthend my 
                    knowledge in Fronted developement and also more and more became interested in topics aside from that.
                    I felt like I should put that knowledge to work and found the perfect opportunity to do just that over at 
                    <a href="https://perspective.co/" target="_blank" title="Perspective Homepage">Perspective</a>.
                </p>
            </div>
        </div>

        <div class="row images">
            <img src="/assets/images/projects/perspective/perspective1.jpg" alt="perspective.co homepage">
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    At the time Perspective was operating as pure digital marketing agency with clients like Mercedes benz, Coca Cola or
                    Zalando. Their plan however, was to transform themselves more into a fully fleshed out startup, building a software
                    for creating mobile first websites with marketing features with ease. You can learn more in the video below.

                    <br><br>

                    Having the possibility to build a whole new software from scratch is every developers dream. Together with another very talented developer and
                    Design team we started our journey concepting and building Perspective Studio. We decided on using a MERN 
                    (MongoDB, Express, React.js, Node.js) stack architecture and knocked out an MVP within the first couple of months of our employment.
                    During this time a learned alot about cleanly setting up new modules from scratch, implementing workflows and coding rules etc.  
                </p>
            </div>
        </div>

        <div class="row images">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" src="https://www.youtube.com/embed/L7tZRpQ33SA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>

        <?php renderBackButton(); ?>
    </div>

    <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
</body>

</html>
