<?php
require 'Slim/Slim.php';
require 'functions.inc.php';
require 'environment_variables.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();


## Home
$app->get('/', 'rootAction');

$app->get('/hotspots', 'indexAction');
$app->get('/hotspots/:id', 'showAction');
$app->post('/hotspots', 'createAction');
$app->delete('/hotspots/:id', 'deleteAction');


$app->run();
$app->response()->status(200);
