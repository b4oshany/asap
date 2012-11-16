<?php
require 'push.inc.php';
require 'file.php';
$template = 'default';
?>

<?php



//Enter the slogon of the company
$slogan = 'Improving Quality Performance and Provision';

if(isset($_POST['department']) && isset($_POST['template']) && isset($_POST['company']) && isset($_POST['slogan']) ){
	$dep_name = $_POST['department'];
	
	//use the selected template
	$template = $_POST['template'];
	
	//used the given company name
	$company = 'Student Assessment Procedures';
	
	create_idep_table($dep_name);
}else{
	echo 'not ok';
}

?>

</div> 