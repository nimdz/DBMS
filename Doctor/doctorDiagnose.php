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
    <center><h2>Fill This Form To Diagnose a Patient</h2></center>
<div class="form">
    <form action="Includes/Diagnose.inc.php" method="post">
        <label for="EmpNo">EmpNo</label><br>
        <input type="text" name="EmpNo" placeholder="Doctor's Employee No"><br>
        
        <label for="Patient_ID">Patient ID</label><br>
        <input type="text" name="Patient_ID" placeholder="Patient ID"><br>
        
        <label for="Diagnosis_Name">Diagnosis Name</label><br>
        <input type="text" name="Diagnosis_Name" placeholder="Diagnosis Name"><br>
        
        <label for="Diagnosis_Date">Diagnose Date</label><br>
        <input type="date" name="Diagnosis_Date" placeholder="Diagnosis Date"><br>
        
        <label for="Diagnosis_Time">Diagnose Time</label><br>
        <input type="time" name="Diagnosis_Time" placeholder="Diagnosis Time"><br>
        
        <label for="Description">Description</label><br>
        <input type="text" name="Description" placeholder="Description"><br>
        
        
        <button type="submit" name="submit">Submit</button>


    </form>
</div>
</body>

</html>