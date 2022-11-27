<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../styleforms.php">
</head>
<body>
<div class="home">
  <h4><a href="http://localhost/System/index.php"> Home </a></h4>
</div>
    <center><h2>Fill This Form To Assign an Employee to Patient Care Unit</h2></center>
<div class="form">
    <form action="Includes/Unassignpatientcareunit.inc.php" method="post">
        <label for="EmpNo">Employee No</label><br>
        <input type="text" name="EmpNo" placeholder="Employee Number"><br>

        <label for="Unit_ID">Unit ID</label><br>
        <input type="text" name="Unit_ID" placeholder="Unit ID Number"><br>
        
        <button type="submit" name="submit">Submit</button>


    </form>
</div>
</body>

</html>