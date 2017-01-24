<nav>
    <ul class="nav">
        <?php
            foreach($pages as $page => $url) {
                if($currentPage == $page) {
                    $active = "active";
                } else {
                    $active = "";
                }

                echo "<li class=\"nav-item\">";
                echo "<a class=\"nav-link " . $active . "\" ";
                echo "href=\"" . $url . "\">" . $page . "</a>";
                echo "</li>";
            }
        ?>
    </ul>
</nav>
