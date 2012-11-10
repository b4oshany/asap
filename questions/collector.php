<?php
// collect all results from the database and store them into an array
// however, a try statement is used just incase of an error

	
require_once '../etc/connect.inc.php';


if(isset($_POST['count'])){
	for($c = 1; $c <= $_POST['count']; $c++){
		if(isset($_POST["ratings".$c]) && isset($_POST["lect_id"]) && isset($_POST["ccode"]) && isset($_POST["year"]) && isset($_POST["module"]) ){		
			$ratings = $_POST["ratings".$c];
			//collect lecture id and the course code to determine the mysql select and insert function
			$lect = $_POST['lect_id']; //collect the lecture id
			$ccode = $_POST['ccode']; //collect the course code
			$year = $_POST['year']; //collect the year
			$mod = $_POST['module']; //collect the module
			// set the rating value and the question id
			list($rate, $quesid) = explode("-", $ratings);
			$condition = "WHERE lect_id = ".$lect." AND date = ".$year." AND ccode = '".$ccode."' AND ques_id = '".$quesid."'";
			$select = "SELECT * FROM `ugrad_courses` ".$condition."";
			if ($qresult = mysql_query($select)){ //if the question does exist then make the change
			update($lect, $ccode, $year, $mod, $rate, $quesid, $select, $condition);
			}else{ //if the question does not exist for the applied condition, then create it
			mysql_query("INSERT INTO `ugrad_courses` (ques_id, lect_id, ccode, module, date, rate_".$rate.") 
						VALUES ('".$quesid."', ".$lect.", '".$ccode."', ".$module.", ".$year.", ".$rate.")");
			}
		}
	}
}
function update($lecturer_id, $course_code, $year, $module, $rate, $quesid, $select, $condition){
	try{
		$rator = 'rate_';
		//echo '<br>'.$rate.'<br>'.$quesid;								
		//check the number of times data is inputed
		$check = 0;
		// update and increment the collected results of the each question based on the ratings results
		for($i = 0; $i < 5; $i++){				
			$ratings[$i] = $rate;
			//set the mysql condition			 
			//echo $select;
			$update = "UPDATE ugrad_courses SET ".$rator.$ratings[$i]." = ";
			//echo $ratings[$i];				
			//echo '<br>check = '.$quesid.$check ;
			//echo '<br>check = '.$quesid.'0';
			
			if($ratings[$i] == 1 & ($quesid.$check == $quesid.'0')){
				//select and update the ratings 1 of each question by 1
				$qresult = mysql_query($select);
				while($results = mysql_fetch_array($qresult)){
					//get question 1 value from the database
					$r = $results['rate_1'];
					//echo $r;
					//update question 1 value by 1
					$r++;
					//echo '<br>'.$r;
					$isql = mysql_query(" ".$update.$r." ".$condition." ");
					$check = $check + 1;
					//echo '<br>check = '.$check;
				}
			}elseif($ratings[$i] == 2 & ($quesid.$check == ($quesid.'0'))){
				//select and update the ratings 2 of each question by 1
				$qresult = mysql_query($select);
				while($results = mysql_fetch_array($qresult)){
					//get question 1 value from the database
					$r = $results['rate_2'];
					//echo $r;
					//update question 1 value by 1
					$r++;
					//echo '<br>'.$r;
					$isql = mysql_query(" ".$update.$r." ".$condition." ");
					$check = $check + 1;
					//echo '<br>check = '.$check;
				}
			}elseif($ratings[$i] == 3 & ($quesid.$check == ($quesid.'0'))){
				//select and update the ratings 1 of each question by 1
				$qresult = mysql_query($select);
				while($results = mysql_fetch_array($qresult)){
					//get question 1 value from the database
					$r = $results['rate_3'];
					//echo $r;
					//update question 1 value by 1
					$r++;
					//echo '<br>'.$r;
					$isql = mysql_query(" ".$update.$r." ".$condition." ");
					$check = $check + 1;
					//echo '<br>check = '.$check;
				}
			}elseif($ratings[$i] == 4 & ($quesid.$check == ($quesid.'0'))){
				//select and update the ratings 1 of each question by 1
				$qresult = mysql_query($select);
				while($results = mysql_fetch_array($qresult)){
					//get question 1 value from the database
					$r = $results['rate_4'];
					//echo $r;
					//update question 1 value by 1
					$r++;
					//echo '<br>'.$r;
					$isql = mysql_query(" ".$update.$r." ".$condition." ");
					$check = $check + 1;
					//echo '<br>check = '.$check;
				}
			}elseif($ratings[$i] == 5 & ($quesid.$check == ($quesid.'0'))){
				//select and update the ratings 1 of each question by 1
				$qresult = mysql_query($select);
				while($results = mysql_fetch_array($qresult)){
					//get question 1 value from the database
					$r = $results['rate_5'];
					//echo $r;
					//update question 1 value by 1
					$r++;
					//echo '<br>'.$r;
					$isql = mysql_query(" ".$update.$r." ".$condition." ");
					$check = $check + 1;
					//echo '<br>check = '.$check;
				}
			}
		}				
	}catch (exception $e){
		echo $_POST['ratings0'];
	}
}
 


?>