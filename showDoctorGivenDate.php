<?php
$userInputDate=$_POST['userInputDate'];
$query = "SELECT firstname,lastname,specialty FROM doctor WHERE datelicensed < '$userInputDate'";
$result = mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
 echo "<br>";
 echo $row["firstname"]." ".$row["lastname"]." ".$row["specialty"];
 echo "<br>";
}
mysqli_free_result($result);
?>