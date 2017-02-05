<?php include_once(LIBRARY_PATH . '/analyticstracking.php'); ?>
<div class="jumbotron">
    <div class="container">
        <div class="logo">
            <a href="/">
                <?php if($useH1) { ?>
                <h1>
                    Christian Korndörfer
                    <?php renderStatusIcon($status); ?>
                </h1>
                <?php } else { ?>
                <p class="h1">
                    Christian Korndörfer
                    <?php renderStatusIcon($status); ?>
                </p>
                <?php } ?>
            </a>
            <p class="lead">
                <span class="typer"></span>
            </p>
        </div>

        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>
    </div>
</div>
