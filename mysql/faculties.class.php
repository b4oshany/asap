<?php
//Import the table class needed to do sql query
require_once 'table.class.php';
//Declare each table as a class, with their unique methods
//Each class will use the selectQuery, ReturnArrayData inorder to properly config the data to pass into the visualization class
//the quewry will taken from a select option, or form data from the data visualization page and pass to faculties.display file which will inherit this file
//Afterwards the data visualization class will pull the array results and generate the graph
class Faculty extends Table{
	//setting the variables to be used;
	private $display, //
			$data;	// String of data category in graphs
	public $hArray,  //data series array
			$hdata,  //Strings, and intergers to be use to generate grahs
			$select, //Selection to be made in the query
			$from,  //From what table to be selected
			$condition; //The condition to be supplied to the query
	public function __construct(){
		//As soon as the class been instantiated the construct class on the parent class that is used to connect to the database and run queries
		//The Table headings are initiated automatically, but can be changed by calling using setCate function to set the graph categories
		
		parent::__construct(); //Call the parent construct with its methods and varibales;
		$this->hArray = array(); //Setting the array
		$this->data = "['Date', 'Humanities', 'Social Sciences', 'Science and Technology', 'Medical Science', 'Law']";
	}
	//setting the display variable to used to return the array results
	public function setSqlOut($sql){
		$this->display = $sql;
		return $this->display;
	}
	//setting the data variable as the graph categories
	public function setCate($head){
		$this->data = $head;
		return $this->data;
	}
	//Setting up the array out put to that accept an array and set it in an data series format for the data visulation class to use
	public function setArrayDataOut($array){
		//setting variables to store and check the value of an multidemionsional array or an simple array
		$ft = array(); //Contains the each sub array of the given array
		$count = 0;	 //counter for ft array index
		$farray = array(); //Faculty array
		foreach($array as $fac){
			$ft[$count] = $fac['date']; //setting  each date value into an array	
			$count++;
		}
		//print_r($ft);
		$keys = array_keys(array_count_values($ft)); //extract the unique dates of each array of ft
		//echo '<br><br> 4444----';
		//print_r($keys);
		
		
		//echo '<br>'.$keys[0].'<br>';
		
		//Extract the data from each sub array and check the faculty id to determine where and how the data to be inserted into another array
		foreach($array as $row){			
			switch($row['fac_id']){		
				//if the array equals faculty id then check if the date exist with the data key and extract the index from the data key and then inject
				//the value into on array base on the index with the array that is given by the data key index
				case 'fh';					
					if(in_array($row['date'], $keys)){
						$loc = array_search($row['date'], $keys);
						//echo '<br> ---hhh >'.$loc;
						$farray[$loc][1] = $row['orate']; //Set the overall ratings value of faculty of humanities in its respectfully index						
						$farray[$loc][0] = $keys[$loc];	 //Set the date of the faculty of humanities in its repectfully index					
						//echo '<br> 4 -- t';
						//print_r($farray);
						//echo '<br>';
					}	
					break;
				case 'fss':
					if(in_array($row['date'], $keys)){
						$loc = array_search($row['date'], $keys); //Collect the index for the date value with the keys array
						//echo '<br> ---hhh >'.$loc;
						$farray[$loc][2] = $row['orate'];	//Set the overall ratings value of faculty of Social Sciences in its respectfully index					
						$farray[$loc][0] = $keys[$loc];	 //Set the date of faculty of Social Sciences in its respectfully index			
						//echo '<br> 4 -- t';
						///print_r($farray);
						//echo '<br>';
					}	
					break;
				case 'fsat':
					if(in_array($row['date'], $keys)){
						$loc = array_search($row['date'], $keys); //Collect the index for the date value with the keys array
						//echo '<br> ---hhh >'.$loc;
						$farray[$loc][3] = $row['orate'];	//Set the date of faculty of Science and Technology in its respectfully index						
						$farray[$loc][0] = $keys[$loc];		//Set the date of faculty of Sience and Technology in its respectfully index					
						//echo '<br> 4 -- t';
						//print_r($farray);
						//echo '<br>';
					}	
				
				case 'fms':
					if(in_array($row['date'], $keys)){
						$loc = array_search($row['date'], $keys); //Collect the index for the date value with the keys array
						//echo '<br> ---hhh >'.$loc;
						$farray[$loc][4] = $row['orate'];		//Set the date of faculty of Medical Sciences in its respectfully index				
						$farray[$loc][0] = $keys[$loc];			//Set the date of faculty of Medical Sciences in its respectfully index		
						//echo '<br> 4 -- t';
						//print_r($farray);
						//echo '<br>';
					}					
					break;
				case 'fl':
					if(in_array($row['date'], $keys)){
						$loc = array_search($row['date'], $keys); //Collect the index for the date value with the keys array
						//echo '<br> ---hhh >'.$loc;
						$farray[$loc][5] = $row['orate'];		//Set the date of faculty of Law in its respectfully index			
						$farray[$loc][0] = $keys[$loc];			//Set the date of faculty of Law in its respectfully index		
						//echo '<br> 4 -- t';
						//print_r($farray);
						//echo '<br>';
					}
					break;
			}
			//echo '<br>';
			//print_r($row);	
			//echo '<br>';
			//$datecount++;
		}
		$this->hArray = $farray;  //setting the faculty array to an array
		
		
		//$this->hArray = $array;
		//$this->hArray = $this->ReturnArrayData($array);
		/*
		echo '<br> --- <br>';
		print_r($this->hArray);
		echo '<br> ---';
		*/
		return $this->hArray; //return the faculty array
	}	

