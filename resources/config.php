<?php
date_default_timezone_set( "Europe/Berlin" );

defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

defined("LESS_PATH")
    or define("LESS_PATH", realpath(dirname(__FILE__) . '/less'));

defined("ASSETS_PATH")
    or define("ASSETS_PATH", realpath(dirname(__FILE__) . '/../assets'));

$useH1 = false;

$pages = [
    "About" => "/about",
    "Work" => "/projects",
    "Contact" => "/contact",
];

$status = "hired";    // hired, available, unavailable
?>
