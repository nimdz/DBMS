<?php
include_once '../../../../Includes/dbhadmin.inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../../styleoutput.php">
</head>
<body>
<div class="home">
    <h4><a href="http://localhost/System/index.php"> Home </a></h4>
</div>
    
<div class="output">

    

    <?php
    if(isset($_POST['submit'])){
    $diagnosticunitno = $_POST['Diagnostic_Unit_No'];


    //can display only common details to the employee
    $sql1 = "SELECT * FROM diagnostic_unit WHERE Diagnostic_Unit_No = $diagnosticunitno";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    $empno;
    
    if($resultcheck > 0){
        echo "<center><h2>Diagnostic Unit Information</h2></center>";
        while($row = mysqli_fetch_assoc($result)){
            echo "Diagnostic Unit No : " . $row['Diagnostic_Unit_No'] . "<br>";
            echo "Diagnostic Name : " . $row['Diagnostic_Name'] . "<br>";
            echo "Unit_ID : " . $row['Unit_ID'] . "<br>";
        }
 
    }

    // $sql2 = "SELECT * FROM employee WHERE EmpNo = $empno";
    // $result2 = mysqli_query($conn, $sql2);
    // $resultcheck2 = mysqli_num_rows($result2);

    // if($resultcheck2 > 0){
    //     echo "<center><h2>Patient Care Unit Information</h2></center>";
    //     while($row = mysqli_fetch_assoc($result2)){
    //         echo "Name : " . $row['Name'] . "<br>";
    //         echo "Address : " . $row['Address'] . "<br>";
    //         echo "Working Status : " . $row['Working_Status'] . "<br>";
    //         echo "Contact No : " . $row['Caontact_No'] . "<br>";

    //     }
 
    // }

    }
    ?>
</div>

</body>

</html>