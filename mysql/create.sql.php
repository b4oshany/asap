<?php
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


class dbManage {
	function create($tb_name, $tb_col){	
		$create = "create if not exist ".$tb_name."( ".$tb_col.") ";
	}
}


?>