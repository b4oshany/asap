<?php
// collect all results from the database and store them into an array
// however, a try statement is used just incase of an error

	
require_once '../etc/connect.inc.php';
<<<<<<< HEAD

=======
>>>>>>> 284ccfafc52db7ef2e4094bb1d8a373c3c5683c8
	try{
		for($i = 0; $i < 2; $i++){
			if($_POST["ratings".$i]){
				$ratings[$i] = $_POST["ratings".$i];
<<<<<<< HEAD
				//echo $ratings[$i];
=======
				echo $ratings[$i];
>>>>>>> 284ccfafc52db7ef2e4094bb1d8a373c3c5683c8
				if($ratings[$i] == 1){
					$qresult = mysql_query("SELECT id, ratings_1 FROM ugrad_results");
					while($results = mysql_fetch_array($qresult)){
						$r = $results['ratings_1'];
						//echo $r;
						$r++;
						//echo $r;
						$isql = mysql_query("UPDATE ugrad_results SET ratings_1 =".$r." WHERE id = 1");
					}
				}elseif($ratings[$i] == 2){
					$qresult = mysql_query("SELECT id, ratings_1 FROM ugrad_results");
					while($results = mysql_fetch_array($qresult)){
						$r = $results['ratings_1'];
						//echo $r;
						$r++;
						//echo $r;
						$isql = mysql_query("UPDATE ugrad_results SET ratings_1 =".$r." WHERE id = 2");
					}
				}elseif($ratings[$i] == 3){
					$qresult = mysql_query("SELECT id, ratings_1 FROM ugrad_results");
					while($results = mysql_fetch_array($qresult)){
						$r = $results['ratings_1'];
						//echo $r;
						$r++;
						//echo $r;
						$isql = mysql_query("UPDATE ugrad_results SET ratings_1 =".$r." WHERE id = 3");
					}
				}elseif($ratings[$i] == 4){
					$qresult = mysql_query("SELECT id, ratings_1 FROM ugrad_results");
					while($results = mysql_fetch_array($qresult)){
						$r = $results['ratings_1'];
						//echo $r;
						$r++;
						//echo $r;
						$isql = mysql_query("UPDATE ugrad_results SET ratings_1 =".$r." WHERE id = 4");
					}
				}elseif($ratings[$i] == 5){
					$qresult = mysql_query("SELECT id, ratings_1 FROM ugrad_results");
					while($results = mysql_fetch_array($qresult)){
						$r = $results['ratings_1'];
						//echo $r;
						$r++;
						//echo $r;
						$isql = mysql_query("UPDATE ugrad_results SET ratings_1 =".$r." WHERE id = 5");
					}
				}
			}	
		}
	}catch (exception $e){
		echo $_POST['ratings0'];
	}
 


?>