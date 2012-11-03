<?
ob_start();
session_start();	
//return true if the user is logged in
function logedin(){
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;
	}else{
		return false;	
	}
}
?>