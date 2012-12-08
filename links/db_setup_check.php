<?php
//This file collects the data from an ajax function to create a file that contains the database connection and site information
//check if the data is received and valid
if(isset($_POST['formvalue']) && !empty($_POST['formvalue'])){
	//set, detect and validiate the values and attributes to be given to the database connection information file
	$formvalues = trim($_POST['formvalue']);
	//echo $formvalues.'<br>';
	$formnameCheck = substr($formvalues, 0, stripos($formvalues, '_'));
	$formvaluetest =  substr($formvalues, stripos($formvalues, '_') + 1);
	//echo $formnameCheck;
	require '../etc/create_config.php';
	if($formnameCheck == "datainfo"){
		connectionCreationFn($formvaluetest);	
	}else if($formnameCheck == "sprofile"){
		setupProfileFn($formvaluetest);
	}
}

function connectionCreationFn($formvaluetest){	
	//echo $formvaluetest;
	list($mysql_db, $mysql_user, $mysql_pass) = explode("_", $formvaluetest);
	$mysql_host = $_SERVER['HTTP_HOST'];
	try{		
		# connect to the imdb_small database
		$db = new PDO("mysql:dbname=".$mysql_db."", "".$mysql_user."", "".$mysql_pass."");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//check if the connection is successful and create the connection file if necessary and make the file readonly,
		
		createConnectionFile($mysql_user, $mysql_pass, $mysql_db, $db);	
	}catch(PDOException	 $er){
		echo 'Errrr!: '.$er	->getMessage();
	}	
}
function setupProfileFn($formvaluetest){	
	//echo $formvaluetest;
	list($sname, $cname, $slogan) = explode("_", $formvaluetest);
	try{
		createProfileFile($sname, $cname, $slogan);	
	}catch(PDOException	 $er){
		echo 'Errrr!: '.$er	->getMessage();
	}	
}
?>