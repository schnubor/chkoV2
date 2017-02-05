<?php
require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Legal";
?>

<!DOCTYPE html>
<html>
    <?php renderHead(
        "Christian Korndoerfer | Web Developer | Legal notice",
        "Christian Korndoerfer is a full-stack web engineer living and working in Berlin.
        His work ranges from designing user interfaces to implementing APIs and server infrastructure."
    ); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div id="legal" class="container text">
            <h1>Legal information</h1>

            <div class="row">
                <div class="col-md-9 offset-md-1">
                    <h3>Legal Disclosure</h3>
                    <p>Information in accordance with Section 5 TMG </p>
                    <p>
                        <strong>Christian Korndoerfer</strong><br />
                        chko.org<br />
                        Friedenstr. 92a<br />
                        10249 Berlin
                    </p>
                    <h3>Contact Information</h3>
                    <p>
                        Telephone: +49 (0) 160 96417889<br />
                        E-Mail: info[at]chko.org<br />
                        Internet address: www.chko.org
                    </p>
                    <h3>Disclaimer</h3>
                    <p>
                        <strong>Accountability for content</strong><br />
                        The contents of our pages have been created with the utmost care. However, we cannot guarantee the contents' accuracy, completeness or topicality. According to statutory provisions, we are furthermore responsible for our own content on these web pages. In this matter, please note that we are not obliged to monitor the transmitted or saved information of third parties, or investigate circumstances pointing to illegal activity. Our obligations to remove or block the use of information under generally applicable laws remain unaffected by this as per §§ 8 to 10 of the Telemedia Act (TMG).
                    </p>
                    <p>
                        <strong>Accountability for links</strong><br />
                        Responsibility for the content of external links (to web pages of third parties) lies solely with the operators of the linked pages. No violations were evident to us at the time of linking. Should any legal infringement become known to us, we will remove the respective link immediately.
                    </p>
                    <p>
                        <strong>Copyright</strong><br />
                        Our web pages and their contents are subject to German copyright law. Unless expressly permitted by law, every form of utilizing, reproducing or processing works subject to copyright protection on our web pages requires the prior consent of the respective owner of the rights. Individual reproductions of a work are only allowed for private use. The materials from these pages are copyrighted and any unauthorized use may violate copyright laws.
                    </p>
                </div>
            </div>
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
