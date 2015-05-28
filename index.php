<?php
	/*
	* light weight php mvc-framework
	*
	* https://github.com/ReWrite94/lightweight-php-mvc-framework
	*/

	//report all errors
	error_reporting(E_ALL);

	//this can be turned off and on for prod/dev environment
	ini_set('display_errors', 'on');

	session_start();
	
	require_once 'controller/FrontController.php';
	require_once 'class/Template.php';
	
	$template = new Template();
	
	$frontController = new FrontController($template);
	$frontController->execute();
?>
