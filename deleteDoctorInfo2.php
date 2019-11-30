<?php
include 'connecttodb.php';
if(isset($_POST["decisionDeleteDoctor"]))
{
$doctorLicenseDelete=$_POST["decisionDeleteDoctor"];
$query2="SELECT ohip FROM treats WHERE licensenumber='$doctorLicenseDelete'";
$result2=mysqli_query($connection, $query2);
if (!$result2 || $result2=="") {
echo "This doctor has no patient";
}
else
{
echo "This doctor has some patiences, are you sure you want to delete?";
}
}
?>
<form action="deleteDoctorInfo3" method="post">
<h3>Are You Sure You Want To Delete This Doctor?</h3>
<input type="submit" name="deleteDoctorFinal" value="yes">
<input type="submit" name="deleteDoctorFinal" value="no">
</form>
<?php
if($_POST["deleteDoctorFinal"]=="no")
{
	echo "Deletion cancelled, please use other functions";
}
?>