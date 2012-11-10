<?php
// collect all results from the database and store them into an array
// however, a try statement is used just incase of an error

	
require_once '../etc/connect.inc.php';

	try{
	echo $_POST["ratings"];
		if(!empty($_POST["ratings"])){			
			list($rate, $quesid) = explode("-", $_POST["ratings"]);
			// update and increment the collected results of the each question based on the ratings results
			for($i = 0; $i < 5; $i++){
				$ratings[$i] = $rate.$i;
				//collect lecture id and the course code to determine the mysql select and insert function
				$lect = $_POST['lect_id'];
				$ccode = $_POST['ccode'];
				$year = $_POST['year'];
				$mod = $_POST['module'];
				echo $lect.'<br>'.$ccode.'<br>'.$quesod.'<br>';
				
				//set the mysql condition
				$condition = "WHERE lect_id=".$lect." AND ccode=".$ccode." AND ques_id=".$quesid;
				//echo $ratings[$i];
				if($ratings[$i] == 1){
					//select and update the ratings 1 of each question by 1
					$qresult = mysql_query("SELECT id, rate_1 FROM ugrad_courses ".$condition."");
					while($results = mysql_fetch_array($qresult)){
						$r = $results['rate_1'];
						//echo $r;
						$r++;
						//echo $r;
						$isql = mysql_query("UPDATE ugrad_courses SET rate_1 =".$r." ".$condition."");
					}
				}elseif($ratings[$i] == 2){
					//select and update the ratings 2 of each question by 1
					$qresult = mysql_query("SELECT id, rate_2 FROM ugrad_courses".$condition."");
					while($results = mysql_fetch_array($qresult)){
						$r = $results['rate_2'];
						//echo $r;
						$r++;
						//echo $r;
						$isql = mysql_query("UPDATE ugrad_courses SET rate_2 =".$r." ".$condition."");
					}
				}elseif($ratings[$i] == 3){
					//select and update the ratings 3 of each question by 1
					$qresult = mysql_query("SELECT id, rate_3 FROM ugrad_courses".$condition."");
					while($results = mysql_fetch_array($qresult)){
						$r = $results['rate_3'];
						//echo $r;
						$r++;
						//echo $r;
						$isql = mysql_query("UPDATE ugrad_courses SET rate_3 =".$r." ".$condition."");
					}
				}elseif($ratings[$i] == 4){
					//select and update the ratings 4 of each question by 1
					$qresult = mysql_query("SELECT id, rate_4 FROM ugrad_courses".$condition."");
					while($results = mysql_fetch_array($qresult)){
						$r = $results['rate_4'];
						//echo $r;
						$r++;
						//echo $r;
						$isql = mysql_query("UPDATE ugrad_courses SET rate_4 =".$r." ".$condition."");
					}
				}elseif($ratings[$i] == 5){
					//select and update the ratings 5 of each question by 1
					$qresult = mysql_query("SELECT id, rate_5 FROM ugrad_courses".$condition."");
					while($results = mysql_fetch_array($qresult)){
						$r = $results['rate_5'];
						//echo $r;
						$r++;
						//echo $r;
						$isql = mysql_query("UPDATE ugrad_courses SET rate_5 =".$r." ".$condition."");
					}
				}
			}
		}
	}catch (exception $e){
		echo $_POST['ratings0'];
	}
 


?>