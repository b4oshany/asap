<?php
// collect all results from the database and store them into an array
// however, a try statement is used just incase of an error

	
require_once '../mysql/update.sql.php';


if(isset($_POST['count'])){	
	for($c = 1; $c <= $_POST['count']; $c++){	
		
		if(isset($_POST["ratings".$c]) && isset($_POST["sex"]) && isset($_POST["status"]) && isset($_POST["yos"]) && 
			isset($_POST["age"]) && isset($_POST["lect_id"]) && isset($_POST["ccode"]) && isset($_POST["year"]) && isset($_POST["module"]) ){		
			$ratings = $_POST["ratings".$c];
			//echo '<br>o<br>';
			//collect lecture id and the course code to determine the mysql select and insert function
			$sex = $_POST["sex"]; //collect the sample gender
			$regs = $_POST["status"]; //collect the registration status
			$yos = $_POST["yos"]; //collect the year of study of the sample
			$age = $_POST["age"];
			$lect = $_POST["lect_id"]; //collect the lecture id
			$ccode = $_POST["ccode"]; //collect the course code
			$year = $_POST["year"]; //collect the year
			$mod = $_POST["module"]; //collect the module
			// set the rating value and the question id
			list($rate, $quesid) = explode("-", $ratings);
			//setting conditions
			$condition = "WHERE lect_id= ".$lect." AND date = ".$year." AND ccode = '".$ccode."' AND ques_id = '".$quesid."'";
			//setting the form of select based on condition
			$select = "SELECT * FROM `results` ".$condition."";
			//echo '<br>'.$select.'<br>';
			if (mysql_query($select)){ //if the question does exist then make the change
				//echo 'os';
				update($lect, $ccode, $year, $mod, $rate, $quesid, $select, $condition);
			}else{ //if the question does not exist for the applied condition, then create it
				//echo 'osha';
				mysql_query("INSERT INTO `ugrad_results` (`ques_id`, `ccode`, `lect_id`, `mod`, `date`, `sex`, `yos`, `age`, `regs`, `rate_".$rate."`) 
							VALUES ('".$quesid."', '".$ccode."', '".$lect."', ".$mod.", ".$year.",  '".$sex."', ".$yos.", '".$age."', '".$regs."', ".$rate.")");
				//echo $quesid."', '".$ccode."', '".$lect."', ".$mod.", ".$year.",  '".$sex."', ".$yos.", '".$age."', '".$regs."', ".$rate;
			}
		}
	}
}	

 


?>