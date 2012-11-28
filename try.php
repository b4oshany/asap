<?php
class people{
	private $color = "";
	
	protected function displaycomplexion(){
		return $this->color;
	}
	protected function setcomplexion($color){
		$this->color = $color;
	}
}
class jamaicans extends people{

	public function type($color){
		parent::setcomplexion($color);
		$complexion = parent::displaycomplexion();
		if($complexion == 'white'){
			return 'White Jamaican';
		}else if($complexion == 'black'){
			return 'black Jamaican';
		}else{ 'You are some what Jamaican';}		
	}
}
$oshane = new jamaicans;
echo $oshane->type('black');


?>