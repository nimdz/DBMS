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
    <center><h2>Fill This Form To View Ward Details</h2></center>
<div class="form">
    <form action="Includes/Viewward.inc.php" method="post">
        <label for="Ward_No">Ward No</label><br>
        <input type="text" name="Ward_No" placeholder="Ward Number"><br>
        
        <button type="submit" name="submit">Submit</button>


    </form>
</div>
</body>

</html>