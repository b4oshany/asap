<?php
function createConnectionFile($mysql_user, $mysql_pass, $mysql_db, $db){
	if($db){
			file_put_contents('../etc/connect.inc.php',
'<?php
	
	class DatabaseConnection{
		//privilige user for the database
		private $mysql_user = \''.$mysql_user.'\';
		private $mysql_pass = \''.$mysql_pass.'\';
	
		//set the database to use
		$mysql_db = \''.$mysql_db.'\'; 
		
		protected function connect(){
			try{
			# connect to the database
				$db = new PDO("mysql:dbname=".$this->mysql_db, $this->mysql_user, $this->mysql_pass); //create a new pdo object
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //setting error handling
			}catch (PDOException $e){
				echo \'Errrr!: \'.$e->getMessage();	
			}
		}
	}
?>', 
		LOCK_EX );
	}else{	
		echo 'could not connect';
	}
}
function createProfileFile($sname, $cname, $slogan){
	file_put_contents('../etc/profile.inc.php',
'<?php
	//name of the site
	$sname = \''.$sname.'\';
	
	//campany name
	$cname = \''.$cname.'\';
	
	//slogo of the company
	$slogan = \''.$slogan.'\'; 
?>', 
	LOCK_EX );


}
?>