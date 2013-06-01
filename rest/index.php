<?php
require 'Slim/Slim.php';
require 'HotspotController.inc.php';
require 'CategoriesController.inc.php';
require 'environment_variables.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();


function getConnection(){
	$db = new PDO('mysql:host='.$_ENV['DATABASE_SERVER'].';dbname='.$_ENV['DATABASE_NAME'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
	return $db;
}

$app->get('/foo', function () use ($app) {
    $app->render('foo.php'); // <-- SUCCESS
});


## GET /
$app->get('/', function() use ($app) {
    echo "Root called";
});

/*

	HOTSPOTS

*/

# GET /hotspots
$app->get('/hotspots', function() use ($app){

	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';

	$result = getAllHotspots();

	$app->response()->status($result[0]);

	if($result[0] == 200){
    	$res->write(json_encode($result[1])); 
	}else{
		$res->write("{error: ".$status."}");
	}

});


# GET /hotspots/id
$app->get('/hotspots/:id', function($id) use ($app){

	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';

	$result = getHotspot($id);
	

	$app->response()->status($result[0]);
	if($result[0] == 200){
    	$res->write(json_encode($result[1])); 
	}else{
		$res->write("{error: ".$result[0]."}");
	}

});


# POST /hotspots
$app->post('/hotspots', function() use ($app){
	
	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';

	$result = createHotspot($_POST);

	$app->response()->status($result[0]);
	
	if($result[0] == 200){
		$hotspot = array('id'=>$result[1], 'name'=>$_POST['name'], 'xOff'=>$_POST['xOff'], 'yOff'=>$_POST['yOff'],);

		$res->write(json_encode($hotspot));
	}else{
		$res->write("{error: ".$result[0]."}\n");
	}

});


# POST /hotspots/id
$app->post('/hotspots/:id', function($id) use ($app){
	
	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';

	$status = updateHotspot($id, $_POST);

	$app->response()->status($status);

	if($status == 200){
		$hotspot = array('name'=>$_POST['name'], 'xOff'=>$_POST['xOff'], 'yOff'=>$_POST['yOff']);

		$res->write(json_encode($hotspot));
	}else{
		$res->write("{error: ".$status."}");
	}

});


# DELETE /hotspots/id
$app->delete('/hotspots/:id', function($id) use ($app){
	
	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';

	$status = deleteHotspot($id);

	$app->response()->status($status);


	if($status == 200){
		$res->body("{}");
	}else{
		$res->write("{error: ".$status."}");
	}

});


/*

	CATEGORIES

*/


# GET /categories
$app->get('/categories', function() use ($app){

	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';

	$result = getAllCategories();

	$app->response()->status($result[0]);

	if($result[0] == 200){
    	$res->write(json_encode($result[1])); 
	}else{
		$res->write("{error: ".$status."}");
	}

});


# GET /categories/id
$app->get('/categories/:id', function($id) use ($app){

	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';

	$result = getCategory($id);

	$app->response()->status($result[0]);
	if($result[0] == 200){
    	$res->write(json_encode($result[1])); 
	}else{
		$res->write("{error: ".$result[0]."}");
	}

});


# POST /categories
$app->post('/categories', function() use ($app){
	
	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';

	$result = createCategory($_POST);

	$app->response()->status($result[0]);
	
	if($result[0] == 200){
		$category = array('id'=>$result[1], 'name'=>$_POST['name'], 'xOff'=>$_POST['xOff'], 'yOff'=>$_POST['yOff'],);

		$res->write(json_encode($category));
	}else{
		$res->write("{error: ".$result[0]."}\n");
	}

});


# POST /categories/id
$app->post('/categories/:id', function($id) use ($app){
	
	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';

	$status = updateCategory($id, $_POST);

	$app->response()->status($status);

	if($status == 200){
		$category = array('name'=>$_POST['name'], 'xOff'=>$_POST['xOff'], 'yOff'=>$_POST['yOff']);

		$res->write(json_encode($category));
	}else{
		$res->write("{error: ".$status."}");
	}

});


# DELETE /categories/id
$app->delete('/categories/:id', function($id) use ($app){
	
	$res = $app->response();
	$res['Content-Type'] = 'application/json';
	$res['X-Powered-By'] = 'Slim';

	$status = deleteCategory($id);

	$app->response()->status($status);


	if($status == 200){
		$res->body("{}");
	}else{
		$res->write("{error: ".$status."}");
	}

});



$app->run();
$app->response()->status(200);
