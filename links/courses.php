<?php
require_once '../mysql/faculties.class.php';
$rcourses = new Lecturer; //initiating the Course class
//if($courses->RowExists('ugrad_courses','')){
	//$scinfo = $rcourses->SelectQuery('coursename, ccode', 'ugrad_courses',''); //collect the course name and id

	//$acinfo = $rcourses->ReturnArrayData($scinfo); //collect the course name and id
	//$sacinfo = $courses->setArrayDataOut($acinfo); //collect the course name and id
	//echo '<br> ---- okay ---  <br>';
	//print_r($acinfo);
//}else{
	//echo 'No Available Courses';
//}
// php end tag
/*

<div id="courses"> 
	<form action="" method="post">
		Lecturer:  
			<select name="ccode">
				<?php 
					//setting the course id and name to the select form
					for($i=0; $i < count($acinfo); $i++){ ?>
					 <option  value="<?php echo $acinfo[$i]['ccode']; ?>"><?php echo $acinfo[$i]['coursename']; ?></option>

				<?php 
				echo 'ccode'.$i;
				} ?>
			</select>
			
		Level:  
			<select name="lvl">
					<!-- setting the level form -->
					 <option  value="ugrad">Undergraduate</option>
					 <option  value="post">Post-graduate</option>
			</select>

				</div>
		<input type="submit" value="submit">
	</form>

<?php
if(isset($_POST['ccode']) && isset($_POST['lvl'])){
	$level = $_POST['lvl'];
	$ccode =  $_POST['ccode'];
	if($level == 'post'){
		echo $level;
	}elseif($level == 'ugrad'){	
		echo $ccode;
	}	
}



/*
if(isset($_POST['lect_id']) && isset($_POST['lvl'])){
	$ccode =  $_POST['ccode']; //collecting the course code
	$scourse = $courses->SelectQuery('fac_id', 'ugrad_courses','where ccode = '.$ccode); //collect the faculty id and graduate level of the course
	$acourse = $courses->ReturnArrayData($scourse); //collect the course name and id
	echo '<br> ---- course where ---  <br>';
	print_r($acourse);
}
*/
?>