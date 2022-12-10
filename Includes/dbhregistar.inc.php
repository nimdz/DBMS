<?php
session_start();
$dbServerName = "localhost";
$dbUserName = "Registrar";
$dbPassword = $_SESSION['registrarpassword'];
$dbName = "hospital";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);