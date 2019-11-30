<form action="updateHopistal2.php" method="post">
<?php
include 'connecttodb.php';
$query = "SELECT * FROM hospital";
$result = mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
	echo '<input type="radio" name="selectHopistalAlter" value="';
	echo $row["hospitalcode"];
	echo '">';
	echo $row["hospitalname"]." ".$row["hospitalcode"]." ";
	echo "<br>";
}
mysqli_free_result($result);
?>
Enter New Name:<input type="text" name="newHopistalName"><br>
<input type="submit" name="chosenHopistal">
</form>