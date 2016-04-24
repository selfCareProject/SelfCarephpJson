<?php
include 'varibles.php';
include 'patient_vars.php';
include 'doctor_vars.php';

$DOC_email=$_POST["DOC_email"];
$EEmail=$_POST["EEmail"];

$ee="fffff@yahoo.com";
$dd="cccc@yahoo.com";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "UPDATE $TableName1 SET $doc_email = '$dd' WHERE $Email= '$ee'";

//$sql = ("SELECT doc_email FROM  $TableName1 WHERE doc_email='$ee '");


if ($conn->query($sql) === TRUE) {
    echo $sql ;
} 

else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();


?>