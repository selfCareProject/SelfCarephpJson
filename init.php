<?php
include 'varibles.php';
include 'patient_vars.php';
include 'doctor_vars.php';
$EEmail="dggcfgv@yahoo.com";
$dates="2016-04-18";
$Doc_or_Patient=$_POST["kind"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM $TableNameCH WHERE MAX ($Date)> '$dates' AND $Patient_ID = '$EEmail'";
//$sql = "SELECT * FROM $TableNameCH ";

$result = $conn->query($sql);
$resp =array();
while ($row =mysqli_fetch_array($result))
{
array_push($resp,array($Patient_ID=>$row[0],$Date=>$row[1],$Heart=>$row[2],$Pressure=>$row[3],
$Temperture=>$row[4]));
}


echo json_encode(array("server"=>$resp));
$conn->close();



?>