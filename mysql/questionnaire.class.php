<?php
require_once 'create.sql.php';

class UgradQues extends Table{
	public function InsertData($tablename, $rate, $values){
		try{
			$cols = 'ques_id, ccode, lect_id, module, date, sex, yos, age, regs, '.$rate.' ';
			$sql = 'insert into '.$tablename.'('.$cols.') values('.$values.')';
			
			//INSERT into `ugrad_results` () 
			//values('ques1_comp', 'COMP2240', '620042528', 4,  2012, 'male', 1, 'young', 'pt', 2)
			echo '<br>'.$sql;
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


	public function UpdateData($from_where, $rate, $quesid, $condition){
		try{
			$rator = 'rate_';
			//echo '<br>'.$rate.'<br>'.$$a = new UgradQues;quesid;								
			//check the number of times data is inputed
			$check = 0;
			// update and increment the collected results of the each question based on the ratings results
			for($i = 0; $i < 5; $i++){				
				$ratings[$i] = $rate;
				//set the mysql condition			 
				//echo '<br>'.$select.'<br>';
				$update = "UPDATE `".$from_where."` SET ".$rator.$ratings[$i]." = ".$rator.$ratings[$i]." + 1 ".$condition." ";
				//echo $ratings[$i];				
				//echo '<br>check = '.$quesid.$check ;
				//echo '<br>check = '.$quesid.'0';
				
				if($ratings[$i] == 1 && ($quesid.$check == $quesid.'0')){
					//select and update the ratings 1 of each question by 1
					try{
						if($this->db->query($update)){
							//get question 1 value from the database
							$check = $check + 1;
						}else{
							throw new Exception(parent::errr);
						}
					}catch(Exception $e){
						echo $e->getMessage();
					}
				}elseif($ratings[$i] == 2 && ($quesid.$check == $quesid.'0')){
					//select and update the ratings 1 of each question by 1
					try{
						if($this->db->query($update)){
							//get question 1 value from the database
							$check = $check + 1;
						}else{
							throw new Exception(parent::errr);
						}
					}catch(Exception $e){
						echo $e->getMessage();
					}
				}elseif($ratings[$i] == 3 && ($quesid.$check == $quesid.'0')){
					//select and update the ratings 1 of each question by 1
					try{
						if($this->db->query($update)){
							//get question 1 value from the database
							$check = $check + 1;
						}else{
							throw new Exception(parent::errr);
						}
					}catch(Exception $e){
						echo $e->getMessage();
					}
				}elseif($ratings[$i] == 4 && ($quesid.$check == $quesid.'0')){
					//select and update the ratings 1 of each question by 1
					try{
						if($this->db->query($update)){
							//get question 1 value from the database
							$check = $check + 1;
						}else{
							throw new Exception(parent::errr);
						}
					}catch(Exception $e){
						echo $e->getMessage();
					}
				}elseif($ratings[$i] == 5 && ($quesid.$check == $quesid.'0')){
					//select and update the ratings 1 of each question by 1
					try{
						if($this->db->query($update)){
							//get question 1 value from the database
							$check = $check + 1;
						}else{
							throw new Exception(parent::errr);
						}
					}catch(Exception $e){
						echo $e->getMessage();
					}
				}
			}				
		}catch (exception $e){
			echo $_POST['ratings0'];
		}
	}
	
}



?>