<?php
session_start();
include_once '../../../Includes/dbhnurse.inc.php';
// include_once 'ObtainRecords.inc.php';

if(isset($_POST['submit'])){

$symptom = $_POST['Symptom'];
$patientid = $_SESSION["obtainrecordpatientid"];

$sql = "SELECT * FROM patient_symptom WHERE Patient_ID = '$patientid' AND Symptom = '$symptom';";
$result = mysqli_query($conn, $sql);
$resultcount;
if($result){
    $resultcount = mysqli_num_rows($result);
}
$sql2;
//CHECKING WHETHER IT ALREADY HAVE THE SAME DATA AND DELETE THEM
if($resultcount > 0){
    // $sql2 = "DELETE FROM patient_symptom WHERE Patient_ID = '$patientid' AND Symptom = '$symptom';";
    // mysqli_query($conn, $sql2);
}else{
    // insert daily records into daily_record table
    $sql2 = "INSERT INTO patient_symptom(Patient_ID,Symptom) VALUES ('$patientid','$symptom');";
    mysqli_query($conn, $sql2);
}





// $sql2 = "UPDATE Daily_Record SET EmpNo = '$empno', Patient_ID = '$patientid', Weight = '$weight', Blood_Pressure = '$bloodpressure', Temperature = '$temperature', Pulse = '$pulse', Record_Date = '$recorddate', Record_Time = '$recordtime' WHERE Patient_ID = $patientid;";
// mysqli_query($conn, $sql2);
}
header("Location: ObtainRecordsSymptomshtml.inc.php");