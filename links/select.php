<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("asap", $con);

$sql="SELECT * FROM ugrad_courses WHERE ccode = '".$q."' ";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>id</th>
<th>ques</th>
<th>lect</th>
<th>ccode</th>
<th>module</th>
<th>date</th>
<th>rate</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['ques_id'] . "</td>";
  echo "<td>" . $row['lect_id'] . "</td>";
  echo "<td>" . $row['ccode'] . "</td>";
  echo "<td>" . $row['module'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['rate_1'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>