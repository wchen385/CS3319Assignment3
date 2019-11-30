
<?php
 //connect to the database
 include "connecttodb.php";
?>
<h1>New Doctor Registration</h1>
<form action="addDoctor.php" method="post" >
The first name of the doctor <input type="text" name="firstName"><br>
The last name of the doctor  <input type="text" name="lastName"><br>
The license Number  <input type="text" name="licenseNum"><br>
When is the license Issued<input type="date" name="licenseDate"><br>
What is the specialty: <input type="text" name="specialty"><br>
Which hospital working for: <input type="text" name="hospital"><br>
Head Doctor?If so, please provide the date <input name="headDate" type="date"><br>

 <br><br>
 <input type="submit" value="Click To Submit">
 <hr>
</form>
