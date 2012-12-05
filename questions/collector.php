<?php
// collect all results from the database and store them into an array
// however, a try statement is used just incase of an error

	
require_once '../mysql/questionnaire.class.php';


if(isset($_POST['count'])){	
	for($c = 1; $c <= $_POST['count']; $c++){			
		if(isset($_POST["ratings".$c]) && isset($_POST["sex"]) && isset($_POST["status"]) && isset($_POST["yos"]) && 
			isset($_POST["age"]) && isset($_POST["lect_id"]) && isset($_POST["ccode"]) && isset($_POST["year"]) && isset($_POST["module"]) ){		
			$ratings = $_POST["ratings".$c];
			$uques = new UgradQues;
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
			$rator = 'rate_'.$rate;
			$select = "*";
			$from_where = "ugrad_results";
			//echo '<br>'.$select.'<br>';
			echo 'lo';
			if ($uques->SelectQuery($select, $from_where, $condition)){ //if the question does exist then make the change
				echo 'os';
				$uques->UpdateData($from_where, $rate, $quesid, $condition);
			}else{ //if the question does not exist for the applied condition, then create it
				//echo 'osha';				
				$values = " ".$quesid."', '".$ccode."', '".$lect."', ".$mod.", ".$year.",  '".$sex."', ".$yos.", '".$age."', '".$regs."' ";
				$uques->InsertData($from_where, $rator_3, $values);
			}
		}
	}
}	

 


?>