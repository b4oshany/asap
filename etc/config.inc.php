<?php
require 'push.inc.php';
require 'file.php';
$template = 'default';
?>
<link type="text/css" rel="stylesheet" href="../templates/default/css/body.css">
<div id="config">
	<!-- Setting the basic information of website, such as the company name, slogan, departments and other category, this
	page describe the functionality and quering of databases as well as the database setup page -->
	<h1>Basic Site Configuration Page</h1>
	<p> This page is use for configurating the site information and data base </p>
	<form action="" method="post">
		<label for="company">Company Name: </label><input type="text" id="company" name="company"><br>
		<label for="slogan">Slogan: </label><input type="text" id="slogan" name="slogan"><br>
		<label for="template">Select your template: </label>
		<select name="template" id="template">
			<?php
				che_template();
			?>
		</select><br>
		<label for="department">Department Name: </label><input type="text" id="department" name="department"><br>
		
	
	</form>
	
</div>
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