<?php
session_start();
include_once '../../../Includes/dbhregistar.inc.php';
// include_once 'Register.inc.php';

if(isset($_POST['submitin'])){

$efname = $_POST['EFname'];
$elname = $_POST['ELname'];
$eaddress = $_POST['EAddress'];
$erelationship = $_POST['ERelationship'];
$econtactno = $_POST['EContact_No'];
$patientid = $_SESSION['newpatientid'];

//insert emergency contact informations
$sql5 = "INSERT INTO emergency_contact(Patient_ID,Fname,Lname,Address,Relationship,Contact_No) VALUES ('$patientid','$efname','$elname','$eaddress','$erelationship','$econtactno');";
mysqli_query($conn, $sql5);





// $sql2 = "UPDATE Daily_Record SET EmpNo = '$empno', Patient_ID = '$patientid', Weight = '$weight', Blood_Pressure = '$bloodpressure', Temperature = '$temperature', Pulse = '$pulse', Record_Date = '$recorddate', Record_Time = '$recordtime' WHERE Patient_ID = $patientid;";
// mysqli_query($conn, $sql2);
}
header("Location: ExtraEmergencyRegisterhtml.inc.php");