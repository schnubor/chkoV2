<?php
    require_once(realpath(dirname(__FILE__) . "/../config.php"));

    function renderHead($title, $description, $ogimage = "/assets/images/fb.jpg")
    {
        // Compile .less files
        require_once(LIBRARY_PATH . '/lessc.inc.php');
        $less = new lessc;
        $less->compileFile(
            LESS_PATH . '/main.less',
            ASSETS_PATH . '/css/main.css'
        );

        // Add meta information
        require_once(TEMPLATES_PATH . '/head.php');

        echo "\t<title>" . $title . "</title>\n";
        echo "\t<meta name=\"description\" content=\"" . $description . "\">\n";
        echo "\t<link rel=\"canonical\" href=\"http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}\">\n";
        echo "\t<meta property=\"og:url\" content=\"http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}\">\n";
        echo "\t<meta property=\"og:type\" content=\"website\">\n";
        echo "\t<meta property=\"og:title\" content=\"" . $title . "\">\n";
        echo "\t<meta property=\"og:image\" content=\"http://{$_SERVER['HTTP_HOST']}" . $ogimage . "\">\n";
        echo "\t<meta property=\"og:description\" content=\"" . $description . "\">\n";
        echo "\t<meta property=\"og:site_name\" content=\"Dr. med. B. Schulze - Fachärztin für Urologie\">\n";
        echo "</head>";
    }

    function renderProjectTile($image, $title, $description, $link, $right = false, $tags = [])
    {
        $cssClass = "col-md-5";
        // set class depending on position
        if( $right ) {
            $cssClass = "col-md-5 offset-md-2";
        }
        echo "<div class=\"". $cssClass . "\">";
        echo "\t<a href=\"" . $link . "\" title=\"" . $title . "\">";
        echo "\t\t<img src=\"" . $image . "\" alt=\"" . $title . "\">";
        echo "\t</a>";
        echo "\t<a href=\"" . $link . "\" title=\"" . $title . "\"><h3>" . $title . "</h3></a>";
        echo "\t<p>" . $description . "</p>";
        echo "\t<ul>";
        foreach($tags as $tag)
        {
            echo "\t\t<li>" . $tag . "</li>";
        }
        echo "\t</ul>";
        echo "</div>";
    }
?>
