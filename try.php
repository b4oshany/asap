<?php
	
$a = array(array('a',2,3), array('b',2,3), array('c',4,3), array('c',4,3));
$b = array();
foreach($a as $r){
	echo '<br>';
	//foreach($b as $c){
		if($r[0] != $b[0]){
			print_r(array_push($b, $r[0]));
			//echo 'l';
		}else{
		//echo 'k';
		}
		//echo 'o';
	//}
	//print_r($r);
	echo '<br>';
}
?>