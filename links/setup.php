<link type="text/css" rel="stylesheet" href="../css/decogrids-12.css">
<link type="text/css" rel="stylesheet" href="../css/setup.css">
<script type="text/javascript" src="../js/main.js"></script>
<form id="sinfo"> 
	<div class	="row">
		<div class="cell position-0 width-5">Site Name</div>
		<div class="cell position-5 width-7"><input type="text" name="sname"></div>
	</div>
	<div class="row"><br>
		<div class="cell position-0 width-5">Company Name</div>
		<div class="cell position-5 width-6"><input type="text" name="cname"></div>
	</div>
	<div class="row"><br>
		<div class="cell position-0 width-5">Slogan</div>
		<div class="cell position-5 width-6"><input type="text" name="slogan"></div>
	</div>
	<div class="row"><br>
		<div class="cell position-0 width-5">logo</div>
		<div class="cell position-5 width-7"><input type="file" name="logo"></div>
	</div>
	<div class="row"><br>
		<div class="cell position-5 width-7"><input onclick="ulclick('sprofile')" type="button" value="Save and Continue"></div>
	</div>
</form>
<form id="datainfo">
	<div class="row">
		<div class="cell position-0 width-5">Database Name</div>
		<div class="cell position-5 width-7"><input type="text" name="dname"></div>
	</div>
	<div class="row"><br>
		<div class="cell position-0 width-5">Database Username</div>
		<div class="cell position-5 width-6"><input type="text" name="duname"></div>
	</div>
	<div class="row"><br>
		<div class="cell position-0 width-5">Database Passowrd</div>
		<div class="cell position-5 width-6"><input type="text" name="dupass"></div>
	</div>
	<div class="row"><br>
		<div class="cell position-5 width-7"><input onclick="ulclick('sdatabase')" type="button" value="Save and Continue"></div>
	</div>
</form>
<form id="tabsetup">
	<div class	="row">
		<div class="cell position-0 width-5">Number of Table</div>
		<div class="cell position-5 width-7"><input type="number" name="noTab"></div>
	</div>
	<div class="row"><br>
		<div class="cell position-5 width-7"><input onclick="ulclick('stables')" type="button" value="Add"></div>
	</div>
</form>

<!--
<form>
	Databse Name <input type="text" name="sname"><br>	
	Database User <input type="text" name="cname"><br>
	Database Password <input type="text" name="slogan"><br>
	<input type="submit" value="Save and Continue">	
</form>

<form>
	Number of table <input type="number" name="tab_qty" min="1"><br>
	Number of Columns <input type="number" name="col_qty" min="1"><br>
	<input type="submit" value="Save and Continue">	
</form>

-->
<script type="text/javascript">	
	function updatePage(){
	
	
	}
</script>

<?php

//this is an array containing the site information
//$siteinfo = array($sname, $cname, $slogan, $logo);

//this is an array containing the site database setup	
//$db_setup = array($db_name, $db_user, $db_pass, $db_host, $db_port);

?>