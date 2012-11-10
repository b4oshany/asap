<?php require_once 'etc/push.inc.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<link href="templates/default/css/form.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php $cur = $_SERVER['SCRIPT_NAME']; ?>
<form action="<?php echo $cur; ?>" method="post">
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
//check if the user credentials are set
if(isset($_POST['username']) && isset($_POST['password']) ){	
	//set user credentials
	$user = $_POST['username'];
	$pass = '32250170a0dca92d53ec9624f336ca24';
	//logger check if the user credentials are vaild
	logger($user, $pass);
}else{
	echo 'asdasd';
}
?>
</body>
</html>
