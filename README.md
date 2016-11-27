![Screenshot](http://imgur.com/U8UUVQh.png)

# PHP Boilerplate

Boilerplate to quickly knock out small PHP based projects.
Supports Bootstrap V4, LESS support and Font Awesome icons.

## Usage

### Running locally

To see the above site locally clone and cd to the repo and run:

```
php -S localhost:8000
```

The site should now be available in your browser when visiting this URL:
http://localhost:8000/

### Create new pages

To create a new page create a new folder in the root directory and name it like
the URL is supposed to be (e.g. for example.com/about name it `account`).

Create a new `index.php` within that directory:

```html
<?php
require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = {pagename};
?>

<!DOCTYPE html>
<html>
    <?php renderHead(
        {title},
        {description}
    ); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div class="container">
            ...
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
```

- Replace `{pagename}`, `{title}` and `{description}` with actual content.
- Open `resources/config.php` and add the new page to the `$page` array.
