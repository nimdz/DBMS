<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../styleforms.php">
</head>
<body>
  <div class="home">
    <h4><a href="http://localhost/System/index.php"> Home </a></h4>
  </div>
    <center><h2>Fill This Form To Obtain a Record of a Patient</h2></center>
<div class="form">
    <form action="Includes/ObtainRecords.inc.php" method="post">
        <!-- <label for="EmpNo">Nurse ID</label><br>
        <input type="text" name="EmpNo" placeholder="Nurse ID No"><br> -->

        <label for="Patient_ID">Patient ID</label><br>
        <input type="text" name="Patient_ID" placeholder="Patient No"><br>
        
        <label for="Weight">Weight</label><br>
        <input type="text" name="Weight" placeholder="Weight"><br>
        
        <label for="Blood_Pressure">Blood Pressure</label><br>
        <input type="text" name="Blood_Pressure" placeholder="Blood Pressure"><br>
        
        <label for="Temperature">Temperature</label><br>
        <input type="text" name="Temperature" placeholder="Temperature"><br>
        
        <label for="Pulse">Pulse</label><br>
        <input type="text" name="Pulse" placeholder="Pulse"><br>
        
        <label for="Vital_Date">Vital Date</label><br>
        <input type="date" name="Vital_Date" placeholder="Vital Date"><br>
        
        <label for="Vital_Time">Vital Time</label><br>
        <input type="time" name="Vital_Time" placeholder="Vital Time"><br>
        
        
        <button type="submit" name="submit">Submit</button>


    </form>
</div>
</body>

</html>