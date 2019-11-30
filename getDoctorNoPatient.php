<?php
include 'connecttodb.php';
$query="SELECT DISTINCT doctor.firstname AS dofirstname,doctor.lastname AS dolastname FROM doctor,treats WHERE doctor.licensenumber NOT IN (SELECT treats.licensenumber FROM treats)";
$result = mysqli_query($connection,$query);
if (!$result) {
die("Database Error");
}
else
{
while ($row = mysqli_fetch_assoc($result)) {
	echo $row[dofirstname]." ".$row[dolastname];
	echo "<br>";
}
mysqli_free_result($result);
}

?>