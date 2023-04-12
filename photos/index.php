<?php
session_start();

$page = isset($_GET["page"]) ? $_GET["page"] : "home";
$action = isset($_GET["action"]) ? $_GET["action"] : "read";
$HTTP_SERVER_VARS = $_SERVER;

require_once "view/header.php";
require_once "controller/RegisterController.php";
require_once "controller/LoginController.php";
require_once "model/registermodel.php";
require_once "model/LoginModel.php";

switch($page) {
    case "home":
        if (is_null($_SESSION["username"])){
            include "view/login/login.php";

        }
        else{
            include "view/home/home.php";
        }
        break;
    case "crepes":
        include "view/crepes/crepes.php";
        break;
    case "contact":
        include "view/contact/contact.php";
        break;
    case "map":
        include "view/map.php";
        break;
    case "login":
        include "view/login/login.php";
        if($action == "login"){
            $login = new LoginController();
            $login->login();
            $_SESSION["username"]=$login->login()["pseudo"];

        }
        break;
    case "register":
        include "view/register/register.php";
        if($action == "register"){
            $register = new RegisterController();
            $register->register();
        }
        break;
    default:
        include "view/error/404.php";
        break;

}
