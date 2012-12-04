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

/* 
Entending the table class to the databasbase connection to run the pdo connection to the server. As soon as the table class is instantiated 
it calls the parent class, DatabaseConnect constructor to make the necessary connection to the database server
*/
class Table extends DatabaseConnect{
	//The function below is used to create tables
	//It takes in two variables, the table name and the columns' name with their properties to be run in the pdo query to create the table
	public function CreateTable($tablename, $cols){
		try{
			$sql = 'create table '.$tablename.' ('.$cols.' )';
			//Checking if the query ran successfully, if not then throw an exception
			if(!$this->db->query($sql)){
				throw new Exception(parent::errr);
			}
		}catch(Exception $e){
			
		}
	}
	
	//This function is used to select the data from the table based on the condition,
	//Joins, wheres, distinct and other sql functions can be used in the below function
	// Joins and wheres should be placed into the query condition, while distinct and like should be placed in the form connection
	public function SelectQuery($select_condition, $from_condition, $query_condition){
		try{
			$sql = 'select '.$select_condition.' from '.$from_condition.' '.$query_condition.'';
			$run_query = $this->db->query($sql);
			//Checking if the query ran successfully, if not then throw an exception
			if(!$run_query){
				throw new Exception(parent::errr);
			}else{
				echo 'ok';
				return $run_query;
			}
		}catch(Exception $e){
			echo $e->getMessage();
		}		
	}
	//The function below is used to place table data into an array for easier extraction and display
	public function ReturnArrayData($query){
		$count = 0;
		$data = array(); 
		//Traverse through each row and place them into an associate array
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[$count] = $row;
			$count++;			
		}
		// Afterwards return the associate array for display or any other use
		return $data;
	}
}

//$lectq = 'FirstName varchar(15)';
//$lect = new Table;
//$lect->CreateTable('pesss', $lectq);
//$query = $lect->SelectQuery('*', 'users', '');
//$lect->ResultsQuery($query);
//print_r($lect->ResultsQuery($query));

?>