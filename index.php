<?php
    $page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if($page === "/" || $page === "/home"){
        require "home.php";
    }

    if($page === "/gallerie"){
        require "gallerie.php";
    }

    if($page === "/contact"){
        require "contact.php";
    }

?>