<?php
# GET /hotspots
function getAllHotspots(){


	$status = 200;
	try{
		$db = getConnection();

	    $statement = $db->query('SELECT * FROM '.$_ENV['DATABASE_TABLE']);
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

	    $statement = $db->query('SELECT * FROM  `'. $_ENV['DATABASE_TABLE'] .'` WHERE ID='.$id);

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

	$pre = 'hotspot-form-';
	
	$values = array(':name'=>$formData[$pre.'name'], 
				  ':xOff'=>$formData[$pre.'x'], 
				  ':yOff'=>$formData[$pre.'y'], 
				  ':description'=>$formData[$pre.'description'], 
				  ':category'=>$formData[$pre.'category'],
				  ':map'=>$formData[$pre.'map'],
				  );

	$status = 200;
	
	if(!isset( $formData[$pre.'name'] ) || 
	   !isset( $formData[$pre.'description'] ) || 
	   !isset( $formData[$pre.'x'] ) ||
	   !isset( $formData[$pre.'y'] ) 
	  ){
		$status = 400;
	}

	if($status != 400){
		try {
			$db = getConnection();
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


			$query = "INSERT INTO ".$_ENV['DATABASE_TABLE']." (name,xOff,yOff,description,category,map) VALUES 
	(:name,:xOff,:yOff,:description,:category,:map)";
						
			$statement = $db->prepare($query);			
			$statement->execute($values);

			$newId = $db->lastInsertId();

			if( !$newId ){				
				$status = 500;
			}

		} catch(PDOException $e) {
			die($e->getMessage());
	 		$status = 500;
	    }

	}

    return array($status,$newId);

}

# POST /hotspots/id
function updateHotspot($id, $formData){

	$pre = 'hotspot-form-';

	$values = array(':name'=>$formData[$pre.'name'], 
				  ':xOff'=>$formData[$pre.'x'], 
				  ':yOff'=>$formData[$pre.'y'], 
				  ':description'=>$formData[$pre.'description'], 
				  ':map'=>$formData[$pre.'map'],
				  ':category'=>$formData[$pre.'category']);

	$status = 200;

	if(!isset( $formData[$pre.'name'] ) || 
	   !isset( $formData[$pre.'description'] ) || 
	   !isset( $formData[$pre.'x'] ) ||
	   !isset( $formData[$pre.'y'] ) 
	  ){
		$status = 400;
	die(var_dump($formData));
	}

	if($status != 400){
		try{
			$db = getConnection();
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

		    $statement = $db->prepare('UPDATE '. $_ENV['DATABASE_TABLE'] .' SET name=:name,description=:description,xOff=:xOff,yOff=:yOff,category=:category,map=:map WHERE id='.$id);
			$statement->execute($values);

			if( $statement->rowCount() != 1 ){
				$status = 500;
				die("1");
			}

		} catch(PDOException $e) {
	 		echo($e->getMessage());
	 		$status = 500;
	 		die("2");
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

?>