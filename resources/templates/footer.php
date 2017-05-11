<footer>
    <div class="container">
        <hr>
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
                        echo "href=\"" . $url . "/\">" . $page . "</a>";
                        echo "</li>";
                    }
                ?>
                <li class="nav-item">
                    <a href="/legal/" class="nav-link" title="legal notice">Legal</a>
                </a>
            </ul>
        </nav>
        <p class="pull-left">
            <a href="https://www.facebook.com/chko.org"
               title="Facebook page"
               target="_blank">
                <i class="fa fa-fw fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/schnubor"
               title="Twitter feed"
               target="_blank">
                <i class="fa fa-fw fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://de.linkedin.com/in/christian-korndörfer-8802045b"
               title="LinkedIn profile"
               target="_blank">
                <i class="fa fa-fw fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://github.com/schnubor"
               title="Github account"
               target="_blank">
               <i class="fa fa-fw fa-github" aria-hidden="true"></i>
            </a>
        </p>
        <small class="pull-right">
            © <?php echo date("Y"); ?> Christian Korndörfer
        </small>
    </div>
</footer>

<script type="text/javascript" src="/assets/js/jquery-3.1.1.min.js" defer></script>
<script type="text/javascript" src="/assets/js/tether.min.js" defer></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js" defer></script>
<script type="text/javascript" src="/assets/js/typed.min.js" defer></script>
<script type="text/javascript" src="/assets/js/main.min.js" async></script>
