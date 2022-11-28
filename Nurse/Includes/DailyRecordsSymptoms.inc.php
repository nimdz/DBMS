<?php
session_start();
include_once '../../../Includes/dbhnurse.inc.php';
// include_once 'DailyRecords.inc.php';

if(isset($_POST['submit'])){

$symptom = $_POST['Symptom'];
$patientid = $_SESSION["dailypatientid"];
$empno = $_SESSION["dailyempno"];
$recorddate = $_SESSION["dailyrecorddate"];
$recordtime = $_SESSION["dailyrecordtime"];

//insert daily records into daily_record table
$sql1 = "INSERT INTO inpatientdailysymptoms(Patient_ID,EmpNo,Record_Time,Record_Date,Symptom) VALUES ('$patientid','$empno','$recordtime','$recorddate','$symptom');";
mysqli_query($conn, $sql1);



// $sql2 = "UPDATE Daily_Record SET EmpNo = '$empno', Patient_ID = '$patientid', Weight = '$weight', Blood_Pressure = '$bloodpressure', Temperature = '$temperature', Pulse = '$pulse', Record_Date = '$recorddate', Record_Time = '$recordtime' WHERE Patient_ID = $patientid;";
// mysqli_query($conn, $sql2);
}
header("Location: DailyRecordsSymptomshtml.inc.php");