	public function SingleFacultyGraph(){
		//echo '<br> -+-'.$this->data;
		//$a = $thisties->ReturnArrayData($display)));	
		$this->hdata = $this->VisData($this->hArray, $this->data); //Set the format of the array into a string to generate the graphs
		//$this->VisData($hArray, $dat);
		//$hdata = $FacDisplay->VisData($hArray, $dat);
		//echo '<br>'.$this->hdata.'<br>';
		//return $this->FacDisplay->BarGraph($this->hdata);	
		return $this->hdata; //return the string to be used in the graph functions
	}
	public function SingleFacultyTable(){
		$this->FacDisplay->AssociatedArrayIntoTable($this->hArray, $this->heading);	
	}

	//Function below is used to generate the format which the graphs function uses, that is $head = ['category_name1', 'category_name2',...], $data = ['label',value,value,value,...]
	// $head,$data,$data,..  
	//only once the head, where head is the category name,
	//afterwards multiple data can be used, with the first value being the date label
	private function VisData($array, $heading){
		//echo $heading;
		$visdataFront = $heading.','; //concate the category label first
		$visdataMid = "";	//initiate the data series array
		//echo '<br>';
			//print_r($array);
			//echo '<br>';
		foreach($array as $item){
			$visdataMidDeep = "";  //initiate the data value
			$visdataMid .= '['; //auto concate the data series separator
			//echo '<br>';
			//print_r($item);
			//echo '<br>';
				//passing the array value to an variable which will check the nullness of the array index and then set the array index to null 
				//if its true
				foreach($item as $value){ 
					if(empty($item[0])){
						$item[0] = '';
					}
					if(empty($item[1])){
						$item[1] = 0;
					}
					if(empty($item[2])){
						$item[2] = 0;
					}
					if(empty($item[3])){
						$item[3] = 0;
					}
					if(empty($item[4])){
						$item[4] = 0;
					}
					if(empty($item[5])){
						$item[5] = 0;
					}				
				}
			//concate the data values together
			$visdataMidDeep .= '\''.$item[0].'\','.$item[1].','.$item[2].','.$item[3].','.$item[4].','.$item[5].',';
			//echo '<br> +++'.$item[5].'<br>';
			/*foreach($item as $value)
			{
				if($count == 0){
					$visdataMidDeep .= '\''.$value.'\','; 
					//echo $visdataMidDeep.'<br>';
					$count += 1;
				}else{
					$visdataMidDeep .= ''.$value.','; 					
				}
			}*/
			//ensure no invalid commas is seperating the data values and then close the data series and concate ther data series
			$visdataMid .= trim($visdataMidDeep, ',').'],';	
			//echo 'r<br>'.$visdataMid.'<br>';
		}
		//concate ther data series with the category while ensure no invalid commas is seperating the data series
		$visdata = $visdataFront.trim($visdataMid, ','); 
		///print($visdata);
		return $visdata; //return the graph data
	}	
	
