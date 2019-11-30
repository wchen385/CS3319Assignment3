<?php
include 'connecttodb.php';
$query="SELECT firstname, lastname, licensenumber FROM doctor";
$result=mysqli_query($connection, $query);
if (!$result) {
die("databases query failed.");
}
while($row=mysqli_fetch_assoc($result))
{
	echo "<br>";
	echo '<input type="radio" name="selectDoctorDelete" value="';
	echo $row["licensenumber"];
	echo '">';
	echo $row[firstname];
	echo $row[lastname];
	echo $row[licensenumber];
	echo "<br>";

}
mysqli_free_result($result);
?>

<form action="deleteDoctorInfo2.php" method="post">
<br>
Once you select doctor please click submit 
<br>
<input type="submit" name="decisionDeleteDoctor">
</form>