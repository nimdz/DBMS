<?php
session_start();
$dbServerName = "localhost";
$dbUserName = "Doctor";
$dbPassword = $_SESSION['doctorpassword'];
$dbName = "hospital";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);