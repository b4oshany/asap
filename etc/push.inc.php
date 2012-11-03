<?php
require 'connect.inc.php';
require 'session.php';
// check user credentials
function logger($user, $pass){
	//select the username and password out of the database base on the given username and password of the user
	$query = "SELECT id FROM users WHERE username='$user' AND passer='$pass'";
	//checking the table values
	if($query_run = mysql_query($query)){
		//collecting the number of rows in the table
		$query_num_rows = mysql_num_rows($query_run);
		$query_num_rows;
		//check the number of matching roww
		if($query_num_rows == 0){
			?>
			<!-- Alert the user of invalid credentials -->
			<script type="text/javascript"> alert("Invalid user name and password");</script>
			<?
		}else{
			//collect the user id			
			$user_id = mysql_result($query_run, 0, 'id');
			//store the session using the user id
			$_SESSION['user_id']=$user_id;
			//redirect the user to the home or front page after they loggged in
			header('location: '.$hoster.'/asap/index.php');
		}
	}else{
		echo 'not ok';
	}
}
/*
$pass = '32250170a0dca92d53ec9624f336ca24';
$user = 'oshany';
logger($user, $pass);
*/
?>