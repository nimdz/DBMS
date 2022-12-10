<?php
session_start();
$dbServerName = "localhost";
$dbUserName = "Patient";
$dbPassword = $_SESSION['patientpassword'];
$dbName = "hospital";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);