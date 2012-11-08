<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>ques</title>
		<meta name="description" content="" />
		<meta name="author" content="Oshany" />
		<link rel="stylesheet" type="text/css" href="assess.css">

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	</head>

<body>
<div id="wrap">
	<h1 id="head">THE UNIVERSITY OF THE WEST INDIES</br> MONA CAMPUS</h1>	
	<h2>STUDENTS EVALUATION OF COURSE/LECTURES</h2>
	<div id"holder"> 
		<!-- form creation using php for loop. Each question is echoed into a specific div along with its respective checkboxs
		and posted to the collector that will store the information to the database -->		
		<form action="collector.php" method="post">
		<?php 
		// call the readme file that contains the questions
		require_once 'readme.php';
		//traverse through the file and print the questions based on the number of questions
		for($i = 0; $i < count($conarray); $i++){
			$ratings = "ratings".$i;
			?>
			<div class="question"> <?php echo $conarray[$i]; ?></div>
			<div class="formers">  
				<?php
				for($a = 1; $a < 6; $a++){
				echo $a;
				?>
					<!-- display 5 checkbox, each has a different value which ranges from 1-5 while having the sanme name attribute -->
					<input type="checkbox" name="<?php echo $ratings; ?>" value="<?php echo $a; ?>" >
				<?php		
				}		
				?>
			</div>
		<?php
		}
		?>
			<input type="submit" value="submit">
		</form>
	</div>
	
	<footer>
		<p>		
		&copy; Copyright  by Oshany
		</p>
	</footer>
</div>
</body>
</html>
