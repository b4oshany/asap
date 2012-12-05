<?php
if(mysql_connect("localhost","asap","")){ echo 'ok';}else{ echo 'not ok';}
class Questionnaire{
	function update($lecturer_id, $course_code, $year, $module, $rate, $quesid, $select, $condition){
		try{
			$rator = 'rate_';
			echo '<br>'.$rate.'<br>'.$quesid;								
			//check the number of times data is inputed
			$check = 0;
			// update and increment the collected results of the each question based on the ratings results
			for($i = 0; $i < 5; $i++){				
				$ratings[$i] = $rate;
				//set the mysql condition			 
				//echo '<br>'.$select.'<br>';
				$update = "UPDATE `results` SET ".$rator.$ratings[$i]." = ";
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
}
?>