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
    <form action="Includes/Assignpatientcareunit.inc.php" method="post">
        <label for="EmpNo">Employee No</label><br>
        <input type="text" name="EmpNo" placeholder="Employee Number"><br>

        <label for="Unit_ID">Unit ID</label><br>
        <input type="text" name="Unit_ID" placeholder="Unit ID Number"><br>

        <label for="No_Of_Hours_Per_Week">Number of Hours per week</label><br>
        <input type="text" name="No_Of_Hours_Per_Week" placeholder="Number of hours per week"><br>
        
        <button type="submit" name="submit">Submit</button>


    </form>
</div>
</body>

</html>