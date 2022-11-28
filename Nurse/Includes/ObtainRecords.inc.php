<?php
session_start();
include_once '../../../Includes/dbhnurse.inc.php';

if(isset($_POST['submit'])){

// $empno = $_POST['EmpNo'];
$patientid = $_POST['Patient_ID'];
$weight = $_POST['Weight'];
$bloodpressure = $_POST['Blood_Pressure'];
$temperature = $_POST['Temperature'];
$pulse = $_POST['Pulse'];
$vitaldate = date('Y-m-d', strtotime($_POST['Vital_Date']));
$vitaltime = $_POST['Vital_Time'];

$_SESSION["obtainrecordpatientid"] = $patientid;

// //insert data into patient table
// $sql1 = "INSERT INTO patient(EmpNo, Weight, Blood_Pressure, Temperature, Pulse, Vital_Date, Vital_Time) VALUES ('$empno','$weight','$bloodpressure','$temperature','$pulse','$vitaldate','$vitaltime') where Patient_ID = $patientid;";
// mysqli_query($conn, $sql1);

//updating might be the correct way
$sql2 = "UPDATE patient SET Weight = '$weight', Blood_Pressure = '$bloodpressure', Temperature = '$temperature', Pulse = '$pulse', Vital_Date = '$vitaldate', Vital_Time = '$vitaltime' WHERE Patient_ID = $patientid;";
mysqli_query($conn, $sql2);
}
header("Location: ObtainRecordsSymptomshtml.inc.php");