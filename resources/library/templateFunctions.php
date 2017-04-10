<?php
    require_once(realpath(dirname(__FILE__) . "/../config.php"));

    function renderHead($title, $description, $ogimage = "/assets/images/fb.jpg", $noindex = false)
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

		if($noindex) {
			echo "\t<meta name=\"robots\" content=\"noindex,follow\">\n";
		}
		else {
			echo "\t<meta name=\"robots\" content=\"index,follow,noodp\">\n";
		}
        echo "\t<title>" . $title . "</title>\n";
        echo "\t<meta name=\"description\" content=\"" . $description . "\">\n";
        echo "\t<link rel=\"canonical\" href=\"https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}\">\n";
        echo "\t<meta property=\"og:url\" content=\"https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}\">\n";
        echo "\t<meta property=\"og:type\" content=\"website\">\n";
        echo "\t<meta property=\"og:title\" content=\"" . $title . "\">\n";
        echo "\t<meta property=\"og:image\" content=\"http://{$_SERVER['HTTP_HOST']}" . $ogimage . "\">\n";
        echo "\t<meta property=\"og:description\" content=\"" . $description . "\">\n";
        echo "\t<meta property=\"og:site_name\" content=\"Christian Korndoerfer | Web Developer\">\n";
        echo "\t<meta property=\"fb:app_id\" content=\"738892419599660\">\n";
        echo "<script type=\"application/ld+json\">\n";
		echo "{\n";
		echo "\"@context\" : \"http://schema.org\",\n";
		echo "\"@type\" : \"WebSite\",\n";
		echo "\"name\" : \"" . $title . "\",\n";
		echo "\"url\" : \"https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}\"\n";
  		echo "}\n";
  		echo "</script>\n";
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

    function renderStatusIcon($status)
    {
        $statusColor = '';
        $statusText = '';

        switch ($status) {
            case 'available':
                $statusColor = 'green';
                $statusText = 'available for hire';
                break;

            case 'unavailable':
                $statusColor = 'red';
                $statusText = 'booked to the teeth';
                break;

            case 'hired':
                $statusColor = 'yellow';
                $statusText = 'available for small projects';
                break;

            default:
                break;
        }

        echo "<span class=\"status " . $statusColor . "\"
              data-toggle=\"tooltip\"
              data-placement=\"right\"
              title=\"" . $statusText . "\">";
        echo "</span>";
    }

    function renderStatusText($status)
    {
        switch ($status) {
            case 'available':
                $statusText = 'available for hire';
                break;

            case 'unavailable':
                $statusText = 'booked to the teeth';
                break;

            case 'hired':
                $statusText = 'available for small projects';
                break;

            default:
                break;
        }
        echo $statusText;
    }
    
    function renderBackButton()
    {
	    echo '<a href="/projects/" class="btn">&#8592; Back to overview</a>';
    }
?>
