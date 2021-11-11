<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/app/routes.php';

$router->start(
	$router->routes
);