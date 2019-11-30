<?php
include 'connecttodb.php';
$query = "SELECT hospital.hospitalname,doctor.firstname,doctor.lastname,doctor.headdate FROM hospital,doctor WHERE hospital.headdocid=doctor.licensenumber ORDER BY hospital.hospitalname";
$result = mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}
echo "<br>";
while ($row = mysqli_fetch_assoc($result)) {
	echo $row["hospitalname"]." ".$row["firstname"]." ".$row["lastname"]." ".$row["headdate"];
	echo "<br>";
}
mysqli_free_result($result);
?>