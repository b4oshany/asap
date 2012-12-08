<?php
// collect all results from the questionnaire and store them into an array, which will be inserted into the database
// however, a try statement is used just incase of an error

	
require_once '../mysql/questionnaire.class.php';


if(isset($_POST['count'])){	
	$uques = new UgradQues;
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
			$rator = 'rate_'.$rate;
			$select = "*";
			$from_where = "ugrad_results";			
			$checkRow = count($uques->ReturnArrayData($uques->SelectQuery($select, $from_where, $condition)));
			if ($checkRow > 0){ //if the question does exist then make the change
				$uques->UpdateData($from_where, $rate, $quesid, $condition);
			}else{ //if the question does not exist for the applied condition, then add to table				//echo 'osha';				
				$values = "'".$quesid."', '".$ccode."', '".$lect."', ".$mod.", ".$year.",  '".$sex."', ".$yos.", '".$age."', '".$regs."', 1";
				$uques->InsertData($from_where, $rator, $values);
			}
		}
	}
}	

 


?>