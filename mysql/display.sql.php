<?php
//this is the 
abstract class DisplayResults{
	public function ResultsQuery(){
		while($row = mysql_fetch_array($run_query))
		{		
			echo $row['id'] . " " . $row['username'];
			echo "<br />";
		}
	}
}

?>