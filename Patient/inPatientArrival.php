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
    <center><h2>Fill following details</h2></center>
<div class="form">
    <form action="Includes/inpatientarrival.inc.php" method="post">
      <br><label for="Patient_ID">Patient ID</label><br>
      <input type="text" name="Patient_ID" placeholder="patient ID"><br>

      <label for="Admitted_Date">Admitted Date</label><br>
      <input type="date" name="Admitted_Date" placeholder="admitted date"><br><br>

      <label for="Admitted_Time">Admitted Time</label><br>
      <input type="time" name="Admitted_Time" placeholder="admitted time"><br><br>
        
        
        
      <center><button type="submit" name="submit">Submit</button></center>


    </form>
</div>
</body>


</html>