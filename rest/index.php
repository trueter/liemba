<?php
require 'Slim/Slim.php';
require 'functions.inc.php';
require 'environment_variables.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

$databaseLink = prepareMysql();

$result = mysql_query("SHOW TABLES LIKE 'hotspots'");
$tableExists = mysql_num_rows($result) > 0;

#header("Content-Type: application/json");

## Home
$app->get('/', function () {
    echo "Welcome to my Slim Server";
});

## Index
$app->get('/hotspots', function () {
    
    $array = array();
    $result = mysql_query("SELECT * FROM hotspots");
        while($row = mysql_fetch_assoc($result)){
    
            $array[] = $row;
    }
    
    print_r(json_encode($array));    
});

// POST route
$app->post('/hotspots', function () {
    
    print_r(json_encode($_GET));
});

## Show
$app->get('/hotspots/:id', function ($id) {
    $array = array();
    $result = mysql_query("SELECT * FROM hotspots WHERE ID=".$id);
        while($row = mysql_fetch_assoc($result)){
            $array[] = $row;
    }

    print_r(json_encode($array));
});


## Show
$app->put('/hotspots/:id', function ($id) {
    echo "Hotspots#update";
    echo "<br>";
    print_r(json_encode($_GET));

});

// DELETE route
$app->delete('/hotspots/:id', function () {
    echo "Hotspots#delete";
    echo "<br>";
    print_r(json_encode($_GET));

});

$app->run();
$app->response()->status(200);
mysql_close($databaseLink);