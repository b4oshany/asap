<?php 	require_once 'config.inc.php';
		require_once 'style.php';
		require_once 'etc/session.php';

// the default in the html link tag should be taken out and uncomment the echo
// echo $template; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Service Unit</title>
<link type="text/css" rel="stylesheet" href="templates/default/css/top.css">
</head>
<body>

<div id="wrapper">
<?php 
//check if the user is logged in
if(logedin()){
	//if the user is logged in the display the front or the index page 
	include ('templates/'.$template.'/top.php');
	
}else{
	// else redirect the user to the login page
	header('location: login.php');
}
?>
</div>
</body>
</html>