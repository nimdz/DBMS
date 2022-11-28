<?php
include_once '../../../Includes/dbhdoctor.inc.php';

if(isset($_POST['submit'])){

$empno = $_POST['EmpNo'];
$patientid = $_POST['Patient_ID'];
$diagnosisname = $_POST['Diagnosis_Name'];
$diagnosedate = date('Y-m-d', strtotime($_POST['Diagnosis_Date']));
$diagnosetime = $_POST['Diagnosis_Time'];
$description = $_POST['Description'];


//insert data into diagnose table
$sql1 = "INSERT INTO diagnose(EmpNo, Patient_ID, Diagnosis_Name, Diagnosis_Date, Diagnosis_Time, Description) VALUES ('$empno','$patientid','$diagnosisname','$diagnosedate','$diagnosetime','$description');";
mysqli_query($conn, $sql1);
}
header("Location: ../doctorDiagnose.php");