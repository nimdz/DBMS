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
    <center><h2>Fill This Form To Treat a Patient</h2></center>
<div class="form">
    <form action="Includes/Treat.inc.php" method="post">
        <label for="EmpNo">EmpNo</label><br>
        <input type="text" name="EmpNo" placeholder="Doctor's Employee No"><br>
        
        <label for="Treat_Code">Treat Code</label><br>
        <input type="text" name="Treat_Code" placeholder="Treatment Code"><br>
        
        <label for="Patient_ID">Patient ID</label><br>
        <input type="text" name="Patient_ID" placeholder="Patient ID"><br>

        <label for="Treatment_Date">Treatment Date</label><br>
        <input type="date" name="Treatment_Date" placeholder="Treatment Date"><br>
        
        <label for="Treatment_Time">Treatment Time</label><br>
        <input type="time" name="Treatment_Time" placeholder="Treatment Time"><br>
        
        
        <button type="submit" name="submit">Submit</button>


    </form>
</div>
</body>

</style>

</html>