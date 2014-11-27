<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/

//Report all Errors
error_reporting(E_ALL);

//This can be turned off and on for prod/dev environment
ini_set('display_errors', 'on');

session_start();
include_once 'controller/frontcontroller.php';
include_once 'class/template.php';
$template = new Template();
$frontController = new FrontController($template);
$frontController->execute();
?>
