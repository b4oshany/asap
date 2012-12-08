<?php
function che_template(){
	$dir = '../templates';
	if($handler = opendir($dir.'/')){
		$filer = '';
		while($file = readdir($handler)){
			if($file != '.' && $file != '..'){
				echo '<option value="'.$file.'">'.$file.'</option>';				
			}
			
		}
		
	}
}
//test function
//che_template();

?>