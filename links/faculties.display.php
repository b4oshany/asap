
<?php
include '../mysql/faculties.class.php';
include '../mysql/DataVis.class.php';

$facVis = new DataVisualization;
$humanities = new Faculty;
$humanities->setGraphHeading("['Date', 'Humanitites']");
//$select = "t1.id, t2.id, date_format(date(date), '%b %Y') as date, orate";
$select = "fac_id, fac_name, date_format(date(date), '%b %Y') as date, orate";
//$from = "faculties as t1 ";
$from = "faculties";
//$condition = "where fac_id='fh'";
$condition = "where (fac_id = 'fh' or fac_id = 'fms') and date < curdate() and date > date_sub(curdate(), interval 2 year) order by fac_id";
//$sqlResults = $humanities->SelectQuery($humanities->select, $humanities->from, "where fac_id='fh'"); 
$sqlResults = $humanities->SelectQuery($select, $from, $condition); 
$display = $humanities->setSqlOut($sqlResults);
$dArray = $humanities->ReturnArrayData($display);
echo '<br>';
print_r($dArray);
$humanities->setArrayDataOut($dArray);
//$array = $humanities->setArrayDataOut($dArray);
echo '<br>';

/*print_r($dArray);
$hdata = $humanities->SingleFacultyGraph();
echo $hdata;
$facVis->BarGraph('Humanities Performance', $hdata)*/
	?>
<div id="chart_div" style="width: 900px; height: 500px;"></div>
<?php

?>