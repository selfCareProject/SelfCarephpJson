<?php


include 'varibles.php';
include 'patient_vars.php';
include 'doctor_vars.php';

 echo "hiii ";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
/*
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
*/

// sql patient regestration to create table
if ($conn->query($query_P) === TRUE) {
    echo "Table $TableName1 created successfully";
	 echo $query_P;
	
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($query_save_checkup) === TRUE) {
    echo "Table $TableCHsave created successfully";
	 echo $query_P;
	
} else {
    echo "Error creating table: " . $conn->error;
}
/*

// sql patient records to create table
if ($conn->query($query_p_checkup) === TRUE) {
    echo "Table $TableNameCH created successfully";
} else {
    echo "Error creating table: " . $conn->error;

	}
	
	// sql doctor regestration to create table
if ($conn->query($query_DR) === TRUE) {
    echo "Table $TableNameDR created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// sql doctor records to create table
if ($conn->query($query_DR_checkup) === TRUE) {
    echo "Table $TableNameDRCH created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

*/
$conn->close();
?>