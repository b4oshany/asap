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


class Table extends DatabaseConnect{		
	
	public function CreateTable($tablename, $cols){
		try{
			$sql = 'create table '.$tablename.' ('.$cols.' )';
			if(!mysql_query($sql)){
				throw new Exception(parent::errr);
			}
		}catch(Exception $e){
			
		}
	}
	public function SelectQuery($select_condition, $from_condition, $query_conition){
		try{
			$sql = 'select '.$select_condition.' from '.$from_condition.' '.$query_condition.'';
			$run_query = mysql_query($sql);
			if(!$run_query){
				throw new Exception(parent::errr);
			}else{
				return $run_query;
				}
		}catch(Exception $e){
			echo $e->getMessage();
		}		
	}
	public function ResultsQuery(){
		while($row = mysql_fetch_array($run_query))
		{		
			echo $row['id'] . " " . $row['username'];
			echo "<br />";
		}
	}
}

$lectq = 'FirstName varchar(15)';
$lect = new Table;
//$lect->CreateTable('pes', $lectq);
$row = $lect->SelectQuery();
foreach ($row as $row2) {
		echo $row2["id"];		
	}
	
//$cols = 'id int(10), campus id varchar(15), campus name string(35), ratings int(100), date date';

?>