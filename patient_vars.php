<?php
  // patient  regster

$TableName1="patient_inf";
$Fname="FirstName";
$Lname="LastName";
$Email ="Email";
$Passward = "passward";
$Moblile ="Mobile";
$BirthDate ="BirthDate";
$Height="Height";
$Weight = "Weight";
$Gender ="Gender";
$doc_email="doc_email";
  //SQL statement of patient  regster

$query_P ="CREATE TABLE $TableName1 ( 
                $Fname  varchar(255) NOT NULL,
                $Lname  varchar(255) NOT NULL,
                $Email  varchar(255) PRIMARY KEY NOT NULL ,
                $Passward varchar(255) NOT NULL,
                $Moblile  INTEGER NOT NULL,
                $Weight  INTEGER NOT NULL,
                $Height  INTEGER NOT NULL,
                $Gender  varchar(255) NOT NULL,
                $BirthDate  DATE,
                $doc_email	varchar(255));";
				

				
//records of patient 		
				
$TableNameCH="patient_records";
$Date="Date";
$Heart="Heart";
$Pressure ="Pressure";
$Temperture ="Temperture";
$Patient_ID ="Patient_email";//forgenKey

 //SQL statement of records of patient 
$query_p_checkup ="CREATE TABLE $TableNameCH (
                $Patient_ID varchar(255) ,
                $Date DATE ,
                $Heart varchar(255) ,
                $Pressure varchar(255) ,
                $Temperture varchar(255) ,
                FOREIGN KEY ($Patient_ID) REFERENCES $TableName1($Email));";
				
$TableCHsave="patientSaverecords";
$sDate="Date";
$sHeart="Heart";
$sPressure ="Pressure";
$sTemperture ="Temperture";
$sPatient_ID ="Patient_email";//forgenKey

 //SQL statement of records of patient 
$query_save_checkup ="CREATE TABLE $TableCHsave (
                $sPatient_ID varchar(255) ,
                $sDate DATE ,
                $sHeart varchar(255) ,
                $sPressure varchar(255) ,
                $sTemperture varchar(255) ,
                FOREIGN KEY ($sPatient_ID) REFERENCES $TableName1($Email));";

   


?>