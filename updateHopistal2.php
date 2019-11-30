<?php
include 'connecttodb.php';
if(isset($_POST['chosenHopistal']))
{
$newHostValue=$_POST["newHopistalName"];
$selectValuess=$_POST["selectHopistalAlter"];
$query2 = "UPDATE hospital SET hospitalname='$newHostValue' WHERE hospitalcode LIKE '" . $_POST["selectHopistalAlter"] . "'";
$result = mysqli_query($connection,$query2);
if (!$result) {
echo "$query2";
die("databases query failed.");
}
else
{
echo "Executing Query: ";
echo "$query2";
echo "<br>";
echo "Sucessfully Upgraded";
}
}
?>
<a href="index.php" class="homeButton">Home</a>