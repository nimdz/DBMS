R<html lang="en">
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
    <center><h2>Fill This Form To Supply</h2></center>
<div class="form">
    <form action="Includes/VendorSupply.inc.php" method="post">
        <label for="Registration_No">Registration No</label><br>
        <input type="text" name="Registration_No" placeholder="Registration Number"><br>

        <label for="Drug_Code">Drug Code</label><br>
        <input type="text" name="Drug_Code" placeholder="Drug Code"><br>
        
        <label for="Supply_Date">Supply Date</label><br>
        <input type="date" name="Supply_Date" placeholder="Supply Date"><br>
        
        <label for="Unit_Cost">Unit Cost</label><br>
        <input type="number" name="Unit_Cost" placeholder="Unit_Cost"><br>

        <label for="Quantity">Quantity</label><br>
        <input type="number" name="Quantity" placeholder="Quantity"><br>
        
        <label for="Drug_Type">Drug Type</label><br><br>
        Liquid: <input type="radio" name="Drug_Type" value="Liquid">
        Tablet: <input type="radio" name="Drug_Type" value="Tablet"><br><br>
        
        
        <button type="submit" name="submit">Submit</button>


    </form>
</div>
</body>

</html>