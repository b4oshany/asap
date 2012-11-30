<?php
	
	class DatabaseConnect{		
		//privilige user for the database
		private $mysql_user = 'root';
		private $mysql_pass = '';
	
		//set the database to use
		private $mysql_db = 'asap'; 
		
		protected $db = null;
		
		const errr = '<br> An sql error has occured';
		
		final public function __construct(){
			$this->db = new PDO("mysql:dbname=".$this->mysql_db."", $this->mysql_user, $this->mysql_pass);
			echo 'Attempting connection.........';
			try{
				if($this->connect() !=true){
					echo 'connection failed';
					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}else{
					echo 'connected<br>';
				}
			}catch(PDOException $e){
				echo 'Errrr!: '.$e->getMessage();	
			}
		}
		
		final private function connect(){
			# connect to the database
			if($this->db){
				return true;
			}else{
				return false;					
			}
		}
	}
	class bo extends DatabaseConnect{
		public function a(){
			$a = $this->db->query('select * from users');
			while($row = $a->fetch()) {
				print_r($row);
			}			
		}
	}
	$a = new bo;
	$a->a();
    
	
?>