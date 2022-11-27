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
    <center><h2>Fill This Form To Update Drug</h2></center>
<div class="form">
    <form action="Includes/Updatedrug.inc.php" method="post">
        <label for="Drug_Code">Drug Code</label><br>
        <input type="text" name="Drug_Code" placeholder="Drug Code"><br>

        <label for="Drug_Name">Drug Name</label><br>
        <input type="text" name="Drug_Name" placeholder="New Drug Name"><br>

        <label for="Unit_Cost">Unit Cost</label><br>
        <input type="text" name="Unit_Cost" placeholder="New Unit Cost"><br>

        <label for="Drug_Type">Drug Type</label><br><br>
        Liquid: <input type="radio" name="Drug_Type" value="Liquid">
        Tablet: <input type="radio" name="Drug_Type" value="Tablet"><br><br>

        <label for="Treat_Code">Treat Code</label><br>
        <input type="text" name="Treat_Code" placeholder="New Treatment Code"><br>
        
        <button type="submit" name="submit">Submit</button>


    </form>
</div>
</body>

</html>