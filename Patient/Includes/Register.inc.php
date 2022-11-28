<?php
session_start();
include_once '../../../Includes/dbhregistar.inc.php';

if(isset($_POST['submitin'])){

$name = $_POST['Name'];
// $arrivaldate = date('Y-m-d', strtotime($_POST['Arrival_Date']));
// $arrivaltime = $_POST['Arrival_Time'];
$admitteddate = date('Y-m-d', strtotime($_POST['Admitted_Date']));
$admittedtime = $_POST['Admitted_Time'];
// $dischargeddate = date('Y-m-d', strtotime($_POST['Discharged_Date']));
// $dischargedtime = $_POST['Discharged_Time'];
$patientstatus = $_POST['Patient_Status'];
// $inflag = "NO"; $outflag = "NO";
// if($patientstatus=="In-Patient"){
$inflag = "YES";
$outflag = "NO";
// }else if($patientstatus=="Out-Patient"){
//     $inflag = "NO";
//     $outflag = "YES";
// }

// $wardno = $_POST['Ward_No'];
// $bedid = $_POST['Bed_ID'];

$efname = $_POST['EFname'];
$elname = $_POST['ELname'];
$eaddress = $_POST['EAddress'];
$erelationship = $_POST['ERelationship'];
$econtactno = $_POST['EContact_No'];

// $companyname = $_POST['Company_Name'];
// $companyaddress = $_POST['Company_Address'];
// $branchname = $_POST['Branch_Name'];
// $branchaddress = $_POST['Branch_Address'];
// $icontactno = $_POST['IContact_No'];

// $sfname = $_POST['SFname'];
// $slname = $_POST['SLname'];
// $saddress = $_POST['SAddress'];
// $srelationship = $_POST['SRelationship'];
// $scontactno = $_POST['SContact_No'];

//insurance company table currently not updated!
// $sql1 = "INSERT INTO patient (Name, Admitted_Date, Admitted_Time, In_Flag, Out_Flag, Ward_No, Bed_ID) VALUES ('$name','$admitteddate','$admittedtime','$inflag','$outflag','$wardno','$bedid');";
$sql1 = "INSERT INTO patient (Name, Admitted_Date, Admitted_Time, In_Flag, Out_Flag) VALUES ('$name','$admitteddate','$admittedtime','$inflag','$outflag');";
mysqli_query($conn, $sql1);

//not sure whether it returns the id number of the nurse
$sql7;
$result = mysqli_query($conn, "SELECT * FROM patient WHERE Name = '$name' AND Admitted_Date = '$admitteddate' AND Admitted_Time = '$admittedtime' AND In_Flag = '$inflag' AND Out_Flag = '$outflag'");
$patientid;

$row = mysqli_fetch_assoc($result);
//if(isset($row['Patient_ID'])){
$patientid = $row['Patient_ID'];
//}
echo $patientid;

$_SESSION['newpatientid'] = $patientid;

// //insert insurance company informations
// $sql2 = "INSERT INTO insurance_company(Patient_ID, Company_Name, Company_Address, Branch_Name, Branch_Address, Contact_No) VALUES ('$patientid','$companyname','$companyaddress','$branchname','$branchaddress','$icontactno');";
// mysqli_query($conn, $sql2);

// //update the company name column in patiend table
// $sql3 = "UPDATE patient SET Company_Name = '$companyname' WHERE(Patient_ID = '$patientid');";
// mysqli_query($conn, $sql3);

// //insert insurance subscriber informations
// $sql4 = "INSERT INTO insurance_subscriber(Patient_ID, Company_Name, Fname, Lname, Relationship, Address, Contact_No) VALUES ('$patientid','$companyname','$sfname','$slname','$srelationship','$saddress','$scontactno');";
// mysqli_query($conn, $sql4);

//insert emergency contact informations
$sql5 = "INSERT INTO emergency_contact(Patient_ID,Fname,Lname,Address,Relationship,Contact_No) VALUES ('$patientid','$efname','$elname','$eaddress','$erelationship','$econtactno');";
mysqli_query($conn, $sql5);

header("Location: ExtraEmergencyRegisterhtml.inc.php");

}

if(isset($_POST['submitout'])){
    $name = $_POST['Name'];
    $arrivaldate = date('Y-m-d', strtotime($_POST['Arrival_Date']));
    $arrivaltime = $_POST['Arrival_Time'];

    $patientstatus = $_POST['Patient_Status'];
    // $inflag = "NO"; $outflag = "NO";
    // if($patientstatus=="In-Patient"){
    $inflag = "NO";
    $outflag = "YES";
    // }else if($patientstatus=="Out-Patient"){
    //     $inflag = "NO";
    //     $outflag = "YES";
    // }

    $sql1 = "INSERT INTO patient (Name, Arrival_Date, Arrival_Time, In_Flag, Out_Flag) VALUES ('$name','$arrivaldate','$arrivaltime','$inflag','$outflag');";
    mysqli_query($conn, $sql1);

    header("Location: ../patientRegister.php");

}

