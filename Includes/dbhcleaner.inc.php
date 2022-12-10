<?php
session_start();
$dbServerName = "localhost";
$dbUserName = "Cleaner";
$dbPassword = $_SESSION['cleanerpassword'];
$dbName = "hospital";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);