	protected function calcRatings($select, $id1,$id2){
		$sRates = $select;
		 //collecting the course id and faculty id for database injection
		$aRates = $this->ReturnArrayData($sRates); //collect the course id, faculty id and ratings of each question
		//$sQids = $this->SelectQuery('ccode, fac_id','ugrad_courses',''); //collecting the course id and faculty id for database injection
		$rqtrate = array(); //ratings for each question type
		$rqrate = array(); //ratings for each question
		$qkeys = array_keys($aRates[0]); // collect all of the rating keys
		//print_r($aRates);
		$orate = array();
		$acount = 0;
		$keys = array();
		$count = 0; //counter set for number of coulns
		$counter = 0; //counter set for the number of questions
		//Get the keys and store it in an array
		foreach($qkeys as $key){
			if(substr($key, 0, 5) == 'rate_'){
				$keys[$count] = $key;
				$count++;
			}
		}
		//Get the dates and store it in an array
		$cdate = 0; //count the number of dates;
		$dates = array();
		foreach($aRates as $date){
			$dates[$cdate] = $date['date'];
			$cdate++;
		}
		//remove all duplicate dates
		$dates = array_unique($dates);
		//print_r($dates);
		$qsum = array(); //set to check the number of questions
		foreach($aRates as $rate){
			foreach($dates as $date){
				if(($rate['date'] == $date) && !empty($qsum[$rate['date']]) ){					
					$qsum[$rate['date']] +=  1;
				}elseif(($rate['date'] == $date) && empty($qsum[$rate['date']]) ){					
					$qsum[$rate['date']] = 0;
					$qsum[$rate['date']] +=  1;
				}
			}
					//echo '<br> ---- date ---  <br>';
					//echo $date;
					//print_r($rate);
					//print_r($keys);
					//echo '<br> ---- date ---  <br>';
					$prate = 0; //percentage value of ratings
					$aVal = array(); //array value for ratings that is greater than 0
					for($i=1; $i <= 5; $i++){
						$aVal[$i] = $rate[('rate_'.$i)]; //collecting ratings that are greater than 0
						//$aVal = array_push($aVal));			
					}
					//this is used to filter an array based on a class function
					$tRate = array_filter($aVal, array(&$this, "filterValue"));
					//$count = count($tRate);
					$asum = array_sum($tRate); //total sum of sample
					$qrate = array(); //ratings for each question
					//echo '<br> ---- rooovalue ---  <br>';
					//print_r($tRate);
					//echo '<br> ---- rsssvalue ---  <br>';
					
					//echo '<br> ----  sum  ---  <br>';
					//print_r($asum);
					//echo '<br> ---- sum---  <br>';
				
					for($a=1; $a <= 5; $a++){			
						switch($keys[($a-1)]){
							case 'rate_1':
								$prate = 2; //rating 1 is rated 10
								$qrate[($a-1)] = ($rate['rate_1']/$asum)*$prate; //set rate 1 percentage out of 10 

								break;
							case 'rate_2':
								$prate = 4; //rating 1 is rated 10
								$qrate[($a-1)] = ($rate['rate_2']/$asum)*$prate; //set rate 1 percentage out of 10 

								break;
							case 'rate_3':
								$prate = 6; //rating 1 is rated 10
								$qrate[($a-1)] = ($rate['rate_3']/$asum)*$prate; //set rate 1 percentage out of 10 

								break;
							case 'rate_4':
								$prate = 8; //rating 1 is rated 10
								$qrate[($a-1)] = ($rate['rate_4']/$asum)*$prate; //set rate 1 percentage out of 10 

								break;
							case 'rate_5':
								$prate = 10; //rating 1 is rated 10
								$qrate[($a-1)] = ($rate['rate_5']/$asum)*$prate; //set rate 1 percentage out of 10 

								break;
						}
						//echo '<br> ---- question ratings ---  <br>';
						//echo print_r($qrate);
						//echo '<br> ---- question ratings ---  <br>';
					}
					
					$rqrate[$counter] = array(
							'ccode' => $rate['ccode'], //set course code
							''.$id1.'' => $rate[''.$id1.''], //set an id to be collected
							''.$id2.'' => $rate[''.$id2.''], //setan id to be collected
							'date' => $rate['date'], //set date
							'orate' => array_sum($qrate) //set the ratings
						);
					$counter++; 
						
					//echo '<br> ---- question sum ---  <br>';
					//print_r($rqrate);
					//echo '<br> ---- question sum ---  <br>';
					
					//echo '<br> ----  sum  ---  <br>';
					//print_r($asum);
					//echo '<br> ---- sum---  <br>';
				//}
		//	}	
		}
		//echo '<br> ---- question sum ---  <br>';
		//print_r($rqrate);
		//echo '<br> ---- question sum ---  <br>';
		
		foreach($rqrate as $row){
			foreach($dates as $date){
				if(($date == $row['date']) && !empty($orate[$row['date']]) ){
					$orate[$row['date']] += $row['orate']; 
				}elseif(($date == $row['date']) && empty($orate[$row['date']]) ){
					$orate[$row['date']] = 0;
					$orate[$row['date']] += $row['orate']; 
				}
			}
		}
		//echo '<br> ---- question sum ---  <br>';
		//print_r($orate);
		//echo '<br> ---- question sum ---  <br>';
		
		
		foreach($rqrate as $row){
		if(in_array($row['date'], $dates)){
			//echo '<br> ---- question sum ---  <br>';
			//echo $row['date'];
			//echo '<br> ---- question sum ---  <br>';
			$loc = array_search($row['date'], $dates); //check the position within the an array where it is equal to
			//echo '<br> ---- loc ---  <br>';
			//echo $loc;
			//echo '<br> ---- date ---  <br>';
			//echo $orate[$dates[$loc]];
			//echo '<br> ---- num ---  <br>';
			//print_r($qsum);
			$rqtrate[$loc]['orate'] = round(($orate[$dates[$loc]]/($qsum[$dates[$loc]] * 10))*5); //Set the overall ratings value of faculty of Social Sciences in its respectfully index					
			$rqtrate[$loc]['ccode'] = $row['ccode'];	//Set the overall ratings value of faculty of Social Sciences in its respectfully index					
			$rqtrate[$loc][''.$id1.''] = $row[''.$id1.''];	//Set the overall ratings value of faculty of Social Sciences in its respectfully index					
			$rqtrate[$loc][''.$id2.''] = $row[''.$id2.''];	//Set the overall ratings value of faculty of Social Sciences in its respectfully index					
			$rqtrate[$loc]['date'] = $dates[$loc];	 //Set the date of faculty of Social Sciences in its respectfully index						
			}
		}
		
		$counter++;
		echo '<br> ---- date ---  <br>';
		print_r($rqtrate[0]['date']);
		//echo '<br> ---- question type sum ---  <br>';
		return $rqtrate;
	}
	
