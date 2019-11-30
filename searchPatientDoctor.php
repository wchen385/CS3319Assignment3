<?php
if(isset($_POST["submitSearchPatientDoctor"])){
include 'connecttodb.php';
$ohipUserEnters=$_POST["ohipEnter"];
$query = "SELECT  firstname FROM patient WHERE ohip='$ohipUserEnters'";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);

if($row["firstname"]=="")
{
echo "Couldn't find the OHIP Number Your Enter";
}
$ohipUserEnter=$_POST["ohipEnter"];
$query = "
SELECT DISTINCT patient.firstname AS pfirstname,patient.lastname AS plastname,doctor.firstname AS dfirstname,doctor.lastname AS dlastname FROM doctor,patient,treats WHERE doctor.licensenumber=treats.licensenumber AND ('$ohipUserEnter'=treats.ohip)";
$result = mysqli_query($connection,$query);
if(!$result)
{
die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
	echo $row[pfirstname]." ".$row[plastname]." ".$row[dfirstname]." ".$row[dlastname];
	echo "<br>";
}
}
?>
<a href="index.php" class="homeButton">Home</a>