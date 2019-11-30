<?php
 include 'connecttodb.php';
 $selectDoctorChoice=$_POST["selectDoctor"];
 $query="SELECT * FROM doctor WHERE licensenumber = '$selectDoctorChoice'";
 $result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on hospitalfailed. ");
 }
 while ($row = mysqli_fetch_assoc($result)) {
echo $row["firstname"]." ".$row["lastname"]." ".$row["licensenumber"]." ".$row["datelicensed"]." ".$row["specialty"]." ".$row["hospitalcode"]." ".$row["headdate"];
$hospt=$row["hospitalcode"];
 }
$query2="SELECT hospitalname FROM hospital WHERE hospitalcode ='$hospt'";
$result2 = mysqli_query($connection, $query2);
while ($row2 = mysqli_fetch_assoc($result2)) {
echo $row2["hospitalname"];
}
echo "<br>";
mysqli_free_result($result);
mysqli_free_result($result2);
?>