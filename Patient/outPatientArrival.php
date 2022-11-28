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
    <form action="Includes/outpatientarrival.inc.php" method="post">
      <br><label for="Patient_ID">Patient ID</label><br>
      <input type="text" name="Patient_ID" placeholder="patient ID"><br>

      <label for="Arrival_Date">Arrival Date</label><br>
      <input type="date" name="Arrival_Date" placeholder="arrival date"><br><br>

      <label for="Arrival_Time">Arrival Time</label><br>
      <input type="time" name="Arrival_Time" placeholder="arrival time"><br><br>
        
        
        
      <center><button type="submit" name="submit">Submit</button></center>


    </form>
</div>
</body>