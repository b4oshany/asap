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
	<div id="holder"> 
		<!-- form creation using php for loop. Each question is echoed into a specific div along with its respective checkboxs
		and posted to the collector that will store the information to the database -->		
		<form action="collector.php" method="post">
		<div id="ans">
			<div id="lecturer"> 
				Lecturer:  <select name="lect_id">
								 <option  readonly     value="620041228">Oshane Bailey</option>
								 <option  readonly   value="620032422">Vivienne</option>
								 <option readonly   value="620032421">John Brown</option>
								 <option readonly   value="620032122">Ok Math</option>
							</select>
				Course Code:	<input readonly type="text" name="ccode"   value="COMP2240">
				Module:	<input readonly type="text" name="module"   value="6">
				Year:	<input readonly type="datetime" name="year"   value="2012"><br><br>
				
			</div>
			<div id="sex"> 
				Sex:<br> <input type="checkbox" name="sex"   value="male" id="male"><label for="male">M</label>
						<input  type="checkbox" name="sex"   value="female" id="female"><label for="female">F</label>
			</div>
			<div id="yos"> 
				Years of Study:<br> 
						<input type="checkbox" name="yos"   value="1" ><label >1</label>
						<input type="checkbox" name="yos"   value="2" ><label >2</label>
						<input type="checkbox" name="yos"   value="3" ><label >3</label>
						<input type="checkbox" name="yos"   value="4" ><label >4</label>
			</div>
			<div id="age"> 
				Age:<br> <input type="checkbox" name="age"   value="young" id="young"><label for="young">18-25</label>
						<input type="checkbox" name="age"   value="midage" id="midage"><label for="midage">26-35</label>
						<input type="checkbox" name="age"   value="aged" id="aged"><label for="aged">36-55</label>
						<input type="checkbox" name="age"   value="oldage" id="oldage"><label for="oldage">46 & over</label>
			</div>
			<div id="regs"> 
				Registration Status:<br> <input type="checkbox" name="status"   value="pt" id="pt"><label for="pt">P/T</label>
						<input type="checkbox" name="status"   value="ft" id="ft"><label for="ft">F/T</label>
			</div>
			<div class="clear"></div>
		</div>
		<?php 
		// call the readme file that contains the questions
		require_once 'readme.php';
		//set the id for the question
		$qid = "comp"; 
		$count = 0;
		//traverse through the file and print the questions based on the number of questions
		for($i = 0; $i < count($conarray); $i++){
			//set the ratings input name
			$ratings = "ratings".($i+1);
			$que = $i +1;			
			?>
			<!-- print each question in the given file --> 
			<div class="question"> <?php echo $conarray[$i]; ?></div>
			<div class="formers">  
				<?php
				for($a = 1; $a < 6; $a++){
				
				?>
					<!-- display 5 checkbox, each has a different   value which ranges from 1-5 while having the sanme name attribute -->
					<input type="checkbox" name="<?php echo $ratings; ?>"   value="<?php echo $a."-ques".$que."_".$qid ?>" >
				<?php		
				}		
				?>
			</div>
		<?php
		$count = $i + 1;
		//echo $count;
		}
		echo '<input type="hidden" name="count"   value="'.$count.'" >';
		?>
			<input type="submit"   value="submit">
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
