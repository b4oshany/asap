<?php

class DataCon {
	
	//private $hoster = $_SERVER['HTTP_HOST'];

	//connect to the database
	//private $mysql_host = 'localhost';	
	
	public function __construct($db_host, $db_name, $db_user, $db_password){
		if(!@mysql_connect($db_host,$db_user,$db_pass)){	
			//if database is not connected then kill the page and echo could not connect
			$con_error = 'could not connect';
			die($con_error);			
		}else{
			echo $this->db_name;
		}
	}
	public function db_rename(){
		echo $this->db_name;
	}
	
}
$hoster = $_SERVER['HTTP_HOST'];

//connect to the database
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

$o = new DataCon($hoster, $mysql_db, $mysql_user, $mysql_pass);
echo $o->db_rename();
?>