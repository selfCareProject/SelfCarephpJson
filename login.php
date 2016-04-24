<?php
include 'varibles.php';
include 'patient_vars.php';
include 'doctor_vars.php';


$EEmail=$_POST["Email"];
$Doc_or_Patient=$_POST["kind"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//registration of patient
if ($Doc_or_Patient == "patient")
{
$sql = "SELECT * FROM $TableName1 WHERE $Email= '$EEmail'";
}
//registration of doctor
else if ($Doc_or_Patient == "doctor")
{
$sql = "SELECT * FROM $TableNameDR WHERE $DEmail= '$EEmail'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  echo "selected";
}
else
{
echo "unselected";
}
$conn->close();


?>