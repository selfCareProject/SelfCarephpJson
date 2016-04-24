<?php
include 'varibles.php';
include 'patient_vars.php';
include 'doctor_vars.php';


$f_name=$_POST["FName"];
$l_name=$_POST["LName"];
$pass=$_POST["Passward"];
$mob=$_POST["Mobile"];
$Birth=$_POST["BirthDate"];
$Weights=$_POST["Weights"];
$Heights=$_POST["Heights"];
$gen=$_POST["Gender"];
$EEmail=$_POST["Email"];
$DOC_email=$_POST["DOC_email"];
$Doc_or_Patient=$_POST["kind"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//registration of patient
if ($Doc_or_Patient == "patient")
{
$sql = "UPDATE $TableName1 SET $Fname= '$f_name',$Lname= '$l_name',$Passward= '$pass',
$Moblile= '$mob',$Weight= '$Weights',$Height= '$Heights',$Gender= '$gen',$BirthDate= '$Birth',
$doc_email='$DOC_email' WHERE $Email= '$EEmail'";
}
//registration of doctor
else if ($Doc_or_Patient == "doctor")
{
//"UPDATE MyGuests SET lastname='Doe' WHERE id=2";
$sql = "UPDATE $TableNameDR SET $DFname= '$f_name',$DLname= '$l_name',$DPassward= '$pass',
$DMoblile= '$mob',$DWeight= '$Weights',$DHeight= '$Heights',$DGender= '$gen',$DBirthDate= '$Birth' WHERE $DEmail= '$EEmail'";
}

//$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} 

else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();


?>