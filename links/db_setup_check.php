<?php
//This file collects the data from an ajax function to create a file that contains the database connection and site information
//check if the data is received and valid
if(isset($_POST['formvalue']) && !empty($_POST['formvalue'])){
	//set, detect and validiate the values and attributes to be given to the database connection information file
	$formvalues = trim($_POST['formvalue']);
	list($mysql_db, $mysql_user, $mysql_pass) = explode("_", $formvalues);
	$mysql_host = $_SERVER['HTTP_HOST'];
	try{		
		# connect to the imdb_small database
		$db = new PDO("mysql:dbname=".$mysql_db."", "".$mysql_user."", "".$mysql_pass."");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//check if the connection is successful and create the connection file if necessary and make the file readonly,
		require '../etc/create_config.php';
		createConnection($mysql_user, $mysql_pass, $mysql_db, $db);	
	}catch(PDOException	 $er){
		echo 'Errrr!: '.$er	->getMessage();
	}	
}
	
?>