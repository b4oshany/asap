<link type="text/css" rel="stylesheet" href="css/decogrids-12.css">

<?php
//this is the setup page of asap, it will create the database and tables based on the given information at startup 
//or 	first use

?>
<div class="row">
	<div class ="cell width-4 position-0" id="sidebar">
	<ul>
		<li><button >Set up profile</button></li>
		<li><button onclick="ulclick('sdatabase')">Set up database</button></li>
		<li><button onclick="ulclick('stables')">Set up tables</button></li>
		<li><button onclick="ulclick('slinktab')">Link tables</button></li>
		<li><button onclick="ulclick('iprofile')">Install profile</button></li>
		<li><button onclick="ulclick('configure')">Configure site</button></li>
		<li><button onclick="ulclick('finish')">Finished</button></li>
	<ul>
	</div>
	<div class="cell position-4 width-8" id="contain">
		<?php require 'links/setup.php'; ?>
	</div>
</div>

<!--
<ul>
  <li onClick="this.style.display = 'none'">First Test</li>
</ul>

-->
