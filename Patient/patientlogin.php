<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../stylelogins.php">
</head>
<body>
  <div class="home">
    <h4><a href="http://localhost/System/index.php"> Home </a></h4>
  </div>
    <center><h2>Please Enter The Password</h2></center>
<div class="form">
    <form action="Includes/login.inc.php" method="post">
      <br><label for="User_Name">User Name</label><br>
      <input type="text" name="User_Name" placeholder="username"><br>

      <label for="Password">Password</label><br>
      <input type="password" name="Password" placeholder="password"><br><br>
        
        
        
      <center><button type="submit" name="submit">Submit</button></center>


    </form>
</div>
</body>


</html>