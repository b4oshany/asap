<?php
<<<<<<< HEAD
	
$a = array('fh' => 2, 'fms'=> 1 );
print_r(array_count_values($a));
echo '<br>'.max(array_count_values($a));
=======
$aa = array(array('a',1,2,3), array('a',1,6,null), array('b',2,4,3), array('c',1,null,3));
$a = array(); 
$v = array();
$c = 0;
foreach($aa as $row){
	if($row[0] == $aa[$c][0]){
			echo '<br>true';
		}else{
			echo '<br>false';
		}
	foreach($row as $val){
		
		
	}
}
	
>>>>>>> moretest
?>