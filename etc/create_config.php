<?php
function createConnection($mysql_user, $mysql_pass, $mysql_db, $db){
	if($db){
			file_put_contents('../etc/connect.inc.php',
'<?php
	//privilige user for the database
	$mysql_user = \''.$mysql_user.'\';
	$mysql_pass = \''.$mysql_pass.'\';
	
	//set the database to use
	$mysql_db = \''.$mysql_db.'\'; 
	
	try{
	# connect to the database
		$db = new PDO("mysql:dbname=".$mysql_db."", "".$mysql_user."", "".$mysql_pass.""); //create a new pdo object
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //setting error handling
	}catch (PDOException $e){
		echo \'Errrr!: \'.$e->getMessage();	
	}
?>', 
		LOCK_EX );
	}else{	
		echo 'could not connect';
	}

}
?>