<?php
include 'connecttodb.php';
if(isset($_POST["finishSelectDoctor"]))
{
$selDoct=$_POST["selectDoctorToTreat"];
$query4="SELECT * FROM treats WHERE '$selDoct'=licensenumber";
$result3=mysqli_query($connection,$query4);
if (!$result3) {
 $licensenumbers = $_POST["selectDoctorToTreat"];
 $ohips = $_POST["displayAllPatient"];
 $queryRun="INSERT INTO treats (ohip,licensenumber) VALUES ('$ohips','$licensenumbers')";
 $result4=mysqli_query($connection,$queryRun);
 if (!$result3) {
echo "Failed To Assign";
 }
 else
 {
 echo "Sucessfully Assigned";
 }
}
else
{
 $licensenumbers = $_POST["selectDoctorToTreat"];
 $ohips = $_POST["displayAllPatient"];
 $queryRun2="DELETE FROM treats WHERE ohip='$licensenumbers' AND licensenumber='$licensenumbers'";
 $result5=mysqli_query($connection,$queryRun2);
 if (!$result5) {
echo "$queryRun2";
echo "Delete Doctor Failed";
 }
 else
 {
 echo "$queryRun2";
 echo "Successfully Deleted";
 }
}
}
?>
<a href="index.php" class="homeButton">Home</a>