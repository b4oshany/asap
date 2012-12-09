
<?php
include '../mysql/faculties.class.php';
include '../mysql/DataVis.class.php';

$facVis = new DataVisualization;
$humanities = new Faculty;
$humanities->select = "date_format(date(date), '%b %Y') as date, orate, fac_id";
$humanities->from = "faculties";
$humanities->condition = "";
$sqlResults = $humanities->SelectQuery($humanities->select, $humanities->from, $humanities->condition); 
$display = $humanities->setSqlOut($sqlResults);
$array = $humanities->setArrayDataOut($humanities->ReturnArrayData($display));
echo '<br> ';
print_r($array);
echo '<br>';
$hdata = $humanities->SingleFacultyGraph();
echo '<br>'.$hdata.'<br>';

/*
$socialscience = new Faculty;
$socialscience->select = "date_format(date(date), '%b %Y') as date, orate";
$socialscience->from = "faculties";
$socialscience->condition = "where fac_id='fss'";
$sqlResults = $socialscience->SelectQuery($socialscience->select, $socialscience->from, $socialscience->condition); 
$display = $socialscience->setSqlOut($sqlResults);
$array = $socialscience->setArrayDataOut($socialscience->ReturnArrayData($display));
echo '<br>';
print_r($array);
$hdata = $socialscience->SingleFacultyGraph();
echo '<br>'.$hdata.'<br>';


$scitech = new Faculty;
$scitech->select = "date_format(date(date), '%b %Y') as date, orate";
$scitech->from = "faculties";
$scitech->condition = "where fac_id='fsat'";
$sqlResults = $scitech->SelectQuery($scitech->select, $scitech->from, $scitech->condition); 
$display = $scitech->setSqlOut($sqlResults);
$array = $scitech->setArrayDataOut($scitech->ReturnArrayData($display));
echo '<br>';
print_r($array);
$hdata = $scitech->SingleFacultyGraph();
echo '<br>'.$hdata.'<br>';


$law = new Faculty;
$law->select = "date_format(date(date), '%b %Y') as date, orate";
$law->from = "faculties";
$law->condition = "where fac_id='fl'";
$sqlResults = $law->SelectQuery($law->select, $law->from, $law->condition); 
$display = $law->setSqlOut($sqlResults);
$array = $law->setArrayDataOut($law->ReturnArrayData($display));
echo '<br>';
print_r($array);
$hdata = $law->SingleFacultyGraph();
echo '<br>'.$hdata.'<br>';


$medsci = new Faculty;
$medsci->select = "date_format(date(date), '%b %Y') as date, orate";
$medsci->from = "faculties";
$medsci->condition = "where fac_id='fms'";
$sqlResults = $medsci->SelectQuery($medsci->select, $medsci->from, $medsci->condition); 
$display = $medsci->setSqlOut($sqlResults);
$array = $medsci->setArrayDataOut($medsci->ReturnArrayData($display));
echo '<br>';
print_r($array);
$hdata = $medsci->SingleFacultyGraph();
echo '<br>'.$hdata.'<br>';
*/


$facVis->BarGraph($hdata)
	?>
<div id="chart_div" style="width: 900px; height: 500px;"></div>
<?php

?>