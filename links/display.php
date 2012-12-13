
<?php
include 'mysql/faculties.class.php';
include 'mysql/DataVis.class.php';
class DisplayGraph {
	function facGraph(){
		$facVis = new DataVisualization;
		$humanities = new Faculty;
		$humanities->select = "date_format(date(date), '%b %Y') as date, orate, fac_id";
		$humanities->from = "faculties";
		$humanities->condition = "";
		$sqlResults = $humanities->SelectQuery($humanities->select, $humanities->from, $humanities->condition); 
		$display = $humanities->setSqlOut($sqlResults);
		$array = $humanities->setArrayDataOut($humanities->ReturnArrayData($display));
		//echo '<br> ';
		//print_r($array);_
		//echo '<br>';
		$hdata = $humanities->SingleFacultyGraph();
		//echo '<br>'.$hdata.'<br>';
		$facVis->LineGraph($hdata);
	}
	function depGraph(){
		$DepVis = new DataVisualization;
		$humanities = new Faculty;
		$humanities->select = "date_format(date(date), '%b %Y') as date, orate, fac_id";
		$humanities->from = "faculties";
		$humanities->condition = "";
		$sqlResults = $humanities->SelectQuery($humanities->select, $humanities->from, $humanities->condition); 
		$display = $humanities->setSqlOut($sqlResults);
		$array = $humanities->setArrayDataOut($humanities->ReturnArrayData($display));
		//echo '<br> ';
		//print_r($array);
		//echo '<br>';
		$hdata = $humanities->SingleFacultyGraph();
		//echo '<br>'.$hdata.'<br>';
		$facVis->LineGraph($hdata);
	}
	function couGraph(){
		$DepVis = new DataVisualization;
		$humanities = new Faculty;
		$humanities->select = "date_format(date(date), '%b %Y') as date, orate, fac_id";
		$humanities->from = "faculties";
		$humanities->condition = "";
		$sqlResults = $humanities->SelectQuery($humanities->select, $humanities->from, $humanities->condition); 
		$display = $humanities->setSqlOut($sqlResults);
		$array = $humanities->setArrayDataOut($humanities->ReturnArrayData($display));
		//echo '<br> ';
		//print_r($array);
		//echo '<br>';
		$hdata = $humanities->SingleFacultyGraph();
		//echo '<br>'.$hdata.'<br>';
		$facVis->LineGraph($hdata);
	}
	function lecGraph(){
		$DepVis = new DataVisualization;
		$humanities = new Faculty;
		$humanities->select = "date_format(date(date), '%b %Y') as date, orate, fac_id";
		$humanities->from = "faculties";
		$humanities->condition = "";
		$sqlResults = $humanities->SelectQuery($humanities->select, $humanities->from, $humanities->condition); 
		$display = $humanities->setSqlOut($sqlResults);
		$array = $humanities->setArrayDataOut($humanities->ReturnArrayData($display));
		//echo '<br> ';
		//print_r($array);
		//echo '<br>';
		$hdata = $humanities->SingleFacultyGraph();
		//echo '<br>'.$hdata.'<br>';
		$facVis->LineGraph($hdata);
	}
	
}
?>
<?php

?>