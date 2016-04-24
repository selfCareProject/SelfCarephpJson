<?php
include 'varibles.php';
include 'patient_vars.php';
include 'doctor_vars.php';
$conn = new mysqli($servername, $username, $password, $dbname);

$sql ="DELETE  FROM $TableName1";
$sql1 ="DELETE  FROM $TableNameCH";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
}
if ($conn->query($sql1) === TRUE) {
    echo "Record updated successfully";
} 

else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();


?>

