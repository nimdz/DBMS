<?php
session_start();
include_once '../../../Includes/dbhregistar.inc.php';
// include_once 'Register.inc.php';

if(isset($_POST['submit'])){

$specilityarea = $_POST['Speciality_Area'];
$empno = $_SESSION["doctoremployeenumber"];

$sql = "SELECT * FROM doctor_speciality WHERE EmpNo = '$empno' AND Speciality_Area = '$specilityarea'";
$result1 = mysqli_query($conn, $sql);
$result1check;
if($result1){
    $result1check = mysqli_num_rows($result1);
}

if($result1check > 0){

}else{
    //insert daily records into daily_record table
    $sql1 = "INSERT INTO doctor_speciality(EmpNo,Speciality_Area) VALUES ('$empno','$specilityarea');";
    mysqli_query($conn, $sql1);
}





// $sql2 = "UPDATE Daily_Record SET EmpNo = '$empno', Patient_ID = '$patientid', Weight = '$weight', Blood_Pressure = '$bloodpressure', Temperature = '$temperature', Pulse = '$pulse', Record_Date = '$recorddate', Record_Time = '$recordtime' WHERE Patient_ID = $patientid;";
// mysqli_query($conn, $sql2);
}
header("Location: DoctorSpeciality.inc.php");