	private function filterValue($aVal){
		if ($aVal !="0")
		  {
		  return true;
		  }	
	}
}
class Department extends Faculty{

}
class Lecturer extends Department{
	public function __construct(){
		parent::__construct(); //Call the parent construct with its methods and varibales;
		echo '<br> ---- course ---  <br>';
		$courseSelect = $this->SelectQuery(
			't1.ques_id, t1.ccode, t2.lec_id, t2.fac_id, t1.date, t1.rate_1, t1.rate_2, t1.rate_3, t1.rate_4, t1.rate_5',
			'ugrad_results as t1 join ugrad_courses as t2 on',
			't1.ccode = t2.ccode WHERE ques_id LIKE \'lec%\'');
		$rResults = $this->calcRatings($courseSelect, 'lec_id', 'fac_id'); //As sson as the class is initiated the course will be rated
		echo '<br> ---- course ---  <br>';
		foreach($rResults as $row){
			if($this->NumRowExists($row['fac_id'].'_lecturer', 'where ccode = \''.$row['lec_id'].'\' and \''.$row['ccode'].'\' and date = \''.$row['date'].'\'') > 0){
				$this->updateData($row);
			}else{
				$this->insertData($row);
			}
		}
	}
	
	private function insertData($row){
		echo '<br>---- array ---<br>';
		//print_r($array);
		//foreach($array as $row){
			echo '<br>---- fac id ---<br>';
			echo $row['fac_id'];
			//switch($row['fac_id']){				
				//case 'fsat':
					try{
						$sql = 'insert into '.$row['fac_id'].'_lecturer(ccode, lec_id, orate, date) 
							values(\''.$row['ccode'].'\', \''.$row['lec_id'].'\', '.$row['orate'].', \''.$row['date'].'\' )'; 
							echo $sql;
						if(!$this->db->query($sql)){
							throw new Exception('');
						}
					}catch(Exception $e){
						echo $e->getMessage();
					}
			//}
		//}
	}
	
	private function updateData($row){
		//echo '<br>---- array ---<br>';
		//print_r($array);
		//foreach($array as $row){
			//echo '<br>---- fac id ---<br>';
			//echo $row['fac_id'];
			//switch($row['fac_id']){				
				//case 'fsat':
					try{
						$sql = 'update into '.$row['fac_id'].'_ugrad_courses set orate = '.$row['orate'].' where ccode = \''.$row['lec_id'].'\' and ccode = \''.$row['date'].'\' and date = \''.$row['date'].'\' )'; 
							echo $sql;
						if(!$this->db->query($sql)){
							throw new Exception('');
						}
					}catch(Exception $e){
						echo $e->getMessage();
					}
			//}
		//}
	}
	
	
	
}
class Course extends Department{
	public function __construct(){
		parent::__construct(); //Call the parent construct with its methods and varibales;
		echo '<br> ---- course ---  <br>';
		$courseSelect = $this->SelectQuery(
			't1.ques_id, t1.ccode, t2.depid, t2.fac_id, t1.date, t1.rate_1, t1.rate_2, t1.rate_3, t1.rate_4, t1.rate_5',
			'ugrad_results as t1 join ugrad_courses as t2 on',
			't1.ccode = t2.ccode WHERE ques_id LIKE \'cou%\'');
		$rResults = $this->calcRatings($courseSelect, 'depid', 'fac_id'); //As sson as the class is initiated the course will be rated
		echo '<br> ---- course ---  <br>';
		foreach($rResults as $row){
			if($this->NumRowExists($row['fac_id'].'_ugrad_courses', 'where ccode = \''.$row['ccode'].'\' and date = \''.$row['date'].'\'') > 0){
				$this->updateData($row);
			}else{
				$this->insertData($row);
			}
		}
	}
	
