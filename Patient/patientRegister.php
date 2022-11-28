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

      <center><h2>For In Patients</h2></center>

        <label for="Name">FullName</label><br>
        <input type="text" name="Name" placeholder="FullName"><br>
        
        <label for="Admitted_Date">Admitted Date</label><br>
        <input type="date" name="Admitted_Date" placeholder="Admitted Date"><br>
        
        <label for="Admitted_Time">Admitted Time</label><br>
        <input type="time" name="Admitted_Time" placeholder="Admitted Time"><br>
        
        <!-- <label for="Discharged_Date">Discharged Date</label><br>
        <input type="date" name="Discharged_Date" placeholder="Discharged Date"><br>
        
        <label for="Discharged_Time">Discharged Time</label><br>
        <input type="time" name="Discharged_Time" placeholder="Discharged Time"><br>

        <label for="Patient_Status">Patient Status</label><br><br>
        In Patient: <input type="radio" name="Patient_Status" value="In-Patient">
        Out Patient: <input type="radio" name="Patient_Status" value="Out-Patient"><br><br> -->

        <label><b><h3>Emergency Contact Details</h3></b></label><br>

        <label for="EFname">First Name</label><br>
        <input type="text" name="EFname" placeholder="First Name"><br>

        <label for="ELname">Last Name</label><br>
        <input type="text" name="ELname" placeholder="Last Name"><br>

        <label for="EAddress">Address</label><br>
        <input type="text" name="EAddress" placeholder="Address"><br>

        <label for="ERelationship">Relationship</label><br>
        <input type="text" name="ERelationship" placeholder="Relationship"><br>

        <label for="EContact_No">Contact No</label><br>
        <input type="text" name="EContact_No" placeholder="Contact Number"><br>

        <!-- <label>If In-Patient</label><br>
        <label for="Ward_No">Ward No</label><br>
        <input type="text" name="Ward_No"><br>

        <label for="Bed_ID">Bed ID</label><br>
        <input type="text" name="Bed_ID"><br>
        

        <label><b><h3>Insurance Company Details</h3></b></label><br>

        <label for="Company_Name">Company Name</label><br>
        <input type="text" name="Company_Name" placeholder="Company Name"><br>

        <label for="Company_Address">Company Address</label><br>
        <input type="text" name="Company_Address" placeholder="Company Address"><br>

        <label for="Branch_Name">Branch Name</label><br>
        <input type="text" name="Branch_Name" placeholder="Branch Name"><br>

        <label for="Branch_Address">Branch Address</label><br>
        <input type="text" name="Branch_Address" placeholder="Branch Address"><br>

        <label for="IContact_No">Contact No</label><br>
        <input type="text" name="IContact_No" placeholder="Contact Number"><br>

        <label><b><h3>Insurance Subscriber Details</h3></b></label><br>

        <label for="SFname">First Name</label><br>
        <input type="text" name="SFname" placeholder="First Name"><br>

        <label for="SLname">Last Name</label><br>
        <input type="text" name="SLname" placeholder="Last Name"><br>

        <label for="SAddress">Address</label><br>
        <input type="text" name="SAddress" placeholder="Address"><br>

        <label for="SRelationship">Relationship</label><br>
        <input type="text" name="SRelationship" placeholder="Relationship"><br>

        <label for="SContact_No">Contact No</label><br>
        <input type="text" name="SContact_No" placeholder="Contact Number"><br>-->

        <button type="submit" name="submitin">Submit</button>


    </form>

    <form action="Includes/Register.inc.php" method="post">

      <center><h2>For Out Patients</h2></center>

      <label for="Name">FullName</label><br>
      <input type="text" name="Name" placeholder="FullName"><br>

      <!-- <label for="Patient_Status">Patient Status</label><br><br>
      In Patient: <input type="radio" name="Patient_Status" value="In-Patient">
      Out Patient: <input type="radio" name="Patient_Status" value="Out-Patient"><br><br> -->
      
      <label for="Arrival_Date">Arrival Date</label><br>
      <input type="date" name="Arrival_Date" placeholder="Arrival Date"><br>
      
      <label for="Arrival_Time">Arrival Time</label><br>
      <input type="time" name="Arrival_Time" placeholder="Arrival Time"><br>

      <button type="submit" name="submitout">Submit</button>
    
    </form>

</div>
</body>

</html>