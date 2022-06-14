<?php
session_start();
// Définit le fuseau horaire par défaut à utiliser.
date_default_timezone_set('UTC');
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('URL', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
require_once('controllers/Router.php');
require('library/index.php');
$router = new Router();
$router->routeReq();