<?php
//Import the table class needed to do sql query
require_once 'table.class.php';
//Declare each table as a class, with their unique methods
//Each class will use the selectQuery, ReturnArrayData inorder to properly config the data to pass into the visualization class
//the quewry will taken from a select option, or form data from the data visualization page and pass to faculties.display file which will inherit this file
//the setArrayDataOut is used to pass 
//Afterwards the data visualization class will pull the array results
class Faculty extends Table{
	private $display, $heading,  $data;
	public $hArray, $hdata, $select, $from, $condition;
	public function __construct(){
		parent::__construct();
		$this->hArray = array();
		$this->data = "['Date', 'Humanities', 'Social Sciences', 'Science and Technology', 'Medical Science', 'Law']";
		$this->heading = '<th>Overall Ratings</th><th>Date</th>';
	}
	public function setSqlOut($sql){
		$this->display = $sql;
		return $this->display;
	}
	public function setArrayDataOut($array){
		$hcount = 0;
		$sscount = 0;
		$mscount = 0;
		$satcount = 0;
		$lcount = 0;
		$datecount = 0;
		$adate = array();
		$ft = array();
		$count = 0;		
		$true = 0;
		$msArrayDate = array();
		$fArray = array();
		$farray = array();
		$a = 0;
		$check = 0;
		foreach($array as $fac){
			$ft[$count] = $fac['date'];			
			$count++;
		}
		echo '<br> 33333 ---';
		print_r($ft);
		$keys = array_keys(array_count_values($ft));
		echo '<br><br> 4444----';
		print_r($keys);
		
		
		echo '<br>'.$keys[0].'<br>';
		echo count($keys);
		foreach($keys as $key){
			$fArray[$a][0] = $key;
			$a++;
		}
		
		echo '<br>';
		//print_r($farray);
		echo '<br> eeeee ---';
		print_r($fArray);
		echo '<br>';
		
		foreach($array as $row){			
			switch($row['fac_id']){
				
				
				case 'fh';
					if(in_array($row['date'], $keys)){
						$loc = array_search($row['date'], $keys);
						echo '<br> ---hhh >'.$loc;
						$farray[$loc][1] = $row['orate'];						
						$farray[$loc][0] = $keys[$loc];						
						echo '<br> 4 -- t';
						print_r($farray);
						echo '<br>';
					}	
					break;
				case 'fss':
					if(in_array($row['date'], $keys)){
						$loc = array_search($row['date'], $keys);
						echo '<br> ---hhh >'.$loc;
						$farray[$loc][2] = $row['orate'];						
						$farray[$loc][0] = $keys[$loc];						
						echo '<br> 4 -- t';
						print_r($farray);
						echo '<br>';
					}	
					break;
				case 'fsat':
					if(in_array($row['date'], $keys)){
						$loc = array_search($row['date'], $keys);
						echo '<br> ---hhh >'.$loc;
						$farray[$loc][3] = $row['orate'];						
						$farray[$loc][0] = $keys[$loc];						
						echo '<br> 4 -- t';
						print_r($farray);
						echo '<br>';
					}	
				
				case 'fms':
					if(in_array($row['date'], $keys)){
						$loc = array_search($row['date'], $keys);
						echo '<br> ---hhh >'.$loc;
						$farray[$loc][4] = $row['orate'];						
						$farray[$loc][0] = $keys[$loc];						
						echo '<br> 4 -- t';
						print_r($farray);
						echo '<br>';
					}					
					break;
				case 'fl':
					if(in_array($row['date'], $keys)){
						$loc = array_search($row['date'], $keys);
						echo '<br> ---hhh >'.$loc;
						$farray[$loc][5] = $row['orate'];						
						$farray[$loc][0] = $keys[$loc];						
						echo '<br> 4 -- t';
						print_r($farray);
						echo '<br>';
					}
					break;
			}
			//echo '<br>';
			//print_r($row);	
			//echo '<br>';
			//$datecount++;
		}
		$this->hArray = $farray;
		
		
		//$this->hArray = $array;
		//$this->hArray = $this->ReturnArrayData($array);
		/*
		echo '<br> --- <br>';
		print_r($this->hArray);
		echo '<br> ---';
		*/
		return $this->hArray;
	}	

	public function SingleFacultyGraph(){
		echo '<br> -+-'.$this->data;
		//$a = $thisties->ReturnArrayData($display)));	
		$this->hdata = $this->VisData($this->hArray, $this->data);
		//$this->VisData($hArray, $dat);
		//$hdata = $FacDisplay->VisData($hArray, $dat);
		//echo '<br>'.$this->hdata.'<br>';
		//return $this->FacDisplay->BarGraph($this->hdata);	
		return $this->hdata;
	}
	public function SingleFacultyTable(){
		$this->FacDisplay->AssociatedArrayIntoTable($this->hArray, $this->heading);	
	}


	private function VisData($array, $heading){
		//echo $heading;
		$visdataFront = $heading.',';
		$visdataMid = "";
		echo '<br>';
			print_r($array);
			echo '<br>';
		foreach($array as $item){
			$visdataMidDeep = "";
			$visdataMid .= '[';
			$count = 0;
			echo '<br>';
			print_r($item);
			echo '<br>';
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
			$visdataMidDeep .= '\''.$item[0].'\','.$item[1].','.$item[2].','.$item[3].','.$item[4].','.$item[5].',';
			echo '<br> +++'.$item[5].'<br>';
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
			$visdataMid .= trim($visdataMidDeep, ',').'],';	
			//echo 'r<br>'.$visdataMid.'<br>';
		}		
		$visdata = $visdataFront.trim($visdataMid, ',');
		print($visdata);
		return $visdata;
	}

}
class Department extends Faculty{

}
class Course extends Department{

}
class Lecturer extends Department{


}

?>