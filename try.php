<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("asap", $con);

$sql="SELECT * FROM user WHERE id = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>id</th>
<th>ques_id</th>
<th>lect_id</th>
<th>ccode</th>
<th>module</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['ques_id'] . "</td>";
  echo "<td>" . $row['lect_id'] . "</td>";
  echo "<td>" . $row['ccode'] . "</td>";
  echo "<td>" . $row['module'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>