<?php
	
	class DatabaseConnect{
		//privilige user for the database
		private $mysql_user = 'root';
		private $mysql_pass = '';
	
		//set the database to use
		private $mysql_db = 'asap'; 
		
		const p = 'ok';
		
			public function __construct(){
				echo 'Attemption connection....';
				$this->connect();
			}
		
		final private function connect(){
			try{
				# connect to the database
				if(!mysql_connect($_SERVER['HTTP_HOST'], $this->mysql_user, $this->mysql_pass)){
					return false;
				}else{
					if(mysql_select_db($this->mysql_db)){
						echo 'ok';
						return true;
					}
				}
			}catch (Exception $e){
				echo 'Errrr!: '.$e->getMessage();	
			}
		}
			
	}
	class A{
		public function CreateTable($tablename, $cols){
			try{
				$sql = 'create table '.$tablename.' ('.$cols.' )';
				if(!mysql_query($sql)){
					throw new Exception(parent::errr);
				}
			}catch(Exception $e){
				
			}
		}		
	}
	$a = new A;
	$b = new DatabaseConnect;
	$lectq = 'FirstName varchar(15)';
	$b = $a->CreateTable('pesrrt', $lectq);
	
?>