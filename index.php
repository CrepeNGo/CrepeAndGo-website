<?php

$page = isset($_GET["page"]) ? $_GET["page"] : "home";


switch($page) {
    case "home":
        echo "<style>";
        include "style.css";
        echo "</style>";
        include "view/home/home.php";
        break;
    default:
        include "view/error/404.php";
        break;
}
