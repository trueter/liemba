<?php


# GET /hotspots
function getAllHotspots(){

	$status = 200;
	try{
		$db = getConnection();

	    $statement = $db->query('SELECT * FROM hotspots');
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

	} catch(PDOException $e) {
 		echo($e->getMessage());
 		$status = 500;
    }

    if(empty($results)){
    	$status = 204;
    }

	return array($status, $results);
}

# GET /hotspots/id
function getHotspot($id){

	$status = 200;
	try{
		$db = getConnection();

	    $statement = $db->query('SELECT * FROM '. $_ENV['DATABASE_TABLE'] .' WHERE ID='.$id);

		$result = $statement->fetchAll(PDO::FETCH_OBJ);
	} catch(PDOException $e) {
 		echo($e->getMessage());
 		$status = 500;
    }

    try{
    	$result = $result[0];
    } catch (Exception $e) {
    	echo "Error compressing Array into Object";
    	$status = 500;
    }

    if(empty($result)){
    	$status = 404;
    }

	return array($status, $result);
}


# POST /hotspots
function createHotspot($formData) {
	$status = 200;
	
	if(!isset( $formData['name'] ) || 
	   !isset( $formData['xOff'] ) || 
	   !isset( $formData['yOff'] ) 
	  ){
		$status = 400;
	}

	if($status != 400){
		try {
			$db = getConnection();
			$statement = $db->prepare("INSERT INTO ".$_ENV['DATABASE_TABLE']." (name,xOff,yOff) VALUES (:name,:xOff,:yOff)");
			$statement->execute(array(':name'=>$formData['name'], ':xOff'=>$formData['xOff'], ':yOff'=>$formData['yOff']));
			$success = $db->lastInsertId();

			if( !$success ){
				$status = 400;
			}

		} catch(PDOException $e) {
	 		echo($e->getMessage());
	 		$status = 500;
	    }
	}

    return $status;

}

# POST /hotspots/id
function updateHotspot($id, $formData){

	$status = 200;

	if(!isset( $id ) || 
	   !isset( $formData['name'] ) || 
	   !isset( $formData['xOff'] ) || 
	   !isset( $formData['yOff'] ) 
	  ){
		$status = 400;
	}

	if($status != 400){
		try{
			$db = getConnection();
		    $statement = $db->prepare('UPDATE '. $_ENV['DATABASE_TABLE'] .' SET name=:name,xOff=:xOff,yOff=:yOff WHERE id='.$id);
			$statement->execute(array(':name'=>$formData['name'], ':xOff'=>$formData['xOff'], ':yOff'=>$formData['yOff']));

			if( $statement->rowCount() != 1 ){
				$status = 500;
			}

		} catch(PDOException $e) {
	 		echo($e->getMessage());
	 		$status = 500;
	    }
	}

	return $status;
}

# DELETE /hotspots/id
function deleteHotspot($id) {
	
	$status = 200;

	try{
	    $db = getConnection();

	    $statement = $db->query('DELETE FROM '. $_ENV['DATABASE_TABLE'] .' WHERE ID='.$id);
		
		if($statement->rowCount() != 1){
			$status = 500;
		}
	} catch(PDOException $e) {
 		echo($e->getMessage());
 		$status = 500;
    }
	
	return $status;
	
}

# GET /
function rootAction() {
    echo "Root called";
}


function getConnection() {
    $dbh = new PDO('mysql:host='.$_ENV['DATABASE_SERVER'].';dbname='.$_ENV['DATABASE_NAME'].';charset=utf8', $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}
?>