	private function insertData($row){
		echo '<br>---- array ---<br>';
		//print_r($array);
		//foreach($array as $row){
			echo '<br>---- fac id ---<br>';
			echo $row['fac_id'];
			//switch($row['fac_id']){				
				//case 'fsat':
					try{
						$sql = 'insert into '.$row['fac_id'].'_ugrad_courses(ccode, depid, orate, date) 
							values(\''.$row['ccode'].'\', \''.$row['depid'].'\', '.$row['orate'].', \''.$row['date'].'\' )'; 
							echo $sql;
						if(!$this->db->query($sql)){
							throw new Exception('');
						}
					}catch(Exception $e){
						echo $e->getMessage();
					}
			//}
		//}
	}
	
	private function updateData($row){
		//echo '<br>---- array ---<br>';
		//print_r($array);
		//foreach($array as $row){
			//echo '<br>---- fac id ---<br>';
			//echo $row['fac_id'];
			//switch($row['fac_id']){				
				//case 'fsat':
					try{
						$sql = 'update into '.$row['fac_id'].'_ugrad_courses set orate = '.$row['orate'].' where ccode = \''.$row['date'].'\' and date = \''.$row['date'].'\' )'; 
							echo $sql;
						if(!$this->db->query($sql)){
							throw new Exception('');
						}
					}catch(Exception $e){
						echo $e->getMessage();
					}
			//}
		//}
	}
	

}

?>