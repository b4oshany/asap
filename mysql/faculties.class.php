<?php
require_once 'table.class.php';
class Faculty extends Table{
	private $display, $heading,  $data;
	public $hArray, $hdata;
	public function __construct(){
		parent::__construct();
		$this->hArray = array();
		$this->heading = '<th>Overall Ratings</th><th>Date</th>';
	}
	public function setGraphHeading($heading){
		$this->data = $heading;
		return $this->data;
	}
	public function setSqlOut($sql){
		$this->display = $sql;
		return $this->display;
	}
	/*
	public function setArrayDataOut($array){
		///fhArray, $flArray, $fmsArray, $fssArray, $fsatArray = array();
		$ft = array();
		$count = 0;
		foreach($array as $fac){
			$ft[$count] = $fac['fac_id'];
			$count++;
		}
		//echo $array[0]['fac_name'];
		//echo substr($array[0]['fac_name'], stripos($array[0]['fac_name'], 'of ') + 3) ;
		//check the key with the max occurency
		$keys = array_keys(array_count_values($ft));
		$keyArray = array_values(array_count_values($ft));
		//print_r(array_values($keyArray));
		list($key1, $key2) = $keyArray;
		echo '<br>';
		//echo $this->checkFac($keys[1]);
		//print_r($keys);
		$maxKey = count(array_count_values($ft));
		//echo $maxKey;
		//check the number of keys in the array
		$sumKey = count($ft);
		//check the value with the max occurency
		$maxVal = max(array_count_values($ft));
		//set the array to be used as a row in the data visulization class
		$fArray = array();
		for($i=0; $i<$maxVal; $i++){			
			switch($maxKey){
				case 1:	
					$fArray[0] = array('Date', ''.$this->checkFac($keys[0]).''); 
					$fArray[($i +1)] = array($array[$i]['date']. $array[$i]['orate']);
					return $fArray;
					break;
				case 2:	
					$count = 0;
					 foreach($array as $row){
						if($row['fac_id']
					 
					 }
					//$fArray[0] = array('Date', ''.$this->checkFac($keys[0]).'', ''.$this->checkFac($keys[1]).''); 
					//print_r($fArray[0]);
					//$fArray[($i +1)] = array($array[$i]['date']. $array[$i]['orate']);
					//$fArray[($i +1)] = array(''.$array[$i]['date'].'', $this->returnArray2Fac($keys[0], $array[$i]), $this->returnArray2Fac($keys[1], $array[$i]));
					//echo $array[$a]['fac_id'].'<br>';
					//return $fArray;
					//echo $fArray;
					break;
			}
		}
		//echo $fArray;
		print_r($fArray);
		/*$count = 0;
			for($i=0; $i < count($array); $i++){
				switch(($array{$i}['fac_id'])){
					case 'fh':
					
						break;
					case 'fl':
						break;
					case 'fss':
						break;
					case 'fms':
						break;
					case 'fsat':
						break;
				}
			}
		//$this->hArray = $array;
		//$this->hArray = $this->ReturnArrayData($array);
		//print_r($this->hArray);
		//return $this->hArray;
	}
	
	private function checkFac($fac_id){
		switch($fac_id){
			case 'fh':
				return 'Humanities';
				break;
			case 'fl':
				return 'Law';
				break;
			case 'fss':
				return 'Social Sciences';
				break;
			case 'fms':
				return 'Medical Sciences';
				break;
			case 'fsat':
				return 'Science and Technology';
				break;
			default:
				return '';		
		}		
	}
	
	private function returnArray2Fac($fac_id, $array){
		switch($array['fac_id']){
			case 'fh':
				if($fac_id == $array['fac_id']){
					return $array['orate'];
				}else{
					return null;
				}
				break;
			case 'fl':
				if($fac_id == $array['fac_id']){
					return $array['orate'];
				}else{
					return null;
				}
				break;
			case 'fss':
				if($fac_id == $array['fac_id']){
					return $array['orate'];
				}else{
					return null;
				}
				break;
			case 'fms':
				if($fac_id == $array['fac_id']){
					return $array['orate'];
				}else{
					return null;
				}
				break;
			case 'fsat':
				if($fac_id == $array['fac_id']){
					return $array['orate'];
				}else{
					return null;
				}
				break;			
			default:
				return null;		
		}		
	}
	*/
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
					$count = 0;
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