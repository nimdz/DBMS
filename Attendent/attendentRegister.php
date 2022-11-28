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
    <center><h2>Fill This Form To Get Register</h2></center>
<div class="form">
    <form action="Includes/Register.inc.php" method="post">
        <label for="Name">FullName</label><br>
        <input type="text" name="Name" placeholder="FullName"><br>
        
        <label for="Address">Address</label><br>
        <input type="text" name="Address" placeholder="Address"><br>
        
        <!-- <label for="Working Status">Working Status</label><br>
        <input type="text" name="Working Status" placeholder="Working Status"><br> -->
        <label for="Working_Status">Working Status</label><br><br>
        Full-Time: <input type="radio" name="Working_Status" value="Full-Time">
        Part-Time: <input type="radio" name="Working_Status" value="Part-Time"><br><br>
        
        <label for="Contact_No">Contact No</label><br>
        <input type="text" name="Contact_No" placeholder="Contact No"><br>
        
        <label for="Hourly_Rate">Hourly Rate</label><br>
        <input type="text" name="Hourly_Rate" placeholder="Hourly Rate"><br>
        
        
        <button type="submit" name="submit">Submit</button>


    </form>
</div>
</body>

</html>