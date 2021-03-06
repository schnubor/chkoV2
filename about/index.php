<?php
require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "About";
?>

<!DOCTYPE html>
<html>
    <?php renderHead(
        "Christian Korndoerfer | Web Developer | About",
        "More information about Christian Korndoerfer regarding education, job experiences and CV.",
        $currentPage
    ); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div id="about" class="container text">
            <h1>— About</h1>
            <div class="row">
                <div class="col-md-6 offset-md-1 profile">
                    <div class="col-md-4">
                        <img src="/assets/images/avatar.jpg" alt="Picture of Christian Korndoerfer" class="avatar">
                    </div>
                    <div class="col-md-6">
                        <address>
                            <strong>CHKO.org</strong><br>
                            Friedenstr. 92a<br>
                            10249 Berlin<br>
                            info[at]chko.org
                        </address>
                        <a href="/about/CV.pdf" class="btn" title="Download CV">
                            <i class="fa fa-fw fa-download" aria-hidden="true"></i> Download CV
                        </a>
                        <a href="https://github.com/schnubor" class="btn" title="Github account">
                            <i class="fa fa-fw fa-github" aria-hidden="true"></i> Github
                        </a>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 offset-md-1">
                    <p>
                        Hi there, I'm Christian, <?php printAge() ?> years old, and I'm currently working as a Senior Full-stack developer for <a href="/projects/perspective/" title="Perspective" target="_blank">perspective.co</a> in Berlin.
                        Before Perspective I worked as a frontend developer and UI Designer for <a href="/projects/styla/" title="Styla" target="_blank">styla.com</a> and  for the online music television service
                        <a href="/projects/tapetv/" title="tape.tv">tape.tv</a>.
                    </p>
                    <p>
                        I studied Information Technology at <a href="https://www.fh-zwickau.de/" title="FH Zwickau" target="_blank">FH Zwickau</a>, Germany, <strong>graduated as an
                        engineer in 2009</strong> and worked as a software developer/engineer afterwards. <br>
                        Besides <a href="https://vimeo.com/chko" target="_blank" title="Vimeo profile">motion design</a> I was constantly looking into <strong>web related programming,
                        UX and GUI design</strong>.
                        <br><br>
                        I decided to move to Berlin in 2012 to dive deeper into this adventure. <br>
                        At the same time I started an additional study in Leipzig, Germany, at the
                        <a href="https://www.leipzigschoolofmedia.de/" title="Leipzig School of Media" target="_blank">Leipzig School of Media</a>
                        besides my job in order to improve my knowledge and get a bigger picture in general media,
                        web technologies and economics as well as project management. I graduated this additional study as a
                        <strong>Master of Science in Crossmedia Management</strong>. During this time I became a strong supporter of the Open Source and Open Data movements.
                    </p>
                    <p>
                        Naturally, as an engineer I'm eager for learning new things, figuring out how stuff works and solving problems.
                        I enjoy working on challenging projects with small but talented teams and value good thoughts and ideas. <br>
                        I believe that truly great apps can emerge, when knowledge meets skill,
                        passion and an idea everyone believes in. Those apps are often defined by performance, robustness, scaleability, good code quality, swift deployment cycles and well thought-out UI aesthetics. <strong>As an engineer and designer I'm able combine the best of both worlds.</strong>
                    </p>
                    <p>
                        For more information feel free to check out my
                        <a href="/projects/" title="projects">projects</a>
                        and <a href="/contact/" title="Contact form">get in touch</a> if you've any further questions or inquiries.
                    </p>
                </div>
            </div>
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
