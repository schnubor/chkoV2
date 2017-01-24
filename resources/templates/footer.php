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
                        echo "href=\"" . $url . "\">" . $page . "</a>";
                        echo "</li>";
                    }
                ?>
                <li class="nav-item">
                    <a href="/legal" class="nav-link" title="legal notice">Legal</a>
                </a>
            </ul>
        </nav>
        <p class="pull-left">
            <a href="https://web.facebook.com/chko.org"
               title="Facebook page"
               target="_blank">
                <i class="fa fa-fw fa-facebook"></i>
            </a>
            <a href="http://twitter.com/schnubor"
               title="Twitter feed"
               target="_blank">
                <i class="fa fa-fw fa-twitter"></i>
            </a>
            <a href="https://de.linkedin.com/in/christian-korndörfer-8802045b"
               title="LinkedIn profile"
               target="_blank">
                <i class="fa fa-fw fa-linkedin"></i>
            </a>
            <a href="http://github.com/schnubor"
               title="Github account"
               target="_blank">
               <i class="fa fa-fw fa-github"></i>
            </a>
        </p>
        <small class="pull-right">
            © <?php echo date("Y"); ?> Christian Korndörfer
        </small>
    </div>
</footer>

<script>
  $(function(){
      $(".typer").typed({
        strings: [
            "Full-stack developer",
            "Video game addict",
            "Software engineer",
            "Laravel fanboy",
            "Open source defender",
            "Burger lover 🍔 ",
            "HTML/CSS/JS coach"
        ],
        typeSpeed: 60,
        loop: true,
        backDelay: 1500,
        cursorChar: '_',
        shuffle: true
      });
  });
</script>
