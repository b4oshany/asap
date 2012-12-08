<?php
require_once 'table.class.php';
class Faculty extends Table{
	private $display, $heading,  $data;
	public $hArray, $hdata;
	public $select =  "date_format(date(date), '%b %Y') as date, orate";
	public $from = "faculties";
	public $condition = "where fac_id='fh'";
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
		$this->hArray = $array;
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