<?php


function indexAction(){
    die(json_encode(getAllHotspots()));    
}

function showAction ($id) {
    die(json_encode(getHotspot($id)));  
}

function createAction() {
	
	
	// Check for required missing parameters
	$errStack = array();
	if(!isset( $_POST['name'] )){
		array_push($errStack, "Name missing");
	}
	if(!isset( $_POST['xOff'] )){
		array_push($errStack, "xOff missing");
	}
	if(!isset( $_POST['yOff'] )){
		array_push($errStack, "yOff missing");
	}
	if(count($errStack) > 0){
		die(json_encode(array("errors" => $errStack)));	
	}
	
	// Set default values for missing optinal parameters
	// $var = isset($_POST['var'])?$_POST['var']:"default";

	try {
		$db = getConnection();
		$statement = $db->prepare("INSERT INTO ".$_ENV['DATABASE_TABLE']." (name,xOff,yOff) VALUES (:name,:xOff,:yOff)");
		$statement->execute(array(':name'=>$_POST['name'],
				                  ':xOff'=>$_POST['xOff'],
				                  ':yOff'=>$_POST['yOff']
				                  )
					);
		$success = $statement->rowCount();

		if( $success ){
			echo(json_encode(getHotspot($db->lastInsertId())));
		}else{
			echo(json_encode(array("error" => 'No rows affected')));	
		}
	} catch(PDOException $e) {
 		echo(json_encode(array("error" => $e->getMessage())));
    }

}

function updateAction($id) {
	$success = updateHotspot($id, $_POST);

	if( $success ){
		die(json_encode(getHotspot($id)));
	}else{
		die(json_encode(array("errors" => 'No rows affected')));	
	}

}

function deleteAction($id) {
	try{
	    $db = getConnection();

	    $statement = $db->query('DELETE FROM '. $_ENV['DATABASE_TABLE'] .' WHERE ID='.$id);
		$statement->fetchAll(PDO::FETCH_ASSOC);

		$success = $statement->rowCount();
	} catch(PDOException $e) {
 		die(json_encode(array("error" => $e->getMessage())));
    }

	if( $success ){
		die(json_encode(array("success")));	
	}else{
		die(json_encode(array("errors" => 'No rows affected')));	
	}
}

function rootAction() {
    echo "Slim Server running";
}

function getAllHotspots(){
	try{
		$db = getConnection();

	    $statement = $db->query('SELECT * FROM hotspots');
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch(PDOException $e) {
 		die(json_encode(array("error" => $e->getMessage())));
    }
	return $results;
}

function getHotspot($id){
	try{
		$db = getConnection();

	    $statement = $db->query('SELECT * FROM '. $_ENV['DATABASE_TABLE'] .' WHERE ID='.$id);
		$result = $statement->fetchAll(PDO::FETCH_OBJ);
	} catch(PDOException $e) {
 		die(json_encode(array("error" => $e->getMessage())));
    }

	return $result;
}

function updateHotspot($id, $values){
	
	try{
		$db = getConnection();
	    $statement = $db->prepare('UPDATE '. $_ENV['DATABASE_TABLE'] .' SET name=:name,
	    															   xOff=:xOff,
	    															   yOff=:yOff WHERE id='.$id);
		$statement->execute(array(':name'=>$values['name'],
				                  ':xOff'=>$values['xOff'],
				                  ':yOff'=>$values['yOff']
				                  ));
	} catch(PDOException $e) {
 		die(json_encode(array("error" => $e->getMessage())));
    }
	return $statement->rowCount();
}

function getConnection() {
    $dbh = new PDO('mysql:host='.$_ENV['DATABASE_SERVER'].';dbname='.$_ENV['DATABASE_NAME'].';charset=utf8', $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}
?>