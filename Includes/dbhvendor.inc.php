<?php
session_start();
$dbServerName = "localhost";
$dbUserName = "Vendor";
$dbPassword = $_SESSION['vendorpassword'];
$dbName = "hospital";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);