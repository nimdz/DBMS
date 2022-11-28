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
    <center><h2>Fill This Form To Admit the Patient</h2></center>
<div class="form">
    <form action="Includes/Admit.inc.php" method="post">
        <label for="Patient_ID">Patient ID</label><br>
        <input type="text" name="Patient_ID" placeholder="Patient ID"><br>
        
        <label for="Admit_doc">Doctor's Employee No</label><br>
        <input type="text" name="Admit_doc" placeholder="Doctor's Employee No"><br>

        <label for="Ward_No">Ward No</label><br>
        <input type="text" name="Ward_No" placeholder="Ward Number"><br>

        <label for="Bed_ID">Bed No</label><br>
        <input type="text" name="Bed_ID" placeholder="Bed Number"><br>
        
        
        
        <button type="submit" name="submit">Submit</button>


    </form>
</div>
</body>


</html>