
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
//echo '<br> ';
//print_r($array);
//echo '<br>';
$hdata = $humanities->SingleFacultyGraph();
echo '<br>'.$hdata.'<br>';
$facVis->LineGraph($hdata)
	?>
<div id="chart_div" style="width: 900px; height: 500px;"></div>
<?php

?>