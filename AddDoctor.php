<?php
 include 'connecttodb.php';
 $firstNameV = $_POST["firstName"];
 $lastNameV = $_POST["lastName"];
 $licenseNumV = $_POST["licenseNum"];
 $licenseDateV = $_POST["licenseDate"];
$specialtyV = $_POST["specialty"];
 $hospitalV = $_POST["hospital"];
 $headDateV = $_POST["headDate"];
 if($headDateV== '')
 {
  $query= 'INSERT INTO doctor (firstname, lastname, licensenumber, datelicensed,specialty,hospitalcode) VALUES ("' . $firstNameV .'","' . $lastNameV . '","'.$licenseNumV.'","' . $licenseDateV . '","' . $specialtyV .'","' . $hospitalV . '");';
 }
 else
 {
  $query= 'INSERT INTO doctor (firstname, lastname, licensenumber, datelicensed,specialty,hospitalcode,headdate) VALUES ("' . $firstNameV .'","' . $lastNameV . '","'.$licenseNumV.'","' . $licenseDateV . '","' . $specialtyV .'","' . $hospitalV . '","' . $headDateV . '");';
 }

 if (!mysqli_query($connection,$query)) {
 die ("Error while trying to add new dotor". mysqli_error($connection));
 } else {
echo "New Doctor Sucessfully Added";
 }
?> 
<a href="index.php" class="homeButton">Home</a>