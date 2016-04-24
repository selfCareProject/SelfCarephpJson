<?php
include 'varibles.php';
include 'patient_vars.php';
include 'doctor_vars.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$DOC_email=$_POST["Email"];
$name="fff@yahoo.com";
//$sql = "SELECT * FROM $TableName1 WHERE $doc_email='$name' ";
$sql = "SELECT * FROM $TableName1 ";


$result = $conn->query($sql);
$resp =array();
while ($row =mysqli_fetch_array($result))
{
array_push($resp,array($Fname=>$row[0],$Lname=>$row[1],$Email=>$row[2],$Passward=>$row[3],
$Moblile=>$row[4],$Weight=>$row[5],$Height=>$row[6],$Gender=>$row[7],$BirthDate=>$row[8],"doc_email"=>$row[9]));

}
/*
$sql = "SELECT * FROM $TableNameDR ";

$result = $conn->query($sql);
$resp =array();
while ($row =mysqli_fetch_array($result))
{
array_push($resp,array($DFname=>$row[0],$DLname=>$row[1],$DEmail=>$row[2],$DPassward=>$row[3],
$DMoblile=>$row[4],$DWeight=>$row[5],$DHeight=>$row[6],$DGender=>$row[7],$DBirthDate=>$row[8]));
}*/

echo json_encode(array("server"=>$resp));
$conn->close();



?>