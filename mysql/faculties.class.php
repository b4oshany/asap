<?php
require_once 'table.class.php';
class Faculty extends Table{
	private $display, $heading,  $data;
	public $hArray, $hdata, $select, $from, $condition;
	public function __construct(){
		parent::__construct();
		$this->hArray = array();
		$this->data = "['Date', 'Performance Ratings']";
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
		
		foreach($array as $fac){
			$ft[$count] = $fac['date'];			
			$count++;
		}
		//print_r($ft);
		$keys = array_keys(array_count_values($ft));
		//print_r($keys);
		
		foreach($array as $row){
			switch($row['fac_id']){
				case 'fh';
					foreach($keys as $date){	
						if($date == $row['date']){
							$farray[$hcount][0] = $date;
							$farray[$hcount][1] = $row['orate'];
							$hcount++;
						}
					}
					break;
				case 'fss':
					foreach($keys as $date){	
						if($date == $row['date']){
							$farray[$sscount][0] = $date;
							$farray[$sscount][2] = $row['orate'];
							$sscount++;
						}
					}
					break;
				case 'fsat':
					foreach($keys as $date){	
						if($date == $row['date']){
							$farray[$satcount][0] = $date;
							$farray[$satcount][3] = $row['orate'];
							$satcount++;
						}
					}
				case 'fms':
					foreach($keys as $date){	
						if($date == $row['date']){
							$farray[$mscount][0] = $date;
							$farray[$mscount][4] = $row['orate'];
							$mscount++;
						}
					}
					break;
				case 'fl':
					foreach($keys as $date){	
						if($date == $row['date']){
							$farray[$lcount][0] = $date;
							$farray[$lcount][5] = $row['orate'];
							$lcount++;
						}
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
		//print_r($this->hArray);
		
		
		return $this->hArray;
	}	

	public function SingleFacultyGraph(){
		echo '<br>';
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
		foreach($array as $item){
			$visdataMidDeep = "";
			$visdataMid .= '[';
			$count = 0;
			foreach($item as $value)
			{
				if($count == 0){
					$visdataMidDeep .= '\''.$value.'\','; 
					//echo $visdataMidDeep.'<br>';
					$count += 1;
				}else{
					$visdataMidDeep .= ''.$value.','; 					
				}
			}
			$visdataMid .= trim($visdataMidDeep, ',').'],';	
			//echo 'r<br>'.$visdataMid.'<br>';
		}		
		$visdata = $visdataFront.trim($visdataMid, ',');
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