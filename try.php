<?php
	
	class a {
		public $a = '1';
	}
	class b {
		public $b = '11';
	}
	class c extends a with b {
		public $c = '12';
	}

	$g = new c;
	echo $g->a.'<br>';
	echo $g->c.'<br>';
	echo $g->b.'<br>';
	
?>