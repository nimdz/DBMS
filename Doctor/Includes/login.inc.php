<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../styleloginerror.php">

</head>
<body>
    
<div class="output">
    
    <?php
    session_start();
    // include_once '../../../Includes/dbh.inc.php';

    $dbServerName = "localhost";
    $dbUserName = $_POST['User_Name'];
    $dbPassword = $_POST['Password'];
    $dbName = "hospital";

    $_SESSION['doctorpassword'] = $dbPassword;

    $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
    if(!$conn || $dbUserName !== "Doctor"){
        sleep(3);
        echo "<br><center><b>Invalid Username or Password</b></center>";
    }else{
        header("Location: ../doctor.php");
    }

    // if(isset($_POST['submit'])){

    // $password = $_POST['Password'];

    // if($password=="doctor123"){
    //     header("Location: ../doctor.php");
    // }else{
    //     sleep(3);
    //     echo "<br><center><b>Invalid Password</b></center>";
    //     // sleep(5);
    //     // header("Location: ../../../index.php");
    // }
    // }
    ?>

    <center><a href="../../../index.php">OK</a></center>
</div>

</body>





<!-- // //insert the id number of the doctor in the admit_doc column in patient table
// $sql1 = "UPDATE Patient SET Admitted_Doctor = '$admitdocid', In_Flag = '$inflag', Out_Flag = '$outflag' WHERE Patient_ID = $patientid;";
// mysqli_query($conn, $sql1);
// }
// header("Location: ../doctorAddmit.html"); -->
</html>