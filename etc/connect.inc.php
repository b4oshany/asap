<?php
	
	class DatabaseConnection{
		//privilige user for the database
		private $mysql_user = 'root';
		private $mysql_pass = '';
	
		//set the database to use
		private $mysql_db = 'asap';
		
		protected function connect(){
			try{
			# connect to the database
				$db = new PDO("mysql:dbname=".$this->mysql_db, $this->mysql_user, $this->mysql_pass); //create a new pdo object
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //setting error handling
				return $db;
			}catch (PDOException $e){
				echo 'Errrr!: '.$e->getMessage();	
			}
		}
	}
?>