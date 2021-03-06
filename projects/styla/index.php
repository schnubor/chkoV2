<?php
require_once(realpath(dirname(__FILE__) . "/../../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Projects";
?>

<!DOCTYPE html>
<html lang="en">
<?php renderHead(
        "Christian Korndoerfer | Web Developer | styla.com",
        "After working for tape.tv I decided to stay in the glooming Berlin Startup world and joined a small company which would later be called Styla.",
        $currentPage,
        "/assets/images/projects/styla/styla1.jpg"
    ); ?>

<body>
    <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
    <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

    <div class="container singleProject text">
        <h1>— styla.com</h1>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    After working for <a href="/projects/tapetv/" title="my work for tape.tv">tape.tv</a>
                    I decided to stay in the glooming Berlin Startup world and joined
                    a small company which would later be called <a href="https://www.styla.com/" target="_blank" title="Styla - Storytelling sales">Styla</a> - settings sails to conquer
                    the online magazine and content commerce market on an international scope as a SaaS.
                </p>
            </div>
        </div>

        <div class="row images">
            <?php 
                projectImage( 'styla', 'styla1', 'Screenshot of the Styla.com Homepage');
            ?>
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
                    Since being a SaaS there is always work for specific clients involved.
                    I ended up building entire websites from scratch for clients like
                    <a href="http://stories.ludwigbeck.de" title="Ludwigbeck Magazine" target="_blank">Ludwigbeck</a>,
                    <a href="http://stylefix.boohoo.com" title="Boohoo Stylefix Magazine" target="_blank">Boohoo</a> and
                    <a href="http://news.pkz.ch" title="PKZ homepage" target="_blank">PKZ</a>.
                    All of them are built with <a href="http://octobercms.com/" title="OctoberCMS" target="_blank">OctoberCMS</a>, a very flexible CMS based on PHP,
                    and hosted via <strong>AWS</strong>.
                    Additionally for Ludwigbeck I was also responsible for the entire <strong>UI/UX design</strong> and integration of their existing Brand and Events APIs.
                </p>
            </div>
        </div>

        <div class="row images">
            <?php
                projectImage( 'styla', 'styla2', 'Screenshot of the Ludwigbeck Magazine');
                projectImage( 'styla', 'styla3', 'Screenshot of the Boohoo Stylefix Magazine');
                projectImage( 'styla', 'styla4', 'Screenshot of the PKZ Magazine');
            ?>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>
                    Today Styla employs over 60 employees in a proper office and is still growing. We greatly improved our infrastructure
                    by splitting our service up in <strong>multiple Microservices</strong>, mostly running on <strong>Node.js</strong> and <strong>React.js</strong>. Currently my job is to develop, improve and maintain some of those Microservices as a <strong>full-stack developer</strong>, improve our <strong>technical SEO</strong> capabilities and help clients implement our service.
                    As everyone in the company I'm involved in developing a completely new layout engine for our magazines, using a <strong>machine learning</strong> approach.
                </p>
            </div>
        </div>


        <?php renderBackButton(); ?>
    </div>

    <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
</body>

</html>
