<?php
	
$a = array('fh' => 2, 'fms'=> 1 );
print_r(array_count_values($a));
echo '<br>'.max(array_count_values($a));
?>