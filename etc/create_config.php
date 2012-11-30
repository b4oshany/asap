<?php
function createConnectionFile($mysql_user, $mysql_pass, $mysql_db, $db){
	if($db){
			file_put_contents('../etc/connect.inc.php',
'<?php
	
	abstract class DatabaseConnect{		
		//privilige user for the database
		private $mysql_user = \''.$mysql_user.'\';
		private $mysql_pass = \''.$mysql_pass.'\';
	
		//set the database to use
		private $mysql_db = \''.$mysql_db.'\'; 
		
		const errr = \'<br> An sql error has occured\';
		
		final public function __construct(){
			echo \'Attempting connection.........\';
			if($this->connect() !=true){
				echo \'connection failed\';
			}else{
				echo \'connected\';
			}
		}
		
		final private function connect(){
			try{
				# connect to the database
				if(!mysql_connect($_SERVER[\'HTTP_HOST\'], $this->mysql_user, $this->mysql_pass)){
					return false;
				}else{
					if(mysql_select_db($this->mysql_db)){
						return true;
					}
				}
			}catch (Exception $e){
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