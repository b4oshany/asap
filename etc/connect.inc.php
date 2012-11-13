<?php
$hoster = $_SERVER['HTTP_HOST'];

//connect to the database
$mysql_host = 'localhost';

if($hoster === 'localhost'){
	//privilige user for the database
	$mysql_user = 'root';
	$mysql_pass = '';
	
	//set the database to use
	$mysql_db = 'asap'; 	
}else{	
	// privilige user for the database
	$mysql_user = '793226_oshany';
	$mysql_pass = 'oshany2012';
	
	//set the database to use
	$mysql_db = 'inocreation_zxq_asap'; 	
}

//in case of database error display this
$con_error = 'could not connect';

// attempt to establish database connection
if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or !@mysql_select_db($mysql_db)){
	die($con_error);
}else{
echo 'connected';
}
?>