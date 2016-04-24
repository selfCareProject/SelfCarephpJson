<?php

$servername = "mysql.2freehosting.com";
$username = "u787994640_self";
$password = "selfcare";
$dbname = "u787994640_care";
$users="users";
$ID="id";
$gcm_regid="gcm_regid";
$name ="name";
$email = "email";
$created_at ="created_at";
$conn = mysqli_connect($servername, $username, $password, $dbname);
  //SQL statement of patient  regster
  
 $query_P =" CREATE TABLE $users (
$ID INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
$gcm_regid text,
$name varchar(50) NOT NULL,
$email varchar(255) NOT NULL, 
$created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP

)ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1; ";   

if ($conn->query($query_P) == TRUE) {
    echo "Table $users created successfully";
} else {
    echo "Error creating table: " . $conn->error;

	}
				
				?>