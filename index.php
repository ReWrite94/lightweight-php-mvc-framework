<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/

session_start();
include_once 'controller/frontcontroller.php';
include_once 'class/template.php';
$template = new Template();
$frontController = new FrontController($template);
$frontController->execute();
?>