<?php
require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "About";
?>

<!DOCTYPE html>
<html>
    <?php renderHead(
        "Christian Korndoerfer | Web Development | About",
        "Christian Korndoerfer is a full-stack web engineer living and working in Berlin.
        His work ranges from designing user interfaces to implementing APIs and server infrastructure."
    ); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div id="about" class="container">
            <h2>About</h2>
            <div class="row">
                <div class="col-md-6 offset-md-1 profile">
                    <div class="col-md-4">
                        <img src="/assets/images/avatar.jpg" alt="Picture of Christian Korndoerfer" class="avatar">
                    </div>
                    <div class="col-md-6">
                        <address>
                            <strong>CHKO.org</strong><br>
                            Friedrich-Engels-Str. 3<br>
                            13156, Berlin<br>
                            <a href="mailto:info@chko.org">info@chko.org</a>
                        </address>
                        <a href="/downloads/CV.pdf" class="btn" title="Download CV">
                            <i class="fa fa-fw fa-download"></i> Download CV
                        </a>
                        <a href="https://github.com/schnubor" class="btn" title="Github account">
                            <i class="fa fa-fw fa-github"></i> Github
                        </a>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 offset-md-1">
                    <p>
                        Hi there, I'm Christian and I'm working as a web developer and visual/product
                        designer for <a href="https://styla.com/" title="Styla homepage" target="_blank">styla.com</a> in Berlin.
                        Before Styla I worked for the online music television service
                        <a href="/projects/tapetv" title="tape.tv">tape.tv</a> until the end of 2014.
                    </p>
                    <p>
                        I studied Information Technology at <a href="https://www.fh-zwickau.de/" title="FH Zwickau" target="_blank">FH Zwickau</a>, Germany, <strong>graduated as an
                        engineer in 2009</strong> and worked as a software developer/engineer afterwards.
                        <strong>Besides motion design I was constantly looking into web related programming,
                        UX and GUI design.</strong> I decided to move to Berlin in 2012 to dive deeper into this adventure. <br>
                        At the same time I started an additional study in Leipzig, Germany, at the
                        <a href="https://www.leipzigschoolofmedia.de/" title="Leipzig School of Media" target="_blank">Leipzig School of Media</a>
                        besides my job in order to improve my knowledge and get a bigger picture in general media,
                        web technologies and economics as well as project management. I graduated this additional study as a
                        <strong>Master of Science in Crossmedia Management</strong>. During this time I became a strong supporter of the Open Source and Open Data movements.
                    </p>
                    <p>
                        Naturally, as an engineer I'm eager for learning new things, figuring out how stuff works and solving problems.
                        I enjoy working on challenging projects with others and value good thoughts and ideas. <br>
                        I believe that truely great apps can emerge, when knowledge meets skill,
                        passion and an idea everyone believes in. <strong>Those apps are often defined by performance, robustness,
                        scaleability, code quality and swift deployment cycles.</strong>
                    </p>
                    <p>
                        For more information feel free to check out my
                        <a href="/projects" title="Projects">Projects</a>
                        and <a href="/contact" title="Contact form">get in touch</a> if you've any further questions or inquiries.
                    </p>
                </div>
            </div>
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
