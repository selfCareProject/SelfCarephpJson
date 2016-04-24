<?php
include 'varibles.php';
include 'patient_vars.php';
include 'doctor_vars.php';

$pressures=$_POST["pres"];
$hearts=$_POST["heart"];
$tempertures=$_POST["temper"];
$time=$_POST["Time"];
$EEmail=$_POST["Email"];
$Doc_or_Patient=$_POST["kind"];

$conn = new mysqli($servername, $username, $password, $dbname);

//registration of patient
if ($Doc_or_Patient == "patient")
{
$sql = "INSERT INTO $TableNameCH ($Patient_ID,  $Date ,$Heart,$Pressure,$Temperture )
VALUES ('$EEmail','$time','$hearts','$pressures', '$tempertures')";

$sql_save = "INSERT INTO $TableCHsave ($sPatient_ID,  $sDate ,$sHeart,$sPressure,$sTemperture )
VALUES ('$EEmail','$time','$hearts','$pressures', '$tempertures')";

if ($conn->query($sql_save) === TRUE) {
    echo "New record created successfully";
	
} else {
    echo "Error: " . $sql_save . "<br>" . $conn->error;
}
}
//registration of doctor

 else if ($Doc_or_Patient == "doctor")
{
$sql = "INSERT INTO $TableNameDRCH ($D_Patient_ID,  $D_Date ,$D_Heart,$D_Pressure,$D_Temperture )
VALUES ('$EEmail','$time', '$hearts','$pressures', '$tempertures')";
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>