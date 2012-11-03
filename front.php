
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Service Unit</title>
<link type="text/css" rel="stylesheet" href="templates/default/css/top.css">
</head>
<body>
<?php 	require_once 'config.inc.php';
		require_once 'style.php';
		require_once 'etc/start_session.php';

// the default in the html link tag should be taken out and uncomment the echo
// echo $template; ?>
<div id="wrapper">
<?php 
if(logedin()){
	include ('templates/'.$template.'/top.php');
}else{
	header('location: index.php');
}
?>
</div>
</body>
</html>