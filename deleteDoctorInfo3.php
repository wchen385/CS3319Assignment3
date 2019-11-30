<?php
include 'connecttodb.php';
if(isset($_POST["deleteDoctorFinal"]) and $_POST["deleteDoctorFinal"]=="yes")
{
$query2="DELETE FROM doctor WHERE licensenumber = '".$row["licensenumber"]."';";
$result2=mysqli_query($connection, $query2);
if (!$result2) {
echo "Can't delete, because this doctor is the head of a hostpital";
}
else
{
echo "The selected doctor is deleted";
}
}
?>
<a href="index.php" class="homeButton">Home</a>