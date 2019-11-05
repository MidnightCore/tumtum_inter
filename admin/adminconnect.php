<?php

ini_set('display_errors', 1);
error_reporting(~0);

$host = "localhost";
$user = "root";
$password = "";
$dbname = "bakerydata";


$con = mysqli_connect($host, $user, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Database Connect Failed : " . mysqli_connect_error();
    exit();
}

//*** Reject user not online
$intRejectTime = 1; // Minute
$sql = "UPDATE admintb SET LoginStatusad = '0', LastUpdatead = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastUpdatead, INTERVAL $intRejectTime MINUTE) <= NOW() ";
$query = mysqli_query($con, $sql);
