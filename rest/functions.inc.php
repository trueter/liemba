<?php


function indexAction(){
    
	$db = new PDO('mysql:host='.$_ENV['DATABASE_SERVER'].';dbname='.$_ENV['DATABASE_NAME'].';charset=utf8', $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);

    $statement = $db->query('SELECT * FROM hotspots');
	$results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    print_r(json_encode($results));    
}

function showAction ($id) {
    
	$db = new PDO('mysql:host='.$_ENV['DATABASE_SERVER'].';dbname='.$_ENV['DATABASE_NAME'].';charset=utf8', $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
	
    $statement = $db->query('SELECT * FROM hotspots WHERE ID='.$id);
	$results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    print_r(json_encode($results));  

}

function createAction() {

/* Buggy
	$db = new PDO('mysql:host='.$_ENV['DATABASE_SERVER'].';dbname='.$_ENV['DATABASE_NAME'].';charset=utf8', $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);

	$stmt = $db->prepare("INSERT INTO hotspots(name,xOff,yOff) VALUES('a','b','c')");
	$stmt->execute();#array(':field1' => $_GET['name'], ':field2' => $_GET['xOff'], ':field3' => $_GET['yOff']));
	$affected_rows = $stmt->rowCount();
	die("affected rows : ".$affected_rows);
	*/
	echo "Hotspots#create";
}

function updateAction($id) {
    echo "Hotspots#update:".$id;
}

function deleteAction($id) {
    echo "Hotspots#delete:".$id;
}

function rootAction() {
    echo "Slim Server running";
}

function prepareMysql (){
/*
	$link = mysql_connect($_ENV['DATABASE_SERVER'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
	if (!$link) {
	    die('Verbindung zur Datenbank schlug fehl: ' . mysql_error());
	}


	$db_selected = mysql_select_db($_ENV['DATABASE_NAME'], $link);
	if (!$db_selected) {
    	die ('Kann '.$ENV['DATABASE_NAME'].' nicht benutzen : ' . mysql_error());
	}
*/

	


	return $link;	
}

?>