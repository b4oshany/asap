<?php
require_once '../etc/connect.inc.php';
if($qresult = mysql_query("SELECT * FROM `ugrad_courses` WHERE lect_id = 620042528 AND ccode = 'COMP2240' AND ques_id = 'ques1_comp'")){
$results = mysql_fetch_array($qresult);
echo $results['rate_4'];
}else{
$create = mysql_query("INSERT INTO `ugrad_courses` (ques_id, lect_id, ccode, module, date, rate_1,rate_2,rate_3,rate_4,rate_5) VALUES ('ques1_comp', 62003102, 'COMP2250', 7, 2012, 5,0,0,0,0)");
$qresult = mysql_query("SELECT * FROM `ugrad_courses` WHERE lect_id = 62003101 AND ccode = 'COMP2250' AND ques_id = 'ques1_comp'");
$results = mysql_fetch_array($qresult);
echo $results['rate_1'];
echo 'false';
}

/*
$result = mysql_query("SELECT * FROM ugrad_courses");

while($row = mysql_fetch_array($result))
  {
  echo $row['rate_1'] . " " . $row['rate_2'];
  echo "<br />";
  }



//mysql_query(" UPDATE `ugrad_courses` SET rate_1 = 1 WHERE lect_id = 620042528 AND ccode = 'COMP224' AND ques_id = 'ques1_comp'");
//$a = 'c';
//$b = 0;
//if ($a.$b == ($a + 1)){echo 'true';}else{echo 'false';}
/*
for($i = 0; $i < 8; $i++){
			//set the ratings input name
			$ratings .= "ratings".$i."-";
			?>
<form action="" method="post">
<input name="

</form>

<?php
}
			echo $ratings;
		*/	
?>