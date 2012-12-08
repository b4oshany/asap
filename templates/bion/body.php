<?php include 'templates/bion/home.php'; ?>
<link type="text/css" rel="stylesheet" href="css/deco.css">
<div id="body">
	<div class="row">
		<div class="cell position-13 width-3 time">
			<h3><?php echo date("l, M j Y"); ?></h3>
		</div>
	</div>
	<div class="row" >	
		<div class="cell position-0 width-16" id="content" >
			<?php ; include 'links/datav.php'; ?>
		</div>
	</div>
	<div class="row" >	
		<div class="cell position-0 width-16" id="foot" >
			<?php include_once 'templates/bion/foot.php'; ?>
		</div>
	</div>
</div>

