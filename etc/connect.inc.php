<?php
	
	abstract class DatabaseConnect{		
		//privilige user for the database
		private $mysql_user = 'root';
		private $mysql_pass = '';
	
		//set the database to use
		private $mysql_db = 'asap'; 
		
		const errr = '<br> An sql error has occured';
		
		final public function __construct(){
			echo 'Attempting connection.........';
			if($this->connect() !=true){
				echo 'connection failed';
			}else{
				echo 'connected';
			}
		}
		
		final private function connect(){
			try{
				# connect to the database
				if(!mysql_connect($_SERVER['HTTP_HOST'], $this->mysql_user, $this->mysql_pass)){
					return false;
				}else{
					if(mysql_select_db($this->mysql_db)){
						return true;
					}
				}
			}catch (Exception $e){
				echo 'Errrr!: '.$e->getMessage();	
			}
		}
	}
?>