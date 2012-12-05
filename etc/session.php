<?php
class Session{
	final public function __construct(){
		ob_start();
		session_start();	
	}
	//return true if the user is logged in
	public function logedin(){
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
			return true;
		}else{
			return false;	
		}
	}
	
	public function StopSesstion($session){
		unset($_SESSION[''.$session.'']);
	}
}

class User extends Session{
	


}
?>