<?php
use \Psr\Http\Message\ServerRequestInterface as Request;

require '../vendor/autoload.php';
date_default_timezone_set ('Asia/Kolkata'); 

$app = new \Slim\App();

require 'src/config/includes.php'; //load all model and controllers
require 'src/dependencies.php';
require 'src/config/Environment.php';


require 'src/routes.php';

$app->run();
