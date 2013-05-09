<?php


function prepareMysql (){

	$link = mysql_connect($_ENV['DATABASE_SERVER'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
	if (!$link) {
	    die('Verbindung zur Datenbank schlug fehl: ' . mysql_error());
	}


	$db_selected = mysql_select_db($_ENV['DATABASE_NAME'], $link);
	if (!$db_selected) {
    	die ('Kann '.$ENV['DATABASE_NAME'].' nicht benutzen : ' . mysql_error());
	}

	return $link;	
}

?>