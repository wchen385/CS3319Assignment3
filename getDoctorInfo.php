<form action="getHospitalinfo.php" method="post">
<?php
include 'connecttodb.php';
$query = "SELECT firstname,lastname,licensenumber FROM doctor ORDER BY '".$_POST['nameChoice']."' '".$_POST['nameOrder']."'";
$result = mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result) and $row !=";") {
	echo "<br>";
	echo '<input type="radio" name="selectDoctor" value="';
	echo $row["licensenumber"];
	echo '">';
	echo $row["firstname"];
	echo " ";
	echo $row["lastname"];
	echo " ";
	echo $row["licensenumber"]; 
	echo "<br>";
}
echo "<br>";
mysqli_free_result($result);
?>

<input name='chooseDoctorToSubmit' id="chooseDoctor" type='submit'>
</form>