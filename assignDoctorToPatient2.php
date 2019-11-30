<?php
if(isset($_POST["selectedPatientForAssignment"]))
{
include 'connecttodb.php';
$query2="SELECT DISTINCT licensenumber FROM treats";
$result=mysqli_query($connection,$query2);
if (!$result) {
die("This patinet have no doctor");
}
while ($row2 = mysqli_fetch_assoc($result)) {
	echo "This patient is currently assign to doctor:";
	echo $row2["licensenumber"];
	echo "<br>";
}
$query3="SELECT firstname,lastname, licensenumber FROM doctor";
$result2=mysqli_query($connection,$query3);
if (!$result2) {
echo "There is no doctor availiable";
}
echo "Please Choose a Doctor Below, Notice if the patient already assigned to the Doctor you selected, then that doctor will be deleted ";
while ($row3 = mysqli_fetch_assoc($result2))
{
	echo "<br>";
	echo '<input type="radio" name="selectDoctorToTreat" value="';
	echo $row3["licensenumber"];
	echo '">';
	echo $row3["firstname"]." ".$row3["lastname"]." ".$row3["licensenumber"];
	echo "<br>";
}
}
?>

<form action="assignDoctorToPatient3" method="post">
<input type="submit" name="finishSelectDoctor"> 
</form>

