<?php

$page = isset($_GET["page"]) ? $_GET["page"] : "home";
include "view/base.php";
switch($page) {
    case "home":
        break;
    default:
        include "view/error/404.php";
        break;
}
