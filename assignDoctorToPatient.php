<?php
include 'connecttodb.php';
$query="SELECT firstname,lastname,ohip FROM patient";
$result = mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) 
{
	echo "<br>";
	echo '<input type="radio" name="displayAllPatient" value="';
	echo $row["ohip"];
	echo '">';
	echo $row["firstname"]." ".$row["lastname"]." ".$row["licensenumber"];
	echo "<br>";
}
?>

<form action="assignDoctorToPatient2.php" method="post">
<input type="submit" name="selectedPatientForAssignment">
</form>





