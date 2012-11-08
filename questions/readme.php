<?php
//$file = fopen("questions.txt", "r") or exit("Unable to read file");
$getfile = file_get_contents('questions.txt');
$conarray = explode("===",$getfile);
?>