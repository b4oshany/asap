<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/form.css" rel="stylesheet" type="text/css">

</head>

<body>

<? $cur = $_SERVER['SCRIPT_NAME']; ?>
<form action="<? echo $cur; ?>" method="post">
	<fieldset id="form">
		<legend>Sign Up</legend>
		<div id="apDiv1">
			<label >Username<input type="text" name="username" id="name" required pattern="[a-zA-Z0-9]{5,25}"></label><br>
			<label >Password</label>		
			<input type="password" required name="password" id="pass" pattern="[a-zA-Z0-9]{5,20}"><br>
			<input type="submit" value="Login">
		</div>
	</fieldset>
</form>
<?php 
require_once 'etc/push.inc.php';
if(isset($_POST['username']) && !isset($_POST['pass']) ){
	$user = $_POST['username'];
	//$pass = md5($_POST['password']);
	$pass = '32250170a0dca92d53ec9624f336ca24';
	logger($user, $pass);
	
	
	if(loggedin90){
		echo 'logo in';
	}else if(!loginedin()){
		echo 'please log in';
		
	}
}else{
	echo 'ok';

}
?>
</body>
</html>
