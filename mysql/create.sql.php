<?php
require_once '../etc/connect.inc.php';
//create_table(table name, column);

//campus -> id int(10), campus id varchar(15), campus name string(35), ratings int(100), date date

//faculties -> id int(10), fact_id varchar(15), fact_name varchar(15), campus id varchar(15), ratings int(100) date date

//department -> id int(10), department id varchar(15), department name string(35), faculity id varchar(15), ratings int(100), date date

//lecturer -> id int(10), lecturer id varchar(15), department id varchar(15), lecturer name string(35), ratings int(100), date date

//courses -> id int(10), course code varchar(15), course name string(35), department id varchar (15), lecturer id varchar(15)
	//ratings int(100), date date

//results -> id int(10), question id varchar(15), course code varchar(15), lecturer name string(35), module int(10), date date, 
	// sex string(2), year of study date, age int(10),  registration status varchar(5), ratings 1 int(100), ratings 2 int(100),
	// ratings 3 int(100), ratings 4 int(100), ratings 5 int(100)
	
//create_table for courses


class Table extends DatabaseConnection{		
	public function CreateTable(){
		$connection = parent::connect();
		$id = '4';
		$user = "oshany"; $pass = md5("bailey");
		$cols = 'id int(10), campus id varchar(15), campus name string(35), ratings int(100), date date';
		$tab = 'campus';
		//$sql = 'SELECT * FROM users  WHERE username = :user ';
		//$sql = 'insert into users (username, passer) values(:user, :pass)';
		$sql = 'create if not exist :tablename ( :cols )';
		try{
			$pquery = $connection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
			if($pquery->execute(array(':tablename' => $tab, ':cols' => $cols))){echo 'ok';}else{ echo 'not ok';}
			
		}catch(PDOException $e){
			echo 'Errr '.$e->getMessage();
		}
	}
}

$lectq = 'FirstName varchar(15)';
$lect = new Table;
$lect->CreateTable();

?>