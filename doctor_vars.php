<?php

 // doctor  regster

$TableNameDR="reg_doctor_inf";
$DFname="FirstName";
$DLname="LastName";
$DEmail ="Email";
$DPassward = "passward";
$DMoblile ="Mobile";
$DBirthDate ="BirthDate";
$DHeight="Height";
$DWeight = "Weight";
$DGender ="Gender";

$query_DR ="CREATE TABLE $TableNameDR ( 
                $DFname  varchar(255) NOT NULL,
                $DLname  varchar(255) NOT NULL,
                $DEmail  varchar(255) PRIMARY KEY NOT NULL ,
                $DPassward varchar(255) NOT NULL,
                $DMoblile  INTEGER NOT NULL,
                $DWeight  INTEGER NOT NULL,
                $DHeight  INTEGER NOT NULL,
                $DGender  varchar(255) NOT NULL,
                $DBirthDate  DATE );";
				

				
//records of patient 		
				
$TableNameDRCH="doctor_records";
$D_Date="Date";
$D_Heart="Heart";
$D_Pressure ="Pressure";
$D_Temperture ="Temperture";
$D_Patient_ID ="Patient_email";//forgenKey

 //SQL statement of records of patient 
$query_DR_checkup ="CREATE TABLE $TableNameDRCH (
                $D_Patient_ID varchar(255) ,
                $D_Date DATE ,
                $D_Heart varchar(255) ,
                $D_Pressure varchar(255) ,
                $D_Temperture varchar(255) ,
                FOREIGN KEY ($D_Patient_ID) REFERENCES $TableNameDR($DEmail));";

   


?>