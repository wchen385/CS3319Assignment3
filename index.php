<!DOCTYPE html>
<html>
<head>
	<title>Hospital Database</title>
	<link rel="stylesheet" type="text/css" href="3319Assignment3CSS.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
	<script src="hospitalDatabase.js"></script>
</head>
<body color='white'>
<?php include "connecttodb.php";?>
<h1>Welcome To Hospital Database Management System </h1>
<h2> Please Choose Your Option</h2>
<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<form align="center" style='margin-bottom:25px' action="getDoctorInfo.php" method="post">
    <input type='radio' name="nameChoice" value="firstname">FirstName<br>
    <input type='radio' name="nameChoice" value="lastname">LastName<br>

    <input type='radio' name="nameOrder" value="ASC">Ascending<br>
    <input type='radio' name="nameOrder" value="DESC">Descending<br>
<input style='font-weight:bold;height:7em' class="buttonClass" name='submitOrderChoice' id="submitOrderChoice" type='submit'  value="Search and display doctor's Information">
</form>
</div>
<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<form  align="center" style='margin-bottom:25px' action="" method="post">
  Please Enter Date: <input type='date' name="userInputDate" id="userInputDate">
  <br>
  <input class="buttonClass" type='submit' name="submitDate" id="submitDate" value="Find doctor who is licensed before given day">
</form>
 <?php
if(isset($_POST["submitDate"])){
  include "showDoctorGivenDate.php";
}
?>
</div>
<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<form action="" method="post">
    <input class="buttonClass" type='submit' name="registerDoctor" value="Doctor Registration">
</form>
<?php
if(isset($_POST["registerDoctor"])){
 include "addNewDoctor.php";
}
?>
</div>
<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<form action="" method="post">
  <input class="buttonClass" type='submit' name="deleteDoctor" value="Delete the doctor">
</form>
<?php 
if(isset($_POST["deleteDoctor"])){
include "deleteDoctorInfo.php";
}
?>
</div>
<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
 <form action="" method="post">
  <input class="buttonClass" type='submit' name="updateHopistalName" value="Update Hospital Name">
</form>
<?php
if(isset($_POST["updateHopistalName"])){
 include "updateHopistal.php";
}
?>
</div>
<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
 <form action="" method="post">
  <input class="buttonClass" type='submit' name="displayAllHopistalNameDoctor" value="List all hospitals Name and head doctor information">
</form>
<?php 
if(isset($_POST["displayAllHopistalNameDoctor"])){
include "displayHospitalDoctor.php";
}
 ?>
 </div>

 <div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
 <form action="searchPatientDoctor.php" method="post">
Search Patience's Doctors By Entering OHIP: 
<br>
<div>
<input style="display:inline-block;" type="text" name="ohipEnter"><br>
<input style="font-size : 20px; width: 10%; height: 100px;" type="submit" name="submitSearchPatientDoctor">
</div>
</form>
</div>

<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<form action="assignDoctorToPatient.php" method="post">
  <input class="buttonClass" type='submit' name="assignDoctorPatient" value="Assign doctor to patient">
</form>
</div>

<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<form action="" method="post">
  <input class="buttonClass" type='submit' name="doctNoPatient" value="Search Doctor who doesn't have patient">
</form>
<?php 
if(isset($_POST["doctNoPatient"])){
include "getDoctorNoPatient.php";
}
?>
<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
</body>
</html>
